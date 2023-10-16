<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiskDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disk')->insert([
            'disk_fullname' => 'Lexar NM620',
            'disk_capacity' => '1TB',
            'disk_interface' => 'M.2 PCIe NVMe 3.0 x4',
            'disk_format' => 'M.2',
            'disk_read_speed' => '3300 MB/s',
            'disk_write_speed' => '3000 MB/s',
            'disk_price' =>  219.00, 
            'disk_image_path' => 'images/disk/disk1.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Samsung 980',
            'disk_capacity' => '500GB',
            'disk_interface' => 'M.2 PCIe NVMe 3.0 x4',
            'disk_format' => 'M.2',
            'disk_read_speed' => '3100 MB/s',
            'disk_write_speed' => '2600 MB/s',
            'disk_price' =>  159.00, 
            'disk_image_path' => 'images/disk/disk2.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Goodram CX400',
            'disk_capacity' => '512GB',
            'disk_interface' => 'Sata',
            'disk_format' => '2,5`',
            'disk_read_speed' => '550 MB/s',
            'disk_write_speed' => '500 MB/s',
            'disk_price' =>  109.00, 
            'disk_image_path' => 'images/disk/disk3.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Samsung 870 EVO',
            'disk_capacity' => '500GB',
            'disk_interface' => 'Sata',
            'disk_format' => '2,5`',
            'disk_read_speed' => '560 MB/s',
            'disk_write_speed' => '530 MB/s',
            'disk_price' =>  189.00, 
            'disk_image_path' => 'images/disk/disk4.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Sasmung 980 PRO',
            'disk_capacity' => '1TB',
            'disk_interface' => 'M.2 PCIe NVMe 4.0 x4',
            'disk_format' => 'M.2',
            'disk_read_speed' => '7000 MB/s',
            'disk_write_speed' => '5000 MB/s',
            'disk_price' => 399.00, 
            'disk_image_path' => 'images/disk/disk5.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Kioxia Exceria',
            'disk_capacity' => '480GB',
            'disk_interface' => 'Sata',
            'disk_format' => '2,5`',
            'disk_read_speed' => '555 MB/s',
            'disk_write_speed' => '540 MB/s',
            'disk_price' =>  115.00, 
            'disk_image_path' => 'images/disk/disk6.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Gigabyte',
            'disk_capacity' => '256GB',
            'disk_interface' => 'Sata',
            'disk_format' => '2,5`',
            'disk_read_speed' => '520 MB/s',
            'disk_write_speed' => '500 MB/s',
            'disk_price' =>  69.00, 
            'disk_image_path' => 'images/disk/disk7.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Lexar NM800 Pro',
            'disk_capacity' => '1TB',
            'disk_interface' => 'M.2 PCIe NVMe 4.0 x4',
            'disk_format' => 'M.2',
            'disk_read_speed' => '7500 MB/s',
            'disk_write_speed' => '6300 MB/s',
            'disk_price' =>  339.00, 
            'disk_image_path' => 'images/disk/disk8.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Lexar NS100',
            'disk_capacity' => '512GB',
            'disk_interface' => 'Sata',
            'disk_format' => '2,5`',
            'disk_read_speed' => '550 MB/s',
            'disk_write_speed' => '500 MB/s',
            'disk_price' =>  119.00, 
            'disk_image_path' => 'images/disk/disk9.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Crucial P3',
            'disk_capacity' => '1TB',
            'disk_interface' => 'M.2 PCIe NVMe 3.0 x4',
            'disk_format' => 'M.2',
            'disk_read_speed' => '3500 MB/s',
            'disk_write_speed' => '3000 MB/s',
            'disk_price' =>  239.00, 
            'disk_image_path' => 'images/disk/disk10.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Seagate Barracuda Compute',
            'disk_capacity' => '2TB',
            'disk_interface' => 'Sata III',
            'disk_format' => '3,5`',
            'disk_read_speed' => '-----',
            'disk_write_speed' => '-----',
            'disk_price' =>  245.00, 
            'disk_image_path' => 'images/disk/disk11.jpg',
        ]);

        DB::table('disk')->insert([
            'disk_fullname' => 'Toshiba P300',
            'disk_capacity' => '1TB',
            'disk_interface' => 'Sata III',
            'disk_format' => '3,5`',
            'disk_read_speed' => '-----',
            'disk_write_speed' => '-----',
            'disk_price' => 189.00 , 
            'disk_image_path' => 'images/disk/disk12.jpg',
        ]);
    }
}
