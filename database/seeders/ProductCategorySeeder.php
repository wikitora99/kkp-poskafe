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
      'slug' => 'coffee',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Snack',
      'slug' => 'snack',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Milkshake',
      'slug' => 'milkshake',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Signature Sabit',
      'slug' => 'signature-sabit',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Main Course',
      'slug' => 'main-course',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Noodle',
      'slug' => 'noodle',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Flavour Tea',
      'slug' => 'falvour-tea',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Long Drink',
      'slug' => 'long-drink',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
    Category::create([
      'name' => 'Extra Syrup',
      'slug' => 'extra-syrup',
      'desc' => 'Lorem ipsum dolor sit amet.'
    ]);
  }
}
