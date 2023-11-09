<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/register', "RegisterController@create")->middleware('guest')->name('register.create');
Route::post('/register', "RegisterController@store")->middleware('guest')->name('register.store');

//Route::get('/email/verify', fn()=>view('email_verify'))->middleware('auth')->name('verify');
Route::get('/email/verify', fn()=>response()->json(['message' => 'Email verified success']))->middleware('auth')->name('verify');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('verify');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/email/verify/notice', fn()=>response()->json(['message' => 'Email must be verified']))->middleware('auth')->name('verification.notice');

