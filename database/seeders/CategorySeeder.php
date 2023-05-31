<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Database\Factories\CategoryFactory;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::factory()->count(10)->create();
    }
}



