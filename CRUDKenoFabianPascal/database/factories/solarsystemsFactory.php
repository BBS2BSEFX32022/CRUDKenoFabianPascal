<?php

namespace Database\Factories;

use App\Models\solarsystems;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\solarsystems>
 */
class solarsystemsFactory extends Factory
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
            'size' => fake()->randomFloat(1, 69, 420),
            'unitCode' => \App\Models\unitcodes::pluck('unitCode')->random(),
        ];
    }
}
