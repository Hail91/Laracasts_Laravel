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
    // Create a post view
    public function create() {
        return view('addPost');
    }
    // Store created post in the database and redirect to view all posts
    public function store() {
        request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'max:255'],
            'body' => ['required', 'max:255'],
        ]);

        $post = new Posts();

        $post->name = request('name');
        $post->description = request('description');
        $post->body = request('body');

        $post->save();
        return redirect("/posts");
    }
}
