<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    UserRole::create(['name' => 'Owner']);
    UserRole::create(['name' => 'Admin']);
    UserRole::create(['name' => 'Cashier']);
    UserRole::create(['name' => 'Kitchen']);
  }
}
