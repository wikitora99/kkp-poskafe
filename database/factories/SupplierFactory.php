<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $is_mail = $this->faker->boolean();
    $contact = $is_mail ? $this->faker->companyEmail() : $this->faker->phoneNumber();

    return [
      'name' => $this->faker->company(),
      'desc' => $this->faker->sentence(mt_rand(8,15)),
      'contact' => $contact,
      'address' => $this->faker->address()
    ];
  }
}
