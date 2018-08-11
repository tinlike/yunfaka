<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();

        return view('welcome', compact('categories'));
    }
}
