<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vehicle;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
            'vehicle_type_id' => \App\Models\VehicleType::factory(),
            'vehicle_company_id' => \App\Models\VehicleCompany::factory(),
            'name' => $this->faker->word(),
            'license_plate' => $this->faker->unique()->regexify('[A-Z]{3}-[0-9]{3}'),
            'model' => $this->faker->word(), // Add the 'model' field
            'capacity' => $this->faker->numberBetween(2, 7),
            'status' => $this->faker->randomElement(['available', 'unavailable']),
        ];
    }
}
