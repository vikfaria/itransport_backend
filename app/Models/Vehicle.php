<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type_id',
        'vehicle_company_id',
        'name',
        'license_plate',
        'model', // Ensure 'model' is fillable
        'capacity',
        'status',
    ];

    public function type()
	{
		return $this->belongsTo(VehicleType::class, 'vehicle_type_id');
	}

	public function company()
	{
		return $this->belongsTo(VehicleCompany::class, 'vehicle_company_id');
	}

	public function attributes()
    {
        return $this->hasMany(VehicleAttribute::class);
    }
}

