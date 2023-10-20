<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::all();
        return view('author.index', compact('authors'));
    }

    public function create() {
        return view('author.create');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|string',
            'secondary_name' => 'required|string',
            'surname' => 'required',
            'birthday' => 'required|date',
            'day_death' => 'date',
        ]);

        $user = Author::create([
            'name' => $request->name,
            'secondary_name' => $request->secondary_name,
            'surname' => $request->surname,
            'birthday' => $request->birthday,
            'day_death' => $request->day_death,
        ]);

        return redirect()->route('author.index');
    }
}
