<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public $model = User::class;

    public function definition()
    {
        return [
            'name'=>'ahmad khalid',
            'email'=>'ahmad@gmail.com',
            'password'=>bcrypt('1111'),
            'profile_img'=>'profile_img1.jpg'
        ];
    }
}
