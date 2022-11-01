<?php

namespace App\Http\Controllers;

use App\Models\trainee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class userRegesterController extends Controller
{
    //
    public function showuserRegester()
    {
        return response()->view('cms.auth.createAccount');
    }


    public function regesterUser(Request $request, trainee $trainee)
    {
        $validator = validator($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|unique:trainees',
            'phone' => 'required|string|min:3',
            'password' => 'required|string|min:5',

        ]);
        if (!$validator->fails()) {
            $validator = new trainee();
            $trainee->name  = $request->input('name');
            $trainee->email = $request->input('email');
            $trainee->phone = $request->input('phone');
            $trainee->password = Hash::make($request->input('password'));
            $isSaved = $trainee->save();
            return response()->json(
                ['message' => $isSaved ? 'Trainee created successfully' : 'trainee failed'],
                $isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
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
}
