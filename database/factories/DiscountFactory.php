<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

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
    $val_nominal = [5000,10000,15000,20000];
    $to = [7,14,30,60];
    $from = rand(10,100);

    $start_date = Carbon::today()->subDays($from);
    $no_expired = $this->faker->boolean();
    $in_percent = $this->faker->boolean();

    $due_date = $no_expired ? null : Carbon::today()->subDays($from)->addDays($to[rand(0,3)])->toDateString();
    $value = $in_percent ? $val_percent[rand(0,4)] : $val_nominal[rand(0,3)];

    return [
      'start_date' => $start_date->toDateString(),
      'product_id' => $this->faker->unique()->numberBetween(1,72),
      'no_expired' => $no_expired,
      'due_date' => $due_date,
      'min_order' => $min_orders[rand(0,3)],
      'in_percent' => $in_percent,
      'value' => $value
    ];
  }
}
