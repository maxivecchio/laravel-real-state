<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Property;

class PropertyFactory extends Factory
{
    protected $model = Property::class;

    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100000, 1000000),
            'location' => $this->faker->address,
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 3),
            'size' => $this->faker->numberBetween(50, 200),
            'type' => $this->faker->randomElement(['Casa', 'Departamento', 'Terreno']),
            'status' => $this->faker->randomElement(['En Venta', 'Alquilada']),
            'image_path' => $this->faker->imageUrl(),
            'owner_id' => 1
        ];
    }
}