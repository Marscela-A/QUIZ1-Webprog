<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomePageController extends Controller
{
    public function index(){
        $latestArticles=Article::latest()->paginate(5);
        return view('menu.home', compact('latestArticles'));
    }
}
