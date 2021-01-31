<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert(
            [
                ['name' => 'Hilton','description' => 'Hotel Hilton Belgrade ima krovni bar i restoran sa pogledom na grad.','stars' => 5 ,'city' => 'Beograd','address' => 'Kralja Milana 35','url' => 'https://cf.bstatic.com/images/hotel/max1024x768/139/139913559.jpg'],
                ['name' => 'Metrolop Palace','description' => 'Hotel Metropol Palace, a Luxury Collection Hotel nalazi se na samo 400 metara od centra Beograda.','stars' => 5,'city' => 'Beograd','address' => 'Bulevar kralja Aleksandra 69','url' => 'https://cf.bstatic.com/images/hotel/max1024x768/251/251002386.jpg'],
                ['name' => 'Majestic','description' => 'Hotel Majestic uređen je u tradicionalnom stilu i smešten u samom srcu Beograda. U ponudi ima elegantne sobe sa modernim pogodnostima, besplatan WiFi, restoran i garažu u okviru objekta. Čuvena trgovačka Knez Mihailova ulica udaljena je samo 200 metara.','stars' => 4,'city' => 'Beograd','address' => 'Obilićev venac 28','url' => 'https://cf.bstatic.com/images/hotel/max1024x768/146/146293205.jpg']
            ]
        );
    }
}
