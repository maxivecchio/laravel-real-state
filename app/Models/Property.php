<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';

    protected $fillable = [
        'title',
        'description',
        'price',
        'address',
        'country',
        'zipcode',
        'city',
        'state',
        'kitchen',
        'bedroom',
        'bathroom',
        'office',
        'garage',
        'floors',
        'size',
        'image_path',
        'owner_id',
        'status_id'
    ];

    public function status()
    {
        return $this->belongsTo(PropertyStatus::class, 'status_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}