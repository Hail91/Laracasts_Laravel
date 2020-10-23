<?php

namespace App\Http\Controllers;

// use DB;
// use App\Post;

class PostsController extends Controller {
    public function show($post) {
        // Example of grabbing data from database
        // $post = DB::table('posts')->where('slug', $slug)->first();

        // Example of connecting to a DB model class
        // $post = Post::where('slug', $slug)->firstOrFail();
        $posts = [
            'my-first-post' => 'Hello, this is my first blog post!',
            'my-second-post' => 'Now I am getting the hang of this blogging thing.'
        ];

        // Dump data to the view and then exit
        // dd($post)
        
        if(!array_key_exists($post, $posts)) {
            abort(404, 'Sorry, could not find that post!');
        }
        return view('test', [
            'post' => $posts[$post]
        ]);
    }
}