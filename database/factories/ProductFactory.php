<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sku' => $this->faker->bothify('SKU-?#?#?#'),
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, 9, 100),
            'weight' => $this->faker->randomNumber(4, true),
            'portion' => $this->faker->randomNumber(1, true),
        ];
    }
}
