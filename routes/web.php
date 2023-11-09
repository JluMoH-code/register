<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;


Route::view('/main', "main")->name('main');
Route::view('/home', 'home')->middleware(['auth', 'verified'])->name('home');
Route::view('/login', 'login')->middleware('guest')->name('login');


