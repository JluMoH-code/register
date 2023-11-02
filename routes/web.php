<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', "RegisterController@create")->middleware('guest')->name('register.create');
Route::post('/register', "RegisterController@store")->middleware('guest')->name('register.store');

//Route::get('/email/verify/{id}/{hash}', fn() => 'verify')->name('verification.verify');

Route::view('/main', "main")->name('main');

