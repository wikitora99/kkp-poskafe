<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Produk;
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
    // \App\Models\User::factory(10)->create();
    \App\Models\Produk::factory(5)->create();

    User::create([
      'name' => 'John Doe',
      'username' => 'username', // username
      'email' => 'user@johndoe.com',
      'email_verified_at' => now(),
      'password' => Hash::make('password'), // password
      'remember_token' => Str::random(10)
    ]);

  }
}
