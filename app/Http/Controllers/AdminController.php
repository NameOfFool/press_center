<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryNews;
use App\Models\News;
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

    public function getNews($id)
    {

        $news = CategoryNews::getNewsByCategoryId($id);
        return view('admin.news.index', compact('news', 'id'));
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

    public function createNews($id)
    {
        $categories = Category::whereNull('parent_id')->get();
        $allCategories = Category::pluck('name', 'id')->all();
        $current = Category::find($id);
        return view('admin.news.create', compact("categories", 'current', 'allCategories'));
    }

    public function postNews(Request $request)
    {
        $categories = explode(" ", $request->cats);
        $name = $request->name;
        $date_of_publication = $request->date_of_publication;
        $content = base64_encode($request->news_content);
        $date_of_drop = $request->date_of_drop;
        $date_of_creation = now();
        $news = News::create([
            "name" => $name,
            "date_of_publication" => $date_of_publication,
            "date_of_drop" => $date_of_drop,
            "date_of_creation" => $date_of_creation,
            "content" => $content,
        ]);
        $news_id = $news->id;
        foreach($categories as $category){
            CategoryNews::create([
                'category_id' => $category,
                'news_id' => $news_id
            ]);
        }
        return redirect(route("admin"));
    }
}
