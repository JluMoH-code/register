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

Route::get('/authors', "AuthorController@index")->name('author.index');
Route::get('/categories', "CategoryController@index")->name('category.index');
Route::post('/register', "RegisterController@store")->middleware('guest')->name('register.store');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return response()->json(['message' => 'Success verified']);
})->middleware(['auth', 'signed'])->name('verification.verify');
