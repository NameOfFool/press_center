<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function categories()
    {
        $categories = Category::whereNull('parent_id')->get();
        $allCategories = Category::pluck('name', 'id')->all();
        return view('admin.index', compact('categories', 'allCategories'));
    }

    public function createCategory()
    {
        $categories = Category::get();
        return view('admin.categories.create', compact('categories'));
    }

    public function postCategory(Request $request)
    {
        $name = $request->name;
        $parent_id = $request->root;
        $category = new Category();
        $category->name = $name;
        $category->parent_id = $parent_id;
        $category->save();
        return redirect('/admin');
    }
}
