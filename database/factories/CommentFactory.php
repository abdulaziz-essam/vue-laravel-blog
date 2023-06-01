<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
          //
        // \App\Comment::create([
        //     'body'=>'some comment here from a simple user',
        //     'user_id'=>1,
        //     'post_id'=>1,
        // ]);
        // \App\Comment::create([
        //     'body'=>'some comment here from a simple user',
        //     'user_id'=>1,
        //     'post_id'=>2,
        // ]);
        // \App\Comment::create([
        //     'body'=>'some comment here from a simple user',
        //     'user_id'=>1,
        //     'post_id'=>3,
        // ]);
        return [
            'body'=>'good post',
            'user_id'=>1,
            'post_id'=>1,
        ];
    }
}
