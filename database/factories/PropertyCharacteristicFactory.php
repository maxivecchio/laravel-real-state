<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyCharacteristic>
 */
class PropertyCharacteristicFactory extends Factory
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
            'size' => $this->faker->numberBetween(50, 200),
            'image_path' => $this->faker->imageUrl(),
            'owner_id' => User::inRandomOrder()->first()->id,
            'status_id' => PropertyStatus::inRandomOrder()->first()->id,
        ];
    }
}
