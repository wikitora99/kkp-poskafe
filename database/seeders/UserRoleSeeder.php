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
    UserRole::insert(['name' => 'Owner']);
    UserRole::insert(['name' => 'Admin']);
    UserRole::insert(['name' => 'Cashier']);
    UserRole::insert(['name' => 'Kitchen']);
  }
}