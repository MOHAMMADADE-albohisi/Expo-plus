<?php

use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\userRegesterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('cms.auth.Instructorlogin');
});


Route::prefix('cms')->middleware('guest:admin,user,trainee')->group(function () {
    Route::get('/{guard}/login', [loginController::class, 'showLoginView'])->name('auth.login');
    Route::post('/login', [loginController::class, 'login']);

    Route::get('/user-regester', [userRegesterController::class, 'showuserRegester'])->name('user-regester');
    Route::post('/regester', [userRegesterController::class, 'regesterUser']);

    Route::get('forgot-password', [loginController::class, 'showForgotpassword'])->name('password.forgot');
    Route::post('forgot-password', [loginController::class, 'sendResetLink']);

    Route::get('reset-password/{token}', [loginController::class, 'shoewResetPassword'])->name('password.reset');
    Route::post('reset-password', [loginController::class, 'resetPassword']);
});



Route::prefix('cms/admin')->middleware('auth:admin,user,trainee')->group(function () {
    Route::view('/', 'cms.welcome')->name('home');

    Route::get('/logout', [loginController::class, 'logout'])->name('auth.logout');
});
