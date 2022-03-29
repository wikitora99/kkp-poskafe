<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory as Category;

class ProductCategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Category::create(['name' => 'Coffee']);
    Category::create(['name' => 'Snack']);
    Category::create(['name' => 'Milkshake']);
    Category::create(['name' => 'Signature Sabit']);
    Category::create(['name' => 'Main Course']);
    Category::create(['name' => 'Noodle']);
    Category::create(['name' => 'Flavour Tea']);
    Category::create(['name' => 'Long Drink']);
    Category::create(['name' => 'Extra Syrup']);
  }
}
