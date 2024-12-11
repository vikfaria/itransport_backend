<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\VehicleCompany;

class VehicleCompanyFactory extends Factory
{
    protected $model = VehicleCompany::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }
}
