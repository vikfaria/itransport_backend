<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingRule extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id',
        'vehicle_type_id',
        'base_price',
        'price_per_km',
        'price_per_hour',
    ];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }
}

