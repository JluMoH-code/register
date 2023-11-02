<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

Route::get('/register', "RegisterController@create")->middleware('guest')->name('register.create');
Route::post('/register', "RegisterController@store")->middleware('guest')->name('register.store');

Route::view('/main', "main")->name('main');
Route::view('/home', 'home')->middleware('auth')->name('home');
Route::view('/login', 'login')->middleware('guest')->name('login');

Route::get('/email/verify', fn()=>view('email_verify'))->middleware('auth')->name('verify');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->intended(route('verify'));
})->middleware(['auth', 'signed'])->name('verification.verify');

