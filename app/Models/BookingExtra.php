<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingExtra extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'extra_name',
        'extra_price',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}

