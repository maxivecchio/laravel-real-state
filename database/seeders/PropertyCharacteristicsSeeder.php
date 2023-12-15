<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\PropertyCharacteristics;

class PropertyCharacteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $property = Property::latest()->first();

        if ($property) {
            PropertyCharacteristics::create([
                'property_id' => $property->id,
                'bedroom' => 3,
                'bathroom' => 2,
                'garage' => 1,
                'kitchen' => 2,
                'office' => 1,
                'floors' => 2
            ]);
        }
    }
}
