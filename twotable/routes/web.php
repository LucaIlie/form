<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


Route::get('/',[PageController::class,'index'])->name('index');
Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);
