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
    Category::insert(['name' => 'Coffee']);
    Category::insert(['name' => 'Snack']);
    Category::insert(['name' => 'Milkshake']);
    Category::insert(['name' => 'Signature Sabit']);
    Category::insert(['name' => 'Main Course']);
    Category::insert(['name' => 'Noodle']);
  }
}