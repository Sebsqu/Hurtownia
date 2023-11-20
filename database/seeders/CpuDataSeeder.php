<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CpuDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i9-13900K',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.0 GHz (5.8 GHz w trybie turbo)',
            'cpu_cache' => '36MB cache',
            'cpu_cores' => '24 rdzeni',
            'cpu_graphics' => 'Intel UHD Graphics 770',
            'cpu_price' =>  3099.00, 
            'cpu_image_path' => 'cpu1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i9-13900KF',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.0 GHz (5.8 GHz w trybie turbo)',
            'cpu_cache' => '36MB cache',
            'cpu_cores' => '24 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  2999.00, 
            'cpu_image_path' => 'cpu2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i9-12900K',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.2 GHz (5.2 GHz w trybie turbo)',
            'cpu_cache' => '30MB cache',
            'cpu_cores' => '16 rdzeni',
            'cpu_graphics' => 'Intel UHD Graphics 770',
            'cpu_price' =>  2299.00, 
            'cpu_image_path' => 'cpu3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i9-12900KF',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.2 GHz (5.2 GHz w trybie turbo)',
            'cpu_cache' => '30MB cache',
            'cpu_cores' => '16 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  2199.00, 
            'cpu_image_path' => 'cpu4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i9-11900K',
            'cpu_socket' => 'Socket 1200',
            'cpu_timing' => '3.5 GHz (5.3 GHz w trybie turbo)',
            'cpu_cache' => '16MB cache',
            'cpu_cores' => '8 rdzeni',
            'cpu_graphics' => 'Intel UHD Graphics 750',
            'cpu_price' =>  1899.00, 
            'cpu_image_path' => 'cpu5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i9-11900KF',
            'cpu_socket' => 'Socket 1200',
            'cpu_timing' => '3.5 GHz (5.3 GHz w trybie turbo)',
            'cpu_cache' => '16MB cache',
            'cpu_cores' => '8 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  1799.00, 
            'cpu_image_path' => 'images/gpu/gpu6.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i7-13700K',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.4 GHz (5.4 GHz w trybie turbo)',
            'cpu_cache' => '30MB cache',
            'cpu_cores' => '16 rdzeni',
            'cpu_graphics' => 'Intel UHD Graphics 770',
            'cpu_price' =>  2249.00, 
            'cpu_image_path' => 'cpu7.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i7-13700KF',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.4 GHz (5.4 GHz w trybie turbo)',
            'cpu_cache' => '30MB cache',
            'cpu_cores' => '16 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  2129.00, 
            'cpu_image_path' => 'cpu8.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i7-12700K',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.6 GHz (5.0 GHz w trybie turbo)',
            'cpu_cache' => '25MB cache',
            'cpu_cores' => '12 rdzeni',
            'cpu_graphics' => 'Intel UHD Graphics 770',
            'cpu_price' =>  1899.00, 
            'cpu_image_path' => 'cpu9.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i7-12700KF',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.6 GHz (5.0 GHz w trybie turbo)',
            'cpu_cache' => '25MB cache',
            'cpu_cores' => '12 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  1799.00, 
            'cpu_image_path' => 'cpu10.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i7-11700K',
            'cpu_socket' => 'Socket 1200',
            'cpu_timing' => '3.8 GHz (5.1 GHz w trybie turbo)',
            'cpu_cache' => '16MB cache',
            'cpu_cores' => '8 rdzeni',
            'cpu_graphics' => 'Intel UHD Graphics 750',
            'cpu_price' =>  1549.00, 
            'cpu_image_path' => 'cpu11.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i7-11700KF',
            'cpu_socket' => 'Socket 1200',
            'cpu_timing' => '3.8 GHz (5.1 GHz w trybie turbo)',
            'cpu_cache' => '16MB cache',
            'cpu_cores' => '8 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  1539.00, 
            'cpu_image_path' => 'cpu12.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i5-13600K',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.5 GHz (5.1 GHz w trybie turbo)',
            'cpu_cache' => '24MB cache',
            'cpu_cores' => '14 rdzeni',
            'cpu_graphics' => 'Intel UHD Graphics 770',
            'cpu_price' =>  1679.00, 
            'cpu_image_path' => 'cpu13.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i5-13600KF',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.5 GHz (5.1 GHz w trybie turbo)',
            'cpu_cache' => '24MB cache',
            'cpu_cores' => '14 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  1559.00, 
            'cpu_image_path' => 'cpu14.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i5-12600K',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.7 GHz (4.9 GHz w trybie turbo)',
            'cpu_cache' => '20MB cache',
            'cpu_cores' => '10 rdzeni',
            'cpu_graphics' => 'Intel UHD Graphics 770',
            'cpu_price' =>  1299.00, 
            'cpu_image_path' => 'cpu15.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i5-12600KF',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.7 GHz (4.9 GHz w trybie turbo)',
            'cpu_cache' => '20MB cache',
            'cpu_cores' => '10 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  1199.00, 
            'cpu_image_path' => 'cpu16.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i5-11600K',
            'cpu_socket' => 'Socket 1200',
            'cpu_timing' => '3.9 GHz (4.9 GHz w trybie turbo)',
            'cpu_cache' => '12MB cache',
            'cpu_cores' => '6 rdzeni',
            'cpu_graphics' => 'Intel UHD Graphics 750',
            'cpu_price' =>  1149.00, 
            'cpu_image_path' => 'cpu17.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i5-11600KF',
            'cpu_socket' => 'Socket 1200',
            'cpu_timing' => '3.9 GHz (4.9 GHz w trybie turbo)',
            'cpu_cache' => '12MB cache',
            'cpu_cores' => '6 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  1049.00, 
            'cpu_image_path' => 'cpu18.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i3-13100',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.4 GHz (4.5 GHz w trybie turbo)',
            'cpu_cache' => '12MB cache',
            'cpu_cores' => '4 rdzenie',
            'cpu_graphics' => 'Intel UHD Graphics 730',
            'cpu_price' =>  749.00, 
            'cpu_image_path' => 'cpu19.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i3-12100',
            'cpu_socket' => 'Socket 1700',
            'cpu_timing' => '3.3 GHz (4.3 GHz w trybie turbo)',
            'cpu_cache' => '12MB cache',
            'cpu_cores' => '4 rdzenie',
            'cpu_graphics' => 'Intel UHD Graphics 730',
            'cpu_price' =>  659.00, 
            'cpu_image_path' => 'cpu20.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'Intel Core i3-10100',
            'cpu_socket' => 'Socket 1200',
            'cpu_timing' => '3.6 GHz (4.3 GHz w trybie turbo)',
            'cpu_cache' => '6MB cache',
            'cpu_cores' => '4 rdzenie',
            'cpu_graphics' => 'Intel UHD Graphics 630',
            'cpu_price' =>  519.00, 
            'cpu_image_path' => 'cpu21.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 9 7900X',
            'cpu_socket' => 'Socket AM5',
            'cpu_timing' => '4.7 GHz (5.6 GHz w trybie turbo)',
            'cpu_cache' => '76MB cache',
            'cpu_cores' => '12 rdzeni',
            'cpu_graphics' => 'Radeon Graphics',
            'cpu_price' =>  2239.00, 
            'cpu_image_path' => 'cpu22.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 9 7900',
            'cpu_socket' => 'Socket AM5',
            'cpu_timing' => '3.7 GHz (5.4 GHz w trybie turbo)',
            'cpu_cache' => '76MB cache',
            'cpu_cores' => '12 rdzeni',
            'cpu_graphics' => 'Radeon Graphics',
            'cpu_price' =>  2299.00, 
            'cpu_image_path' => 'cpu23.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 9 5900X',
            'cpu_socket' => 'Socket AM4',
            'cpu_timing' => '3.7 GHz (4.8 GHz w trybie turbo)',
            'cpu_cache' => '70MB cache',
            'cpu_cores' => '12 rdzeni',
            'cpu_graphics' => 'Intel UHD Graphics 630',
            'cpu_price' =>  1699.00, 
            'cpu_image_path' => 'cpu24.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 7 7700X',
            'cpu_socket' => 'Socket AM5',
            'cpu_timing' => '4.5 GHz (5.4 GHz w trybie turbo)',
            'cpu_cache' => '40MB cache',
            'cpu_cores' => '8 rdzeni',
            'cpu_graphics' => 'Radeon Graphics',
            'cpu_price' =>  1779.00, 
            'cpu_image_path' => 'cpu25.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 7 5800X3D',
            'cpu_socket' => 'Socket AM4',
            'cpu_timing' => '3.4 GHz (4.5 GHz w trybie turbo)',
            'cpu_cache' => '100MB cache',
            'cpu_cores' => '8 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  1679.00, 
            'cpu_image_path' => 'cpu26.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 7 5700X',
            'cpu_socket' => 'Socket AM4',
            'cpu_timing' => '3.4 GHz (4.6 GHz w trybie turbo)',
            'cpu_cache' => '36MB cache',
            'cpu_cores' => '8 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  939.00, 
            'cpu_image_path' => 'cpu27.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 5 7600X',
            'cpu_socket' => 'Socket AM5',
            'cpu_timing' => '4.7 GHz (5.3 GHz w trybie turbo)',
            'cpu_cache' => '38MB cache',
            'cpu_cores' => '6 rdzeni',
            'cpu_graphics' => 'Radeon Graphics',
            'cpu_price' =>  1199.00, 
            'cpu_image_path' => 'cpu28.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 5 7600',
            'cpu_socket' => 'Socket AM5',
            'cpu_timing' => '3.8 GHz (5.1 GHz w trybie turbo)',
            'cpu_cache' => '38MB cache',
            'cpu_cores' => '6 rdzeni',
            'cpu_graphics' => 'Radeon Graphics',
            'cpu_price' =>  1229.00, 
            'cpu_image_path' => 'cpu29.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 5 5600X',
            'cpu_socket' => 'Socket AM4',
            'cpu_timing' => '3.7 GHz (4.6 GHz w trybie turbo)',
            'cpu_cache' => '35MB cache',
            'cpu_cores' => '6 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  869.00, 
            'cpu_image_path' => 'cpu30.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 5 5600',
            'cpu_socket' => 'Socket AM4',
            'cpu_timing' => '3.5 GHz (4.4 GHz w trybie turbo)',
            'cpu_cache' => '35MB cache',
            'cpu_cores' => '6 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  709.00, 
            'cpu_image_path' => 'cpu31.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 5 3600',
            'cpu_socket' => 'Socket AM4',
            'cpu_timing' => '3.6 GHz (4.2 GHz w trybie turbo)',
            'cpu_cache' => '35MB cache',
            'cpu_cores' => '6 rdzeni',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  459.00, 
            'cpu_image_path' => 'cpu32.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 3 4300G',
            'cpu_socket' => 'Socket AM4',
            'cpu_timing' => '3.8 GHz (4.0 GHz w trybie turbo)',
            'cpu_cache' => '6MB cache',
            'cpu_cores' => '4 rdzenie',
            'cpu_graphics' => 'Radeon Graphics',
            'cpu_price' =>  499.00, 
            'cpu_image_path' => 'cpu33.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 3 4100',
            'cpu_socket' => 'Socket AM4',
            'cpu_timing' => '3.8 GHz (4.0 GHz w trybie turbo)',
            'cpu_cache' => '6MB cache',
            'cpu_cores' => '4 rdzenie',
            'cpu_graphics' => 'Brak',
            'cpu_price' =>  329.00, 
            'cpu_image_path' => 'cpu34.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('cpu')->insert([
            'cpu_fullname' => 'AMD Ryzen 3 3200G',
            'cpu_socket' => 'Socket AM4',
            'cpu_timing' => '3.6 GHz (4.0 GHz w trybie turbo)',
            'cpu_cache' => '6MB cache',
            'cpu_cores' => '4 rdzenie',
            'cpu_graphics' => 'Radeon RX Vega 8',
            'cpu_price' =>  429.00, 
            'cpu_image_path' => 'cpu35.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
