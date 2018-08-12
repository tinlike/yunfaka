<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();
        return view('admin.category.index', compact('categories'));
    }

    public function create(Request $request)
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        $category = new Category();
        $category->name = $name;

        $status = 'fail';
        if ($category->save()) {
            $status = 'success';
        }

        return [
            'status' => $status
        ];
    }

    public function destroy(Request $request, $id)
    {
        $category = Category::find($id);
        $status = 'fail';
        if ($category->delete()) {
            $status = 'success';
        }
        return [
            'status' => $status
        ];
    }
}
