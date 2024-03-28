<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::POST('/addNewProducts', [PostController::class, 'index']);
