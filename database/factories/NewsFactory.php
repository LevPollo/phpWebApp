<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return
            [
                'user_id' => 50,
                'title' => $this->faker->title(20),
                'text' => $this->faker->text,
                'category_id' => Categories::get()->random()->id,
                'image' => $this->faker->imageUrl(),


            ];
    }
}
