<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'amount' => $this->faker->numberBetween(10, 1000),
            'price' => $this->faker->numberBetween(1000, 10000),
            'is_over' => $this->faker->boolean()
        ];
    }
}