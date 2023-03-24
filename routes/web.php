<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('blog', PostController::class);
//Route::get('search', PostController::class);
Route::get('/search', 'App\Http\Controllers\PostController@search');
//Route::get('/blog', 'App\Http\Controllers\PostController@store_image');