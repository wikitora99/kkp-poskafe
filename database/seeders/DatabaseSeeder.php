<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    Users::create([
      'username' => 'Mozarela', // username
      'password' => Hash::make('password'), // password
      'role' => '1',
      'name' => 'Mozarela',
      'phone' => '081285',
      'address' => 'Depok',
      'picture' => 'users.png',
    ]);

  }
}
