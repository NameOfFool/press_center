<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function categories(){
        $categories = Category::where('parent_id','=',0)->get();
        $allCategories = Category::pluck('name','id')->all();
        return view('admin.index',compact('categories','allCategories'));
    }
    public function createCategory(){
        $categories = Category::get();
        return view('admin.categories.create',compact('categories'));
    }
    public function postCategory(Request $request){
        $name = $request->name;
        Category::create([
           'name'=>$name
        ]);
        return redirect('/admin');
    }
}
