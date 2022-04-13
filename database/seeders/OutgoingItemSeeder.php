<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OutgoingItem as Item;

class OutgoingItemSeeder extends Seeder
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
