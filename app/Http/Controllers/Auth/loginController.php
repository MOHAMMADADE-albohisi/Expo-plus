<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Symfony\Component\HttpFoundation\Response;

class loginController extends Controller
{
    //
    public function showLoginView(Request $request)
    {
        $request->request->add(['guard' => $request->guard]);
        $validator = validator($request->all(), [
            'guard' => 'required|string|in:admins,users,trainees'
        ]);
        $request->session()->put('guard', $request->input('guard'));
        if (!$validator->fails()) {
            return response()->view('cms.auth.login');
        } else {
            abort(Response::HTTP_NOT_FOUND, 'The page you have requseted is not found');
        }
    }



    public function login(Request $request)
    {

        $validator = validator([
            'email' => 'required|email',
            'password' => 'required|string|min:3',
        ]);
        $guard = session()->get('guard');
        if (!$validator->fails()) {
            $crednrtials = [
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ];
            if (Auth::guard($guard)->attempt($crednrtials)) {
                return response()->json(['message' => 'login success'], Response::HTTP_OK);
            } else {
                return response()->json(
                    ['message' => 'Login failed, check login details'],
                    Response::HTTP_BAD_REQUEST
                );
            }
        } else {
            return response()->json(
                ['message' => $validator->getMessageBag()->first()],
                Response::HTTP_BAD_REQUEST
            );
        }
    }


    public function showForgotpassword()
    {
        $guard = session('guard');
        return response()->view('cms.auth.forgetPass', ['guard' => $guard]);
    }

    public function sendResetLink(Request $request)
    {

        $validator = Validator($request->all(), [
            'email' => 'required|email',
        ]);
        if (!$validator->fails()) {
            $status = Password::sendResetLink(['email' => $request->input('email')]);
            return response()->json(
                ['message' => __($status)],
                $status === Password::RESET_LINK_SENT
                    ? Response::HTTP_OK
                    : Response::HTTP_BAD_REQUEST
            );
        } else {
            return response()->json(
                [
                    'message' => $validator->getMessageBag()->first()
                ],
                Response::HTTP_BAD_REQUEST
            );
        }
    }

    public function shoewResetPassword(Request $request, $token)
    {
        $guard = session('guard');
        return response()->view('cms.auth.createPass', ['token' => $token, 'guard' => $guard, 'email' => $request->input('email')]);
    }

    public function resetPassword(Request $request)
    {
        //
        $validator = validator($request->all(), [
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|confirmed',
        ]);
        if (!$validator->fails()) {
            $status = Password::reset(
                $request->only(
                    'email',
                    'token',
                    'password',
                    'password_confirmation'
                ),
                function ($user, $password) {
                    $user->password = Hash::make($password);
                    $user->save();
                }
            );
            return response()->json(
                ['message' => __($status)],
                $status === Password::PASSWORD_RESET
                    ? Response::HTTP_OK
                    : Response::HTTP_BAD_REQUEST
            );
        } else {
            return response()->json(
                [
                    'message' => $validator->getMessageBag()->first()
                ],
                Response::HTTP_BAD_REQUEST
            );
        }
    }




    public function logout(Request $request)
    {
        $guard = session('guard');
        Auth::guard($guard)->logout();
        $request->session()->invalidate();
        return redirect()->route('auth.login', $guard);
    }
}
