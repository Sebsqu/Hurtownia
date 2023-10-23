<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RamDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ram')->insert([
            'ram_fullname' => 'G.SKILL TridentZ Royal Gold',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '16GB(2x8GB)',
            'ram_capacity' => '8GB',
            'ram_frequency' => '4600MHz',
            'ram_cycle_latency' => 'CL 18',
            'ram_price' =>  1759.00, 
            'ram_image_path' => 'images/ram/ram1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'Patriot Viper Blackout',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '64GB(2x32GB)',
            'ram_capacity' => '32GB',
            'ram_frequency' => '3600MHz',
            'ram_cycle_latency' => 'CL 18',
            'ram_price' =>  1189.00, 
            'ram_image_path' => 'images/ram/ram2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'Kingston Fury Renegade Black',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '64GB(2x32GB)',
            'ram_capacity' => '32GB',
            'ram_frequency' => '3600MHz',
            'ram_cycle_latency' => 'CL 18',
            'ram_price' =>  1089.00, 
            'ram_image_path' => 'images/ram/ram3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'Corsair Vengeance LPX',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '64GB(2x32GB)',
            'ram_capacity' => '32GB',
            'ram_frequency' => '3200MHz',
            'ram_cycle_latency' => 'CL 16',
            'ram_price' =>  999.00, 
            'ram_image_path' => 'images/ram/ram4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'G.SKILL Trident Z RGB',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '16GB(2x8GB)',
            'ram_capacity' => '8GB',
            'ram_frequency' => '4000MHz',
            'ram_cycle_latency' => 'CL 18',
            'ram_price' =>  679.00, 
            'ram_image_path' => 'images/ram/ram5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'Kingston FURY Beast TGB',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '16GB(2x8GB)',
            'ram_capacity' => '8GB',
            'ram_frequency' => '3733MHz',
            'ram_cycle_latency' => 'CL 19',
            'ram_price' =>  649.00, 
            'ram_image_path' => 'images/ram/ram6.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'G.SKILL Trident Z RGB',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '16GB(2x8GB)',
            'ram_capacity' => '8GB',
            'ram_frequency' => '3200MHz',
            'ram_cycle_latency' => 'CL 16',
            'ram_price' =>  619.00, 
            'ram_image_path' => 'images/ram/ram7.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'Corsair Vengeance RGB PRO SL W',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '32GB(2x16GB)',
            'ram_capacity' => '16GB',
            'ram_frequency' => '3600MHz',
            'ram_cycle_latency' => 'CL 18',
            'ram_price' =>  599.00, 
            'ram_image_path' => 'images/ram/ram8.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'Kingston FURY Beast White RGB',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '32GB(2x16GB)',
            'ram_capacity' => '16GB',
            'ram_frequency' => '3200MHz',
            'ram_cycle_latency' => 'CL 16',
            'ram_price' =>  579.00, 
            'ram_image_path' => 'images/ram/ram9.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'G.SKILL TridentZ Royal Gold',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '16GB(2x8GB)',
            'ram_capacity' => '8GB',
            'ram_frequency' => '3200MHz',
            'ram_cycle_latency' => 'CL 16',
            'ram_price' =>  559.00, 
            'ram_image_path' => 'images/ram/ram10.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'Kingston FURY Renegade RGB',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '32GB(1x32GB)',
            'ram_capacity' => '32GB',
            'ram_frequency' => '3600MHz',
            'ram_cycle_latency' => 'CL 18',
            'ram_price' =>  529.00, 
            'ram_image_path' => 'images/ram/ram11.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'Kingston FURY Renegade RGB',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '32GB(2x16GB)',
            'ram_capacity' => '16GB',
            'ram_frequency' => '3600MHz',
            'ram_cycle_latency' => 'CL 16',
            'ram_price' =>  529.00, 
            'ram_image_path' => 'images/ram/ram12.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'G.SKILL TridentZ RGB',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '16GB(2x8GB)',
            'ram_capacity' => '8GB',
            'ram_frequency' => '3600MHz',
            'ram_cycle_latency' => 'CL 18',
            'ram_price' =>  429.00, 
            'ram_image_path' => 'images/ram/ram13.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'Patriot Viper 4',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '16GB(2x8GB)',
            'ram_capacity' => '8GB',
            'ram_frequency' => '3200MHz',
            'ram_cycle_latency' => 'CL 16',
            'ram_price' =>  395.00, 
            'ram_image_path' => 'images/ram/ram14.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('ram')->insert([
            'ram_fullname' => 'Corsair',
            'ram_type_of_memory' => 'DDR4',
            'ram_total_capacity' => '16GB(2x8GB)',
            'ram_capacity' => '8GB',
            'ram_frequency' => '3200MHz',
            'ram_cycle_latency' => 'CL 16',
            'ram_price' => 299.00, 
            'ram_image_path' => 'images/ram/ram15.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
