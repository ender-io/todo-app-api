<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'status_id' => 1,
            'category_id' => 1,
            'user_id' => 1,
            'is_starred' => $this->faker->boolean(),
            'icon' => $this->faker->word(),
            'color' => $this->faker->safeColorName(),
            'expires_at' => $this->faker->dateTime(),
        ];
    }
}
