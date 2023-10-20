<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;

class RegisterController extends Controller
{
    public function index() {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function create() {
        return view('register');
    }

    public function store(Request $request) {

        $request->validate([
            'login' => 'required|string|unique:users|alpha_dash',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create([
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('register.index');
    }

    public function show(User $user) {
        $categories = $user->categories;
        $authors = $user->authors;
        return view('show', compact('user', 'categories', 'authors'));
    }
}
