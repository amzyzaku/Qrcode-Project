<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\adminmodel>
 */
class adminmodelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => Str::random(6),
            'reg_number' => " ",
            'phone_number' => " ",
            'country' => " ",
            'state' => " ",
            'level' => " ",
            'courses' => " "
        ];
    }
}
