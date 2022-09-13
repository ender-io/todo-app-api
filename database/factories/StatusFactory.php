<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'ACTIVE',
            'description' => $this->faker->sentence(),
            'status_code' => '001',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
