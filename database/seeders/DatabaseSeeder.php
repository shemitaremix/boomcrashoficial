<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/posts');
        Storage::makeDirectory('public/posts');
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(6)->create();
        $this->call(PostSeeder::class);
    }
}
