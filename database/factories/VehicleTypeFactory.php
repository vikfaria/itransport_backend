<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\VehicleType;

class VehicleTypeFactory extends Factory
{
    protected $model = VehicleType::class;

    public function definition()
    {
        return [
            'type_name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }
}
