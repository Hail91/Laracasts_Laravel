<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Your Posts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('/css/main/posts.css') }}">
</head>
<body>
    <div class="main-container">
        <h1 class="all-posts-title">View all posts</h1>
        <a class="create-post-btn" href="/posts/create"><button style="cursor:pointer">Create Post</button></a>
        <div class="posts-container">     
            @foreach ($posts as $post)
            <div class="single-post-container">
                <h1>Title: {{ $post->name }}</h1>
                <h2>Description: {{ $post->description }}</h2>
                <p>Body: {{ $post->body }}</p>
                <div class="post-actions-btns">
                    <a href="/posts/{{ $post->id }}/edit"><button>Update Post</button></a>
                    <a><button>Delete Post</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
