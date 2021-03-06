<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();

    $this->call([
      UserRoleSeeder::class,
      UserSeeder::class,
      ProductCategorySeeder::class,
      ProductSeeder::class,
      DiscountSeeder::class,
      // ProductDiscountSeeder::class,
      OrderStatusSeeder::class,
      OrderTypeSeeder::class,
      SupplierSeeder::class,
      IncomingStockSeeder::class,
      IncomingItemSeeder::class,
      OutgoingStockSeeder::class,
      OutgoingItemSeeder::class
    ]);
    
  }
}
