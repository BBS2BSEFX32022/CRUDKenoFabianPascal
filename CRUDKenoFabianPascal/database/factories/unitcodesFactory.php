<?php

namespace Database\Factories;

use App\Models\unitcodes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\unitcodes>
 */
class unitcodesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'unitCode' => 'tk',
            'name' => 'Thousands of kilometers',
        ];
    }
}
