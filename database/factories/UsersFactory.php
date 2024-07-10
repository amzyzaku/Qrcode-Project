<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'reg_number' => "19/" . fake()->randomNumber(5) . "U/2",
            'phone_number' => fake()->phoneNumber(),
            'country' => fake()->country(),
            'state' => "Bauchi",
            'level' => "300",
            'courses' => "ME 343"
        ];
    }
}
