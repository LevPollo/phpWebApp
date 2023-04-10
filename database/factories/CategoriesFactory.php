<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $categories = [
             "politics",
             "entertainment",
             "health",
             "techno",
             "transport",
             "live"
         ];

        return [
            "title" => fake()->unique()->randomElement($categories),
            "description" => fake()->realTExt(200, 2),
        ];
    }
}
