<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', "RegisterController@index")->name('register.index');
Route::get('/register', "RegisterController@create")->name('register.create');
Route::post('/register', "RegisterController@store")->name('register.store');
Route::get('/users/{user}', "RegisterController@show")->name('register.show');

Route::get('authors', "AuthorController@index")->name('author.index');
Route::get('authors/create', "AuthorController@create")->name('author.create');
Route::post('authors/create', "AuthorController@store")->name('author.store');

Route::get('categories', "CategoryController@index")->name('category.index');
Route::get('categories/create', "CategoryController@create")->name('category.create');
Route::post('categories/create', "CategoryController@store")->name('category.store');

Route::view('/main', "main")->name('main');
