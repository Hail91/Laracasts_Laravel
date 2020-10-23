<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ** IMPORTANT NOTE ABOUT NAMING CONVENTIONS **

/* However be careful. Generally there are naming conventions in Laravel 
(model: Post, table: posts, primary key: posts.id, foreign key referring to primary 
key: comments.post_id etc). If you follow naming conventions your life will be easier, 
code you need to write will be simpler - as Laravel will guess for example foreign keys
in relationships. As soon you decide to break those, "magic" stops working.
And there are a lot of people starting Laravel who for completely unknown reasons 
have to ignore it and name primary key post_id or id_post (why??? it's obvious it's 
post as you're in posts table) or name the table tbl_posts and don't understand why 
their code doesn't work */

class post extends Model {
    use HasFactory;
}
