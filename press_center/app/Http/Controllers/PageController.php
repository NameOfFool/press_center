<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function index(){
        $news = News::paginate(3);
        return view('welcome',compact('news'));
    }
    public function news(){
        $news = News::find(1);
        return view('news',compact('news'));
    }
}
