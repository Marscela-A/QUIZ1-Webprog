<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WritersController extends Controller
{
    public function index(){
        $writers=Writer::all();
        return view('menu.writers.index',compact('writers'));
    }

    public function show(Writer $writer){
        $articles=$writer->articles;
        return view('menu.writers.writersArticle',compact('writer', 'articles'));
    }
}
