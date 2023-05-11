<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrammaryController extends Controller
{
    public function index()
    {
        return view("grammary.index");
    }
}
