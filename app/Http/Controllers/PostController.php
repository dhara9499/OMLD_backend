<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController
{
    public function index()
    {
        $posts = "Hello Dhara!";
        return response()->json($posts);
    }
}
