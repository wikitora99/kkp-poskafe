<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IncomingItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $has_price = $this->faker->boolean();
        $amount = rand(1,20);

        if ($has_price){
            $price = rand(1000, 25000);
            $total_price = $price * $amount;
        }else{
            $price = 0;
            $total_price = 0;
        }

        return [
            'stock_id' => rand(1,25),
            'name' => $this->faker->words(rand(1,3), true),
            'price' => $price,
            'amount' => $amount,
            'total_price' => $total_price
        ];
    }
}
