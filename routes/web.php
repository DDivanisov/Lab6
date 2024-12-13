<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::resource('categories', CategoryController::class);

Route::resource('posts', PostController::class);