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
        'kitchen',
        'bedroom',
        'bathroom',
        'office',
        'garage',
        'floors',
        'size',
        'image_path',
        'owner_id',
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