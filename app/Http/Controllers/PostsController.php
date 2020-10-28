<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Methods for views to show live here and get called in the routes.

    // Show all posts
    public function show() {
        return view('post');
    }
}
