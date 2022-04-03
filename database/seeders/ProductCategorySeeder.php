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
    Category::create([
      'name' => 'Coffee',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Snack',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Milkshake',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Signature Sabit',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Main Course',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Noodle',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Flavour Tea',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Long Drink',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Extra Syrup',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
  }
}
