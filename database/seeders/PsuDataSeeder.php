<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PsuDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('psu')->insert([
            'psu_fullname' => 'Thermaltake Thoughpower GF1',
            'psu_power' => '650W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '90% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Gold',
            'psu_price' =>  499.00, 
            'psu_image_path' => 'images/psu/psu1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'NZXT C650',
            'psu_power' => '650W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '87%-90% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Gold',
            'psu_price' =>  499.00, 
            'psu_image_path' => 'images/psu/psu2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'be quiet! Pure Power 11 FM',
            'psu_power' => '650W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '90% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Gold',
            'psu_price' =>  499.00, 
            'psu_image_path' => 'images/psu/psu3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'be quiet! Straight Power 11',
            'psu_power' => '450W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '91%-93% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Gold',
            'psu_price' =>  459.00, 
            'psu_image_path' => 'images/psu/psu4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'SilentiumOC Supremo FM2',
            'psu_power' => '750W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '88%-92% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Gold',
            'psu_price' =>  459.00, 
            'psu_image_path' => 'images/psu/psu5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'SilverStone SFX',
            'psu_power' => '450W',
            'psu_standard' => 'SFX',
            'psu_efficiency' => '85%-88% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Bronze',
            'psu_price' =>  319.00, 
            'psu_image_path' => 'images/psu/psu6.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'SilentiumPC Supremo M2',
            'psu_power' => '550W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '91% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Gold',
            'psu_price' =>  319.00, 
            'psu_image_path' => 'images/psu/psu7.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'Thermaltake Smart Se',
            'psu_power' => '630W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '87% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => 'Nie certyfikowany',
            'psu_price' => 319.00, 
            'psu_image_path' => 'images/psu/psu8.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'Fractal Design Anode',
            'psu_power' => '450W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '88% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Bronze',
            'psu_price' =>  299.00, 
            'psu_image_path' => 'images/psu/psu9.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'Sharkoon SHP',
            'psu_power' => '700W',
            'psu_standard' => 'SFX',
            'psu_efficiency' => '82%-85% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Bronze',
            'psu_price' =>  299.00, 
            'psu_image_path' => 'images/psu/psu10.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'be quiet! SFX Power 3',
            'psu_power' => '300W',
            'psu_standard' => 'SFX',
            'psu_efficiency' => '88% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Bronze',
            'psu_price' =>  299.00, 
            'psu_image_path' => 'images/psu/psu11.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'Chieftec Task',
            'psu_power' => '700W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '85% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Bronze',
            'psu_price' =>  299.00, 
            'psu_image_path' => 'images/psu/psu12.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'Thermaltake Smart SE2',
            'psu_power' => '600W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '88% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Silver',
            'psu_price' =>  299.00, 
            'psu_image_path' => 'images/psu/psu13.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'Seasonic SSP',
            'psu_power' => '300W',
            'psu_standard' => 'SFX',
            'psu_efficiency' => '85% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Bronze',
            'psu_price' => 289.00, 
            'psu_image_path' => 'images/psu/psu14.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('psu')->insert([
            'psu_fullname' => 'Cougar XTC',
            'psu_power' => '550W',
            'psu_standard' => 'ATX',
            'psu_efficiency' => '86% przy 230V oraz 20-100% obciążeniu',
            'psu_certificate' => '80 PLUS Bronze',
            'psu_price' =>  269.00, 
            'psu_image_path' => 'images/psu/psu15.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
