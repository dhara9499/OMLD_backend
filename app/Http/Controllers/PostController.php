<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController
{
    public function index(Request $request)
    {
        $posts = "Hello Dhara!";
        echo "<pre>";
        print_r($request->input('name')); 
        die;
        return response()->json($posts);
    }
}
