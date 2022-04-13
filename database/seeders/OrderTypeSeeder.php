<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderType as Type;

class OrderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['name' => 'table']);
        Type::create(['name' => 'bungkus']);
        Type::create(['name' => 'reservasi']);
    }
}
