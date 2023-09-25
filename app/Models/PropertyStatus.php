<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyStatus extends Model
{
    use HasFactory;

    protected $fillable = ['status_name'];

    /**
     * Relación uno a muchos con Property.
     * Un estado puede estar asociado a muchas propiedades.
     */
    public function properties()
    {
        return $this->hasMany(Property::class, 'status_id');
    }
}