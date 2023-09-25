<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyStatus>
 */
class PropertyStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status_name' => $this->faker->unique()->randomElement(['For Sale', 'For Rent', 'To Buy', 'Purchased'])
        ];
    }

}