<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCharacteristic extends Model
{
    use HasFactory;

    protected $table = 'property_characteristics';

    protected $fillable = [
        'living_room',
        'kitchen',
        'bedroom',
        'bathroom',
        'office',
        'has_garage',
        'floors'
    ];

}
