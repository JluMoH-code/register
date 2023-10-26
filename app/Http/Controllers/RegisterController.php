<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_info;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;

class RegisterController extends Controller
{
    public function create() {
        return view('register');
    }

    public function store(Request $request) {

        $request->validate([
            'login' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'name' => 'string|nullable',
            'secondary_name' => 'string|nullable',
            'birthday' => 'date|nullable',
            'phone_number' => 'nullable|regex:/(7)[0-9]{10}/|unique:user_infos', // у всех пользователей должен быть разный телефон
            'about' => 'string|nullable',
            'photo' => 'image|mimes:jpeg,jpg,png,svg|max:2048|nullable',
        ],[
            'login.unique' => 'Пользователь с таким email уже существует!',     // пользовательские ошибки
        ]);

        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('images', 'public');
        }

        $user = User::create([
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user_info = User_info::create([
            'name' => $request->name,
            'secondary_name' => $request->secondary_name,
            'birthday' => $request->birthday,
            'phone_number' => $request->phone_number,
            'about' => $request->about,
            'photo' => $path ?? null,
            'user_id' => $user->id,
        ]);

//        event(new Registered($user));

        return redirect()->route('user.index');
    }
}
