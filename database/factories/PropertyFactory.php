<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => 'House',
            'price' => $this->faker->randomFloat(2, 100000, 5000000),
            'country' => $this->faker->country,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'address' => $this->faker->streetAddress,
            'zipcode' => $this->faker->postcode,
            'size' => $this->faker->randomFloat(1, 50, 500),
            'image_path' => 'https://www.zillowstatic.com/bedrock/app/uploads/sites/47/GA_ATL_DOWNTOWN_82792_078-RT_RT_cropRT-5f9e47.jpg',
        ];
    }
}

