<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Image;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(4)->create();

        foreach ($posts as $post){
            
            $post->tags()->attach([
                rand(1,2),
                rand(5,4)
            ]);
        }
    }
}
