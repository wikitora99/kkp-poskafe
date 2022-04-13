<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class OutgoingStockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = Carbon::today()->subDays(rand(1,300));

        $prefix = 'OG';
        $df = $date->format('ymd');
        $ranint = rand(1,9999);

        if ($ranint < 9999){
            $unicode = '0'.$ranint;
        }else if ($ranint < 999){
            $unicode = '00'.$ranint;
        }else{
            $unicode = '000'.$ranint;
        }

        return [
            'code' => $prefix."".$df."".$unicode,
            'note' => $this->faker->sentence(rand(5,10)),
            'date' => $date->toDateString()
        ];
    }
}
