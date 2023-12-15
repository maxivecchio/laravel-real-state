<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comparison extends Model
{

    protected $table = 'comparisons';
    protected $fillable = [
        'user_id',
        'property1_id',
        'property2_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function property1()
    {
        return $this->belongsTo(Property::class, 'property1_id');
    }

    public function property2()
    {
        return $this->belongsTo(Property::class, 'property2_id');
    }

}

