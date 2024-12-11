<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'license_number',
        'phone',
        'email',
        'status',
    ];

    public function availabilityRules()
    {
        return $this->hasMany(AvailabilityRule::class);
    }
}

