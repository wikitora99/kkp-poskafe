<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderStatus as Status;

class OrderStatusSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Status::create(['name' => 'Completed']);
    Status::create(['name' => 'Pending']);
    Status::create(['name' => 'Canceled']);
  }
}
