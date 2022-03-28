<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductVariant as Variant;

class ProductVariantSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    
    $product = [3,4,6,9,10,11,12,13,14,22,26,27,28,29,33,39,40,41];

    for ($i = 0; $i < count($product); $i++){
      if ($product[$i] > 39){
        $variant = new Variant;
        $variant->type = 'Rasa';
        $variant->name = 'Sambal Matah';
        $variant->price = 2000;
        $variant->product_id = ($product[$i] == 40) ? 40 : 41;
        $variant->save();
      }else if ($product[$i] == 39){
        $variant = new Variant;
        $variant->type = 'Tipe';
        $variant->name = 'Katsu';
        $variant->price = 5000;
        $variant->product_id = 39;
        $variant->save();

        $variant = new Variant;
        $variant->type = 'Tipe';
        $variant->name = 'Karage';
        $variant->price = 5000;
        $variant->product_id = 39;
        $variant->save();
      }else if ($product[$i] == 22){
        $variant = new Variant;
        $variant->type = 'Topping';
        $variant->name = 'Coklat Susu';
        $variant->price = 5000;
        $variant->product_id = 22;
        $variant->save();

        $variant = new Variant;
        $variant->type = 'Topping';
        $variant->name = 'Coklat Susu Keju';
        $variant->price = 8000;
        $variant->product_id = 22;
        $variant->save();

        $variant = new Variant;
        $variant->type = 'Topping';
        $variant->name = 'Green Tea Susus';
        $variant->price = 5000;
        $variant->product_id = 22;
        $variant->save();

        $variant = new Variant;
        $variant->type = 'Topping';
        $variant->name = 'Bluberry';
        $variant->price = 5000;
        $variant->product_id = 22;
        $variant->save();

        $variant = new Variant;
        $variant->type = 'Topping';
        $variant->name = 'Strawberry';
        $variant->price = 5000;
        $variant->product_id = 22;
        $variant->save();

        $variant = new Variant;
        $variant->type = 'Topping';
        $variant->name = 'Tiramisu';
        $variant->price = 5000;
        $variant->product_id = 22;
        $variant->save();
      }else if ($product[$i] == 13 || $product[$i] == 14){
        $variant = new Variant;
        $variant->type = 'Tipe';
        $variant->name = 'Lokal';
        $variant->price = 2000;
        $variant->product_id = ($product[$i] == 13) ? 13 : 14;
        $variant->save();

        $variant = new Variant;
        $variant->type = 'Tipe';
        $variant->name = 'Internasional';
        $variant->price = 6000;
        $variant->product_id = ($product[$i] == 13) ? 13 : 14;
        $variant->save();
      }else{
        $variant = new Variant;
        $variant->type = 'Temperatur';
        $variant->name = 'Hot';
        $variant->price = 2000;
        $variant->product_id = $product[$i];
        $variant->save();

        $variant = new Variant;
        $variant->type = 'Temperatur';
        $variant->name = 'Ice';
        $variant->price = 4000;
        $variant->product_id = $product[$i];
        $variant->save();
      }
    }
  }
}
