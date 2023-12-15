<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'properties';

    protected $fillable = [
        'type',
        'price',
        'country',
        'state',
        'city',
        'address',
        'zipcode',
        'size',
        'image_path',
    ];

    public function characteristics()
    {
        return $this->hasOne(PropertyCharacteristics::class);
    }
}