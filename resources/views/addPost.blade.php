<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Post</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('/css/main/add_posts.css') }}">
</head>
<body>
    <div class="add-post-form-container">
        <h1 class="add-posts-title">Add a post!</h1>
        <div class="add-post-container">     
            <!-- Form can live here -->
            <form method="POST" action="/posts">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <div>
                        <input type="text" name="name" id="name">
                        @if ($errors->has('name'))
                            <p>{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                </div>
                <div>
                    <label for="description">Description</label>
                    <div>
                        <textarea name="description" id="description"></textarea>
                        @if ($errors->has('description'))
                            <p>{{ $errors->first('description') }}</p>
                        @endif
                    </div>
                </div>
                <div>
                    <label for="body">Body</label>
                    <div>
                        <textarea name="body" id="body"></textarea>
                        @if ($errors->has('body'))
                            <p>{{ $errors->first('body') }}</p>
                        @endif
                    </div>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>