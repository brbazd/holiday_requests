<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HolidayRequest>
 */
class HolidayRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee' => fake()->numberBetween(1,50),
            'reason' => fake()->paragraph(2,true),
            'status' => fake()->randomElement(['pending','rejected','approved'])
        ];
    }
}
