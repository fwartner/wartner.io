<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(20)->create();

        $posts->each(function ($post) {
            $post->categories()->attach(rand(1, 4));
        });
    }
}
