<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/test', function () {
//     // You can access data from Query string in Laravel with request function
//     $name = request('name');
//     /* You can pass data to the view by passing a second argument to view function
//     containing data you'd like to pass and render */
//     return view('test', [
//         'name' => $name
//     ]);
// });

/* Can pass 'wildcard' value into the closure (anonymous function) 
and return it to the UI like below. */

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'Hello, this is my first blog post!',
//         'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//     ];

//     if(!array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found!');
//     }

//     return view('test', [
//         'post' => $posts[$post]
//     ]);
// });

// ** Rewrite above route to utilize a controller instead **

// Route::get('/posts/{post}', [PostsController::class, 'show']);

// Route to welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route to retrive all posts
Route::get('/posts', [PostsController::class, 'show']);
