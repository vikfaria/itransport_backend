<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'attribute_name',
        'attribute_value',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}

