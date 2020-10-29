<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Methods for views to show live here and get called in the routes.

    // Show all posts
    public function show() {
        return view('post', ['posts' => Posts::all()]);
    }
    // Create a post 
    public function create() {
        return view('addPost');
    }
}
