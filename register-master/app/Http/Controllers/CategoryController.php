<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'required|string',
        ]);

        $user = Category::create([
            'title' => $request->title,
        ]);

        return redirect()->route('category.index');
    }
}
