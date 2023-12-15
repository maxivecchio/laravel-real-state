<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Property::create([
            'type' => 'House',
            'price' => 300000.00,
            'country' => 'CountryName',
            'state' => 'StateName',
            'city' => 'CityName',
            'address' => '123 Main St',
            'zipcode' => 12345,
            'size' => 120.5,
            'image_path' => 'https://www.zillowstatic.com/bedrock/app/uploads/sites/47/GA_ATL_DOWNTOWN_82792_078-RT_RT_cropRT-5f9e47.jpg',
        ]);
    }
}

