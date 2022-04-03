<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $min_orders = [50000,75000,100000,250000];
    $val_percent = [5,10,15,20,25];
    $val_nominal = [2000,5000,7500,10000];

    $start_date = date_format($this->faker->dateTimeBetween('-6 months', '-1 month'), 'Y-m-d');
    $no_expired = $this->faker->boolean();
    $in_percent = $this->faker->boolean();

    if ($no_expired == true){
      $due_date = null;
    }else{
      $due_date = date_format($this->faker->dateTimeBetween('-1 month', '+1 month'), 'Y-m-d');
    }

    if ($in_percent == true){
      $value = $this->faker->randomElements($val_percent);
    }else{
      $value = $this->faker->randomElements($val_nominal);
    }

    return [
      'start_date' => $start_date,
      'no_expired' => $no_expired,
      'due_date' => $due_date,
      'min_order' => $this->faker->randomElements($min_orders),
      'in_percent' => $in_percent,
      'value' => $value
    ];
  }
}
