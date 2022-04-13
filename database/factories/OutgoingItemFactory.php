<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OutgoingItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stock_id' => rand(1,25),
            'name' => $this->faker->words(rand(1,3), true),
            'amount' => rand(1,50)
        ];
    }
}
