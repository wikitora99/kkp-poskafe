<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  { 
    User::create([
      'name' => 'John Doe',
      'role_id' => 1,
      'username' => 'rks-owner',
      'email' => 'owner@rumahkopisabit.com',
      'email_verified_at' => now(),
      'password' => Hash::make('password'), // password
      'phone' => '029739572523',
      'address' => 'Jl. Nusantara Satu No.5, Jakarta Timur',
      'picture' => 'avatar/default.jpg',
      'remember_token' => Str::random(10)
    ]);

    User::create([
      'name' => 'Jane Doe',
      'role_id' => 2,
      'username' => 'rks-admin',
      'email' => 'admin@rumahkopisabit.com',
      'email_verified_at' => now(),
      'password' => Hash::make('password'), // password
      'phone' => '091733295923',
      'address' => 'Jl. Kapten Patimura No.99, Bekasi Kota',
      'picture' => 'avatar/default.jpg',
      'remember_token' => Str::random(10)
    ]);

    User::create([
      'name' => 'Fulan bin Fulan',
      'role_id' => 3,
      'username' => 'rks-cashier',
      'email' => 'cashier@rumahkopisabit.com',
      'email_verified_at' => now(),
      'password' => Hash::make('password'), // password
      'phone' => '090372332423',
      'address' => 'Jl. TB Simatupang No.73, Jakarta Selatan',
      'picture' => 'avatar/default.jpg',
      'remember_token' => Str::random(10)
    ]);

    User::create([
      'name' => 'Fulana binti Fulan',
      'role_id' => 4,
      'username' => 'rks-kitchen',
      'email' => 'kithcen@rumahkopisabit.com',
      'email_verified_at' => now(),
      'password' => Hash::make('password'), // password
      'phone' => '093538252334',
      'address' => 'Jl. Raya Bogor No.21, Depok',
      'picture' => 'avatar/default.jpg',
      'remember_token' => Str::random(10)
    ]);
  }
}



