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
      'Esspresso' => 12000, 'Dobble Shot' => 15000, 'Americano' => 13000, 'Long Black' => 13000, 
      'Kopi Tubruk' => 15000, 'Vietnam Drip' => 16000, 'Coffee Bon Bon' => 18000, 'Kosuren' => 22000, 
      'Cappucino' => 16000, 'Cafe Late' => 16000, 'Cafe Mocha' => 21000, 'Caramel Macchiato' => 23000, 
      'Manual Brew' => 21000, 'Japanese' => 23000, 'French Fries' => 15000, 'Platter 1' => 17000, 
      'Platter 2' => 17000, 'Platter 3' => 20000, 'Cireng' => 14000, 'Chicken Wings' => 20000, 
      'Dimsum' => 16000, 'Roti Bakar' => 10000, 'Vanila Milkshake' => 20000, 'Caramel Milkshake' => 20000, 
      'Hazelnut Milkshake' => 20000, 'Choco Milkshake' => 16000,'Red Velvet Milkshake' => 16000, 
      'Taro Milkshake' => 16000, 'Matcha Milkshake' => 16000, 'Strawberry Milkshake' => 20000, 
      'Manggo Milkshake' => 20000, 'Lychee Milkshake' => 20000, 'Kopi Sabit' => 18000, 
      'Lemoricano' => 20000, 'Blood Coffee' => 23000, 'Yuan Yang' => 25000, 'Mood Booster' => 25000, 
      'Nasi Goreng Sabit' => 20000, 'Rice Bowl' => 20000, 'Indomie Goreng' => 16000, 
      'Indomie Rebus' => 16000
    ];

    $i = 0;
    foreach ($products as $name => $price) {
      $product = new Product;

      if ($i > 8){
        $product->sku = 'RKS0'.strval($i+1);
      }else{
        $product->sku = 'RKS00'.strval($i+1);
      }

      if ($i > 38){
        $product->category_id = 6;
      }else if ($i > 36){
        $product->category_id = 5;
      }else if ($i > 31){
        $product->category_id = 4;
      }else if ($i > 21){
        $product->category_id = 3;
      }else if ($i > 13){
        $product->category_id = 2;
      }else{
        $product->category_id = 1;
      }

      $product->name = $name;
      $product->picture = '1.jpg';
      $product->price = $price;

      $product->save();
      $i++;
    }

  }
}
