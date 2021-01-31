<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert(
            [
                ['name' => 'pera','surname' => 'peric','address' => 'adresa','phone' => '1651368546','arrive_date' => '2021-01-22"','end_date' => '2021-01-26"', 'room_id'=>36],
                ['name' => 'pera','surname' => 'peric','address' => 'adresa','phone' => '1651368546','arrive_date' => '2021-01-22"','end_date' => '2021-01-26"', 'room_id'=>37],
                ['name' => 'pera','surname' => 'peric','address' => 'adresa','phone' => '1651368546','arrive_date' => '2021-01-22"','end_date' => '2021-01-26"', 'room_id'=>38]
            ]
        );
    }
}
