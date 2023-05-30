<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use Database\Factories\SettingFactory;

class SettingSeeder extends Seeder
{
    public function run()
    {
        Setting::factory()->count(10)->create();
    }
}
