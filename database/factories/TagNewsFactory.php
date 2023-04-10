<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Models\News;
use App\Models\Tags;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TagNews>
 */
class TagNewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private function cycle(Collection $collection) {
        while (true) {
            foreach ($collection as $item) {
                yield $item;
            }
        }
    }
    public function definition(): array
    {

        return [
            "tags_id" => Tags::get()->random()->id,
            "news_id" => News::inRandomOrder()->first()->id,
        ];
    }
}
