<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCharacteristics extends Model
{
    use HasFactory;

    protected $fillable = [
        'kitchen',
        'bedroom',
        'bathroom',
        'office',
        'garage',
        'kitchen',
        'floors',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}

