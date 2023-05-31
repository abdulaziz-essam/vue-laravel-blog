<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\User;
use Database\Factories\UserFactory;
class UserSeeder extends Seeder

    {
        public function run()
        {
            User::factory()->count(10)->create();
        }
    }



