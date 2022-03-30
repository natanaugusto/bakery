<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
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
