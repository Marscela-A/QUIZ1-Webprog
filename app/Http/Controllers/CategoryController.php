<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class CategoryController extends Controller
{
    public function dataScience(){
        $articles=Article::where('category', 'Data Science')->get();
        return view('menu.category.dataScience', compact('articles'));
    }

    public function networkSecurity(){
        $articles=Article::where('category', 'Network Security')->get();
        return view('menu.category.networkSecurity', compact('articles'));
    }

    public function show($id){
        $article=Article::findOrFail($id);
        return view('menu.category.detail', compact('article'));
    }
}
