<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Database\Factories\PostFactory;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::factory()->count(10)->create();
    }
}



