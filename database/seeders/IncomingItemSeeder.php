<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IncomingItem as Item;

class IncomingItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::factory()->times(100)->create();
    }
}
