<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserPermissions>
 */
class UserPermissionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => fake()->unique()->numberBetween(1, 100),
            "is_admin" => 0,
            "is_moderator" => 0,
            "is_author" => 0,
            "is_baned" => 0,
        ];
    }
}
