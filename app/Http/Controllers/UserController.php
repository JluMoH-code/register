<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function show(User $user) {
        $categories = $user->categories;
        $authors = $user->authors;
        $user_infos = $user->user_info;
        return view('user.show', compact('user', 'categories', 'authors', 'user_infos'));
    }
}
