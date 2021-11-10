<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::all()->random(),
            'customer' => $this->faker->name(),
            'content' => $this->faker->paragraph(),
            'star' => $this->faker->numberBetween(0,5),
        ];
    }
}
