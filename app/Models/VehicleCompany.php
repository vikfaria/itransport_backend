<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'contact_email',
        'contact_phone',
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}

