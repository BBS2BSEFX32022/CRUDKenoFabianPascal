<?php

namespace Database\Factories;

use App\Models\planets;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\planets>
 */
class planetsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'size' => fake()->randomFloat(1, 10, 52),
            'unitCode' => \App\Models\unitcodes::pluck('unitCode')->random(),
            'solarSystem' => \App\Models\solarsystems::pluck('name')->random(),
        ];
    }
}
