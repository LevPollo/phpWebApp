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
        $pathFull = "public/images/article_images/";
        $path = "/images/article_images/";
        $images = scandir($pathFull);
        $images = array_diff($images,array(".",".."));


        return
            [
                'user_id' => User::get()->random()->id,
                'category_id' => Categories::get()->random()->id,
                'title' => fake()->realText(20),
                'text' => fake()->realText(1000),
                'image' => $path.$images[rand(2,count($images))],
            ];
    }
}


