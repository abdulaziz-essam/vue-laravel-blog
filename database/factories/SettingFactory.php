<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    public $model = Setting::class;

    public function definition()
    {
        return [
            'site_name' => $this->faker->company,
            'contact_email' => $this->faker->safeEmail,
            'address' => $this->faker->streetAddress,
        ];
    }
}
