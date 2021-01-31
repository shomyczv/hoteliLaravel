<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert(
            [
                ['type' => 'Dvokrevetna Soba sa Dva Bračna Kreveta','description' => 'This twin/double room has a minibar, tile/marble floor and cable TV.','beds' => 2,'picture' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/140079970.jpg?k=2727faf93fbcae58d9fbce1bc7a4f45615502059f2cfcf0794a7059a63553c2b&o=','price' => 20000,'hotel_id' => 20],
                ['type' => 'King Hotelska Soba','description' => 'This double room features air conditioning, cable TV and electric kettle.','beds' => 2,'picture' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/139917391.jpg?k=7fdf89f52658b3d136c7ce02873759afb7041d98641dd01e8a85c8ff2288e811&o=','price' => 15000,'hotel_id' => 20],
                ['type' => 'Executive Soba sa 2 Bračna Kreveta','description' => 'This double room has a bathrobe, soundproofing and seating area.','beds' => 4,'picture' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/139916440.jpg?k=2a28073c5fa6e111f6137617fb8ecf7a6a0ed07d131edd36ae97ab71d1b03d84&o=','price' => 2000,'hotel_id' => 20],
                ['type' => 'Superior Dvokrevetna Soba sa Zasebnim Krevetima','description' => 'Ova dvokrevetna soba sa zasebnim krevetima opremljena je klima-uređajem.','beds' => 2,'picture' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/250867002.jpg?k=418fa450fad5d69672439aa8e4c8b93165f0709aef1c302efb0a4fadd68034e0&o=','price' => 13000,'hotel_id' => 21],
                ['type' => 'Deluks Dvokrevetna Soba sa Zasebnim Krevetima','description' => 'This twin room has air conditioning.','beds' => 2,'picture' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/250866981.jpg?k=823cdcfc19f1c08ba6b3da36bb4ce6a8d0fce59d156915e5923598298b195c91&o=','price' => 15000,'hotel_id' => 21],
                ['type' => 'Executive Apartman','description' => 'Ovaj suite je klimatizovan.','beds' => 3,'picture' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/180025891.jpg?k=35939797a53e61b00ecf94cec5e969d02fe164ad71c989d423192da562696dab&o=','price' => 20000,'hotel_id' => 21],
                ['type' => 'Dvokrevetna Soba sa Bračnim Krevetom','description' => 'Ova klimatizovana soba nudi TV sa kablovskim kanalima, mini-bar i kupatilo.','beds' => 2,'picture' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/146289391.jpg?k=2076a10136d7983696b37414b0c1c121cd852ae9aade8352c2569fa97b1bccfb&o=','price' => 6000,'hotel_id' => 22],
                ['type' => 'Suite','description' => 'Ovaj klimatizovani apartman tipa "suite" nudi prostor za sedenje, kablovsku televiziju, mini-bar i kupatilo.','beds' => 2,'picture' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/146290671.jpg?k=e4cdeff72ffb5f016797b7f334704f0453c3a61158de996f54a25415f7ac5f00&o=','price' => 7000,'hotel_id' => 22]
            ]
        );
    }
}
