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
    $no_desc = $this->faker->boolean();
    $no_address = $this->faker->boolean();

    $contact = $is_mail ? $this->faker->companyEmail() : $this->faker->phoneNumber();
    $desc = $no_desc ? null : $this->faker->sentence(mt_rand(8,15));
    $address = $no_address ? null : $this->faker->address();

    return [
      'name' => $this->faker->company(),
      'desc' => $desc,
      'contact' => $contact,
      'address' => $address
    ];
  }
}
