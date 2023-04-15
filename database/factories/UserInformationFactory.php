<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInformation>
 */
class UserInformationFactory extends Factory
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
            "first_name" => fake()->firstName(),
            "last_name" => fake()->lastName(),
            "birthdate" => fake()->dateTime('2000-04-25 08:37:17',"GMT"),
            "avatar" => "/images/users_images/300_avatars/avatar (".rand(1,304).").jpg",
            "country" => fake()->country(),
            "city" => fake()->city(),
            "street" => fake()->streetName(),
            "house_number" => rand(1,100),
            "floor" => rand(1,100),
            "apartment_number" => rand(1,1000),
            "index" => rand(100000,999999)

        ];
    }
}
