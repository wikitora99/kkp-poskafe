<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OutgoingStock as Stock;

class OutgoingStockSeeder extends Seeder
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
