<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/posts', 'App\Http\Controllers\PostController@index');
