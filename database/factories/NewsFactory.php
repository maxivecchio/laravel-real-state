<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'subtitle' => $this->faker->words(11, true),
            'body' => $this->faker->paragraph,
            'author' => $this->faker->words(2, true),
            'category' => $this->faker->words(2, true),
            'display' => $this->faker->boolean(),
            'image_path' => $this->faker->imageUrl(),
        ];
    }


}