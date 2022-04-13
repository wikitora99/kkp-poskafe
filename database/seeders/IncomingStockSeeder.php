<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IncomingStock as Stock;

class IncomingStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::factory()->times(25)->create();
    }
}
