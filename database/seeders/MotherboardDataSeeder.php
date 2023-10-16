<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotherboardDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motherboard')->insert([
            'mb_fullname' => 'Gigabyte B550 GAMING X V2',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket AM4',
            'mb_chipset' => 'AMD B550',
            'mb_supported_processors' => 'AMD ZEN 2/3(3th/4th gen)',
            'mb_price' =>  539.00, 
            'mb_image_path' => 'images/mb/mb1.jpg',
        ]);

        DB::table('motherboard')->insert([
            'mb_fullname' => 'Gigabyte B660M DS3H DDR4',
            'mb_format' => 'mATX',
            'mb_socket' => 'Socket 1700',
            'mb_chipset' => 'Intel B660',
            'mb_supported_processors' => 'Alder Lake-S (12th gen), Raptor Lake (13th gen)',
            'mb_price' =>  499.00, 
            'mb_image_path' => 'images/mb/mb2.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'Gigabyte Z690 GAMING X DDR4',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket 1700',
            'mb_chipset' => 'Intel z690',
            'mb_supported_processors' => 'Alder Lake-S (12th gen), Raptor Lake (13th gen)',
            'mb_price' =>  969.00, 
            'mb_image_path' => 'images/mb/mb3.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'ASRock B550m Pro4',
            'mb_format' => 'uATX',
            'mb_socket' => 'Socket AM4',
            'mb_chipset' => 'AMD B550',
            'mb_supported_processors' => 'AMD ZEN 2/3(3th/4th gen)',
            'mb_price' =>  489.00, 
            'mb_image_path' => 'images/mb/mb4.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'ASUS TUG GAMING B550-PLUS',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket AM4',
            'mb_chipset' => 'AMD B550',
            'mb_supported_processors' => 'AMD ZEN 2/3(3th/4th gen)',
            'mb_price' => 635.00, 
            'mb_image_path' => 'images/mb/mb5.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'ASUS PRIME B450-PLUS',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket AM4',
            'mb_chipset' => 'AMD B450',
            'mb_supported_processors' => 'AMD ZEN 1/1+/2/3 (1th gen, 2th gen, 3th gen, 4th gen)',
            'mb_price' =>  369.00, 
            'mb_image_path' => 'images/mb/mb6.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'Gigabyte H410M S2H V2',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket 1200',
            'mb_chipset' => 'Intel H410',
            'mb_supported_processors' => 'Comet Lake (10th gen)',
            'mb_price' =>  299.00, 
            'mb_image_path' => 'images/mb/mb7.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'Gigabyte Z790 AORUS ELITE AX',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket 1700',
            'mb_chipset' => 'Intel Z790',
            'mb_supported_processors' => 'Alder Lake-S (12th gen), Raptor Lake (13th gen)',
            'mb_price' =>  1499.00, 
            'mb_image_path' => 'images/mb/mb8.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'Gigabyte B760M GAMING X DDR4',
            'mb_format' => 'mATX',
            'mb_socket' => 'Socket 1700',
            'mb_chipset' => 'Intel B760',
            'mb_supported_processors' => 'Alder Lake-S (12th gen), Raptor Lake (13th gen)',
            'mb_price' =>  659.00, 
            'mb_image_path' => 'images/mb/mb9.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'Gigabyte Z590 VISION G',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket 1200',
            'mb_chipset' => 'Intel Z590',
            'mb_supported_processors' => 'Comet Lake (10th gen), Rocket Lake(11th gen)',
            'mb_price' =>  849.00, 
            'mb_image_path' => 'images/mb/mb10.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'Gigabyte X670 GAMING X AX',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket AM5',
            'mb_chipset' => 'AMD X670',
            'mb_supported_processors' => 'AMD Zen 4 (5th gen)',
            'mb_price' =>  1449.00, 
            'mb_image_path' => 'images/mb/mb11.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'ASUS ROG STRIX B550-F GAMING',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket AM4',
            'mb_chipset' => 'AMD B550',
            'mb_supported_processors' => 'Zen 2 (3th gen), Zen 3 (4th gen)',
            'mb_price' =>  849.00, 
            'mb_image_path' => 'images/mb/mb12.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'ASUS PRIME B550-PLUS',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket AM4',
            'mb_chipset' => 'AMD B550',
            'mb_supported_processors' => 'Zen 2 (3th gen), Zen 3 (4th gen)',
            'mb_price' =>  529.00, 
            'mb_image_path' => 'images/mb/mb13.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'ASUS TUF GAMING B760-PLUS WIFI',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket 1700',
            'mb_chipset' => 'Intel B760',
            'mb_supported_processors' => 'Alder Lake-S (12th gen), Raptor Lake (13th gen)',
            'mb_price' =>  899.00, 
            'mb_image_path' => 'images/mb/mb14.jpg',
        ]);
        
        DB::table('motherboard')->insert([
            'mb_fullname' => 'ASRock B650 PRO RS',
            'mb_format' => 'ATX',
            'mb_socket' => 'Socket AM5',
            'mb_chipset' => 'AMD B650',
            'mb_supported_processors' => 'AMD Zen 4 (5th gen)',
            'mb_price' =>  1079.00, 
            'mb_image_path' => 'images/mb/mb15.jpg',
        ]);
        
    }
}
