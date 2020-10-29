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
            <form action="">
                <div>
                    <label for="title">Title</label>
                    <div>
                        <input type="text" name="title" id="title">
                    </div>
                </div>
                <div>
                    <label for="description">Description</label>
                    <div>
                        <textarea name="description" id="description"></textarea>
                    </div>
                </div>
                <div>
                    <label for="body">Description</label>
                    <div>
                        <textarea name="body" id="body"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>