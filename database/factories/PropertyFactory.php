<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
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
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100000, 1000000),
            'address' => $this->faker->words(3, true),
            'country' => $this->faker->words(3, true),
            'zipcode' => $this->faker->numberBetween(2, 8),
            'state' => $this->faker->words(2, true),
            'bedrooms' => $this->faker->numberBetween(1, 3),
            'bathrooms' => $this->faker->numberBetween(1, 3),
            'kitchen' => $this->faker->numberBetween(1, 3),
            'bedroom' => $this->faker->numberBetween(1, 3),
            'bathroom' => $this->faker->numberBetween(1, 3),
            'office' => $this->faker->numberBetween(1, 3),
            'garage' => $this->faker->numberBetween(1, 3),
            'floors' => $this->faker->numberBetween(1, 3),
            'size' => $this->faker->numberBetween(50, 200),
            'image_path' => $this->faker->imageUrl(),
            'owner_id' => 4,
            'status_id' => \App\Models\PropertyStatus::inRandomOrder()->first()->id
        ];
    }


}