<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{
    public $model = Post::class;

    public function definition()
    {
        return [
            'title'=>'a simple title',
            'slug'=>Str::slug('a simple title'),
            'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab,
            quae animi? Minus quis corporis sunt minima veritatis
            culpa consequuntur molestias magni quos, non cumque! Et ex repellat id praesentium suscipit.',
            'image'=>'p1.jpg',
            'user_id'=>2,
            'category_id'=>1

        ];
    }
}
