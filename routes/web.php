<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WritersController;
use App\Http\Controllers\AboutUsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomePageController::class, 'index'])->name('home');

Route::get('/category/data-science', [CategoryController::class, 'dataScience'])->name('category.dataScience');
Route::get('/category/network-security', [CategoryController::class, 'networkSecurity'])->name('category.networkSecurity');
Route::get('/article/{id}', [CategoryController::class, 'show'])->name('article.show');

Route::get('/writers', [WritersController::class, 'index'])->name('writers.index');
Route::get('/writers/{writer}', [WritersController::class, 'show'])->name('writers.show');

Route::get('/aboutUs', [AboutUsController::class, 'index'])->name('aboutUs');