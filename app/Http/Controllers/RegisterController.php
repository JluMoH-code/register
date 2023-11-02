<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;

class RegisterController extends Controller
{
    public function create() {
        $authors = Author::all()->take(10);
        $categories = Category::all()->take(10);
        return view('register', compact('authors', 'categories'));
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
            'authors' => 'exists:authors,id',
            'categories' => 'exists:categories,id'
        ],[
            'login.required' => 'Введите логин!',
            'login.unique' => 'Пользователь с таким логином уже существует!',     // пользовательские ошибки

            'email.required' => 'Введите mail!',
            'email.unique' => 'Пользователь с таким email уже существует',
            'email.email' => 'Введите корректный email',

            'password.required' => 'Введите пароль!',
            'password.min:8' => 'Пароль должен содержать минимум 8 символов',
            'password.confirmed' => 'Пароли не совпадают!',

            'name.string' => 'Имя должно быть строкой',
            'secondary_name.string' => 'Фамилия должна быть строкой',
            'birthday.date' => 'День рождения должен быть датой',
            'phone_number.unique' => 'Пользователь с таким номером телефона уже существует!',
            'phone_number.regex:/(7)[0-9]{10}/' => 'Телефон должен соответсвовать виду: 7ХХХХХХХХХХ',
            'about.string' => 'Должно быть строкой',
            'photo.image' => 'Загржуено не фото',
            'photo.mimes:jpeg,jpg,png,svg' => 'Поддерживаемые расширения файлов: jpeg,jpg,png,svg',
            'photo.max:2048' => 'Размер фото превышает 2 Мб',
            'authors.exists:authors,id' => 'Автор не существует',
            'categories.exists:categories,id' => 'Категория не существует',
        ]);

        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('images', 'public');
        }

        $user = User::create([
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user_info = UserInfo::create([
            'name' => $request->name,
            'secondary_name' => $request->secondary_name,
            'birthday' => $request->birthday,
            'phone_number' => $request->phone_number,
            'about' => $request->about,
            'photo' => $path ?? null,
            'user_id' => $user->id,
        ]);

        $user->authors()->attach($request->authors);
        $user->categories()->attach($request->categories);

//        event(new Registered($user));

        return redirect()->route('user.index');
    }
}
