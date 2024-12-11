<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'route_id' => \App\Models\Route::factory(),
            'vehicle_id' => \App\Models\Vehicle::factory(),
            'driver_id' => \App\Models\Driver::factory(), // Ensure 'driver_id' is provided
            'status' => 'pending',
            'booking_date' => $this->faker->dateTime(),
            'pickup_date' => $this->faker->dateTimeBetween('now', '+1 days'),
            'dropoff_date' => $this->faker->dateTimeBetween('+2 days', '+3 days'),
        ];
    }
}
