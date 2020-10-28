<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed the database with fake posts
        DB::table('posts')->insert([
            'name' => 'The first post',
            'description' => 'This is the first post to test seeds/migrations.',
            'body' => 'The body of the post',
        ]);
    }
}
