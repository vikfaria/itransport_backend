<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Route;

class RouteFactory extends Factory
{
    protected $model = Route::class;

    public function definition()
    {
        return [
            'pickup_location_id' => \App\Models\Location::factory(),
            'dropoff_location_id' => \App\Models\Location::factory(),
            'distance' => $this->faker->randomFloat(2, 1, 100),
            'estimated_time' => $this->faker->time(),
        ];
    }
}
