<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::get()->random(),
            'title' => fake()->sentence(4),
            'slug' => function (array $attributes) {
                return $attributes['title'];
            },
            'published_date' => fake()->date('Y-m-d'),
            'summary' => fake()->sentence(5),
            'content' => fake()->sentence(50),
            'is_publish' => 1,
        ];
    }
}
