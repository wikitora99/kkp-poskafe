<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductDiscount;

class ProductDiscountSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    ProductDiscount::factory()->times(50)->create(); 
  }
}
