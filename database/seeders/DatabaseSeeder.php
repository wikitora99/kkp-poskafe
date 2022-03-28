<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserRole;
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

    UserRole::create(['name' => 'Owner']);
    UserRole::create(['name' => 'Admin']);
    UserRole::create(['name' => 'Cashier']);
    UserRole::create(['name' => 'Kitchen']);

    User::create([
      'name' => 'John Doe',
      'role_id' => 1,
      'username' => 'username', // username
      'email' => 'user@johndoe.com',
      'email_verified_at' => now(),
      'password' => Hash::make('password'), // password
      'phone' => '0122323424',
      'address' => 'Jl. Nusantara Satu',
      'picture' => 'profile.jpg',
      'remember_token' => Str::random(10)
    ]);
  }
}
