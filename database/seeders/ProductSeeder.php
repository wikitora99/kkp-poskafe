<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $products = [
      'Esspresso' => 12000, 'Dobble Shot' => 15000, 'Americano Hot' => 15000, 'Americano Ice' => 17000, 
      'Long Black Hot' => 15000, 'Long Black Ice' => 17000, 'Kopi Tubruk' => 15000, 
      'Vietnam Drip Hot' => 18000, 'Vietnam Drip Ice' => 20000, 'Coffee Bon Bon' => 18000, 
      'Kosuren' => 22000, 'Cappucino Hot' => 18000, 'Cappucino Ice' => 20000, 'Cafe Late Hot' => 18000, 
      'Cafe Late Ice' => 20000, 'Cafe Mocha Hot' => 23000, 'Cafe Mocha Ice' => 25000, 
      'Caramel Macchiato Hot' => 25000, 'Caramel Macchiato Ice' => 27000, 'Manual Brew Lokal' => 23000, 
      'Manual Brew Internasional' => 27000, 'Japanese Lokal' => 25000, 'Japanese Internasional' => 27000, 
      'French Fries' => 15000, 'Platter 1' => 17000, 'Platter 2' => 17000, 'Platter 3' => 20000, 
      'Cireng' => 14000, 'Chicken Wings' => 20000, 'Dimsum' => 16000, 'Roti Bakar Coklat Susu' => 15000, 
      'Roti Bakar Coklat Susu Keju' => 18000, 'Roti Bakar Green Tea Susu' => 15000, 
      'Roti Bakar Bluberry' => 15000, 'Roti Bakar Strawberry' => 15000, 'Roti Bakar Tiramisu' => 15000, 
      'Vanila Milkshake' => 20000, 'Caramel Milkshake' => 20000, 'Hazelnut Milkshake' => 20000, 
      'Choco Milkshake Hot' => 18000, 'Choco Milkshake Ice' => 20000, 'Red Velvet Milkshake Hot' => 18000, 
      'Red Velvet Milkshake Ice' => 20000, 'Taro Milkshake Hot' => 18000, 'Taro Milkshake Ice' => 20000, 
      'Matcha Milkshake Hot' => 18000, 'Matcha Milkshake Ice' => 20000, 'Strawberry Milkshake' => 20000, 
      'Manggo Milkshake' => 20000, 'Lychee Milkshake' => 20000, 'Kopi Sabit Hot' => 20000, 
      'Kopi Sabit Ice' => 22000, 'Lemoricano' => 20000, 'Blood Coffee' => 23000, 'Yuan Yang' => 25000, 
      'Mood Booster' => 25000, 'Nasi Goreng Sabit' => 20000, 'Rice Bowl Katsu' => 25000, 
      'Rice Bowl Karage' => 25000, 'Indomie Goreng' => 16000, 'Indomie Goreng Sambal Matah' => 18000, 
      'Indomie Rebus' => 16000, 'Indomie Rebus Sambal Matah' => 18000, 'Flavour Tea' => 18000,
      'Manggo Tea' => 18000, 'Lemon Tea' => 18000, 'Lychee Tea' => 18000, 'Black Tea' => 14000,
      'Virgin Mijito' => 25000, 'Virgin Mijito Lychee' => 28000, 'Virgin Mijito Strawberry' => 28000,
      'Additional Shot' => 3000, 'Vanila' => 3000, 'Hazelnut' => 3000, 'Caramel' => 3000
    ];

    // total 75 products [74 index]
    // 9 kategori

    $i = 0;
    foreach ($products as $name => $price) {
      $product = new Product;

      if ($i > 8){
        $product->sku = 'RKS0'.strval($i+1);
      }else{
        $product->sku = 'RKS00'.strval($i+1);
      }

      if ($i > 70){
        $product->category_id = 9;
      }else if ($i > 67){
        $product->category_id = 8;
      }else if ($i > 62){
        $product->category_id = 7;
      }else if ($i > 58){
        $product->category_id = 6;
      }else if ($i > 55){
        $product->category_id = 5;
      }else if ($i > 49){
        $product->category_id = 4;
      }else if ($i > 35){
        $product->category_id = 3;
      }else if ($i > 22){
        $product->category_id = 2;
      }else{
        $product->category_id = 1;
      }

      $product->name = $name;
      $product->picture = '1.jpg';
      $product->price = $price;
      $product->has_stock = false;
      $product->cur_stock = 0;
      $product->min_stock = 0;

      $product->save();
      $i++;
    }

  }
}
