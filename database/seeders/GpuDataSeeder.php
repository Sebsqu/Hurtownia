<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GpuDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gpu')->insert([
            'gpu_fullname' => 'Gigabyte Geforce RTX 4090 Aorus Master',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '24GB DDR6X',
            'gpu_memory_bus' => '384 bit',
            'gpu_timing' => '21000 MHz',
            'gpu_charger' => '1000W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 2x',
            'gpu_price' =>  10299.00, 
            'gpu_image_path' => 'images/gpu/gpu1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Gigabyte Geforce RTX 4090 Gaming OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '24GB DDR6X',
            'gpu_memory_bus' => '384 bit',
            'gpu_timing' => '21000 MHz',
            'gpu_charger' => '1000W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 2x',
            'gpu_price' =>  9449.00, 
            'gpu_image_path' => 'images/gpu/gpu2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Asus Geforce RTX 4080 Gaming OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '16GB DDR6X',
            'gpu_memory_bus' => '256 bit',
            'gpu_timing' => '22400 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 2x, DisplayPort - 2x',
            'gpu_price' =>  7399.00, 
            'gpu_image_path' => 'images/gpu/gpu3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Zotac Geforce RTX 4080 Gaming AMP Extreme',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '16GB DDR6X',
            'gpu_memory_bus' => '256 bit',
            'gpu_timing' => '22400 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  6959.00, 
            'gpu_image_path' => 'images/gpu/gpu4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Palit Geforce RTX 4080 Gaming Pro',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '16GB DDR6X',
            'gpu_memory_bus' => '256 bit',
            'gpu_timing' => '22400 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  6699.00, 
            'gpu_image_path' => 'images/gpu/gpu5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Zotac Geforce RTX 4070Ti Gaming AMP Extreme',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '12GB DDR6X',
            'gpu_memory_bus' => '192 bit',
            'gpu_timing' => '21000 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  5299.00, 
            'gpu_image_path' => 'images/gpu/gpu6.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Gigabyte Geforce RTX 4070Ti Aero OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '12GB DDR6X',
            'gpu_memory_bus' => '192 bit',
            'gpu_timing' => '21000 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  4899.00, 
            'gpu_image_path' => 'images/gpu/gpu7.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Gigabyte Geforce RTX 3080 Aorus Master LHR',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '10GB DDR6X',
            'gpu_memory_bus' => '320 bit',
            'gpu_timing' => '19000 MHz',
            'gpu_charger' => '850W',
            'gpu_outputs' => 'HDMI - 3x, DisplayPort - 3x',
            'gpu_price' =>  4249.00, 
            'gpu_image_path' => 'images/gpu/gpu8.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Asus Geforce RTX 3080 Gaming OC V2 LHR',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '10GB DDR6X',
            'gpu_memory_bus' => '320 bit',
            'gpu_timing' => '19000 MHz',
            'gpu_charger' => '850W',
            'gpu_outputs' => 'HDMI - 2x, DisplayPort - 3x',
            'gpu_price' =>  3899.00, 
            'gpu_image_path' => 'images/gpu/gpu9.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Gigabyte Geforce RTX 3070Ti Aorus Master LHR',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '8GB DDR6X',
            'gpu_memory_bus' => '256 bit',
            'gpu_timing' => '19000 MHz',
            'gpu_charger' => '850W',
            'gpu_outputs' => 'HDMI - 3x, DisplayPort - 3x',
            'gpu_price' =>  3799.00, 
            'gpu_image_path' => 'images/gpu/gpu10.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'MSI Geforce RTX 3070Ti Ventus 3X OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '8GB DDR6X',
            'gpu_memory_bus' => '256 bit',
            'gpu_timing' => '19000 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  3479.00, 
            'gpu_image_path' => 'images/gpu/gpu11.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Asus Geforce RTX 3070 Gaming OC V2 LHR',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '8GB DDR6',
            'gpu_memory_bus' => '256 bit',
            'gpu_timing' => '14000 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 2x, DisplayPort - 3x',
            'gpu_price' =>  3349.00, 
            'gpu_image_path' => 'images/gpu/gpu12.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Zotac Geforce RTX 3070 Gaming OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '8GB DDR6',
            'gpu_memory_bus' => '256 bit',
            'gpu_timing' => '14000 MHz',
            'gpu_charger' => '650W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  2949.00, 
            'gpu_image_path' => 'images/gpu/gpu13.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'MSI Geforce RTX 3060 Gaming Z TRIO LHR',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '12GB DDR6',
            'gpu_memory_bus' => '192 bit',
            'gpu_timing' => '16000 MHz',
            'gpu_charger' => '550W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  2249.00, 
            'gpu_image_path' => 'images/gpu/gpu14.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Gigabyte Geforce RTX 3060 Gaming OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '12GB DDR6',
            'gpu_memory_bus' => '192 bit',
            'gpu_timing' => '16000 MHz',
            'gpu_charger' => '550W',
            'gpu_outputs' => 'HDMI - 2x, DisplayPort - 2x',
            'gpu_price' =>  1929.00, 
            'gpu_image_path' => 'images/gpu/gpu15.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Zotac Geforce RTX 3060 Twin Edge OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '12GB DDR6',
            'gpu_memory_bus' => '192 bit',
            'gpu_timing' => '16000 MHz',
            'gpu_charger' => '650W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  1829.00, 
            'gpu_image_path' => 'images/gpu/gpu16.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'MSI Geforce RTX 3050 Gaming X',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '8GB DDR6',
            'gpu_memory_bus' => '128 bit',
            'gpu_timing' => '14000 MHz',
            'gpu_charger' => '550W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  1929.00, 
            'gpu_image_path' => 'images/gpu/gpu17.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Zotac Geforce RTX 3050 AMP',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '8GB DDR6',
            'gpu_memory_bus' => '128 bit',
            'gpu_timing' => '14000 MHz',
            'gpu_charger' => '550W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  1719.00, 
            'gpu_image_path' => 'images/gpu/gpu18.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Asus Geforce RTX 3050 TUF Gaming',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '8GB DDR6',
            'gpu_memory_bus' => '128 bit',
            'gpu_timing' => '14000 MHz',
            'gpu_charger' => '550W',
            'gpu_outputs' => 'HDMI - 2x, DisplayPort - 3x',
            'gpu_price' =>  1699.00, 
            'gpu_image_path' => 'images/gpu/gpu19.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'XFX Radeon RX 7900 XTX Black Gaming',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '24GB DDR6',
            'gpu_memory_bus' => '384 bit',
            'gpu_timing' => '20000 MHz',
            'gpu_charger' => '850W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  6799.00, 
            'gpu_image_path' => 'images/gpu/gpu20.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Sapphire Radeon RX 7900 XTX Nitro+ Gaming OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '24GB DDR6',
            'gpu_memory_bus' => '384 bit',
            'gpu_timing' => '20000 MHz',
            'gpu_charger' => '850W',
            'gpu_outputs' => 'HDMI - 2x, DisplayPort - 2x',
            'gpu_price' =>  6399.00, 
            'gpu_image_path' => 'images/gpu/gpu21.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'XFX Radeon RX 7900 XT Black Gaming',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '20GB DDR6',
            'gpu_memory_bus' => '320 bit',
            'gpu_timing' => '20000 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  5549.00, 
            'gpu_image_path' => 'images/gpu/gpu22.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'PowerColor Radeon RX 7900 XT Red Devil',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '20GB DDR6',
            'gpu_memory_bus' => '320 bit',
            'gpu_timing' => '20000 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  5649.00, 
            'gpu_image_path' => 'images/gpu/gpu23.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Gigabyte Radeon RX 7900 Gaming OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '20GB DDR6',
            'gpu_memory_bus' => '320 bit',
            'gpu_timing' => '20000 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 2x, DisplayPort - 2x',
            'gpu_price' =>  5149.00, 
            'gpu_image_path' => 'images/gpu/gpu24.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Sapphire Radeon RX 6900 XT Pulse Gaming OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '16GB DDR6',
            'gpu_memory_bus' => '256 bit',
            'gpu_timing' => '16000 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  3599.00, 
            'gpu_image_path' => 'images/gpu/gpu25.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Sapphire Radeon RX 6900 Gaming OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '16GB DDR6',
            'gpu_memory_bus' => '256 bit',
            'gpu_timing' => '16000 MHz',
            'gpu_charger' => '750W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  3199.00, 
            'gpu_image_path' => 'images/gpu/gpu26.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Asus Radeon RX 6600 XT ROG Strix OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '8GB DDR6',
            'gpu_memory_bus' => '128 bit',
            'gpu_timing' => '16000 MHz',
            'gpu_charger' => '500W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  2099.00, 
            'gpu_image_path' => 'images/gpu/gpu27.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'AsRock Radeon RX 6600 XT Challenger',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '8GB DDR6',
            'gpu_memory_bus' => '128 bit',
            'gpu_timing' => '16000 MHz',
            'gpu_charger' => '500W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 3x',
            'gpu_price' =>  1949.00, 
            'gpu_image_path' => 'images/gpu/gpu28.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'MSI Radeon RX 6500 XT MECH 2X OC',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '4GB DDR6',
            'gpu_memory_bus' => '64 bit',
            'gpu_timing' => '18000 MHz',
            'gpu_charger' => '400W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 1x',
            'gpu_price' =>  969.00, 
            'gpu_image_path' => 'images/gpu/gpu29.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('gpu')->insert([
            'gpu_fullname' => 'Sapphire Radeon RX 6500 XT Pulse',
            'gpu_connector' => 'PCIe 4.0 x16',
            'gpu_memory' => '4GB DDR6',
            'gpu_memory_bus' => '64 bit',
            'gpu_timing' => '18000 MHz',
            'gpu_charger' => '400W',
            'gpu_outputs' => 'HDMI - 1x, DisplayPort - 1x',
            'gpu_price' =>  799.00, 
            'gpu_image_path' => 'images/gpu/gpu30.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
