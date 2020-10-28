<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Your Posts</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/main/posts.css">
    </head>
    <body>     
        @foreach ($posts as $post)
            <div>
                <h1>Title: {{ $post->name }}</h1>
                <h2>Description: {{ $post->description }}</h2>
                <p>Body: {{ $post->body }}</p>
            </div>
        @endforeach
    </body>
</html>
