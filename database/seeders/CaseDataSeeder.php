<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CaseDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('case')->insert([
            'case_fullname' => 'be quiet! Pure Base 500DX Black',
            'case_type' => 'Middle Tower',
            'case_standard' => 'ATX, m-ATX, Mini-ITX',
            'case_fans' => 'Zainstalowane wentylatory: 3',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 569.00 , 
            'case_image_path' => 'images/case/case1.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'KRUX Vako',
            'case_type' => 'Middle Tower',
            'case_standard' => 'ATX, m-ATX, microATX',
            'case_fans' => 'Zainstalowane wentylatory: 3',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 239.00 ,
            'case_image_path' => 'images/case/case2.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'ENDORFY Regnum 400 ARGB',
            'case_type' => 'Middle Tower',
            'case_standard' => 'ATX, microATX, ITX',
            'case_fans' => 'Zainstalowane Wentylatory: 4',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 469.00,
            'case_image_path' => 'images/case/case3.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'SilentiumPC Armis AR1',
            'case_type' => 'Middle Tower',
            'case_standard' => 'ATX, microATX, Mini-ITX',
            'case_fans' => 'Zainstalowane wentylatory: 1',
            'case_side_panel' => 'Brak szkła hartowanego',
            'case_price' => 159.00,
            'case_image_path' => 'images/case/case4.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'ENDORFY Signum 300 Air',
            'case_type' => 'Middle Tower',
            'case_standard' => 'ATX, microATX, ITX',
            'case_fans' => 'Zainstalowane wentylatory: 4',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 329.00,
            'case_image_path' => 'images/case/case5.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'Lian Li Lancool III Black',
            'case_type' => 'Big Tower',
            'case_standard' => 'ATX, microARX, Mini-ITX, EATX',
            'case_fans' => 'Zainstalowane wentylatory: 4',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 749.00,
            'case_image_path' => 'images/case/case6.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'Corsair 4000D Airflow White',
            'case_type' => 'Middle Tower',
            'case_standard' => 'ATX, microATX, Mini-ITX, EATX',
            'case_fans' => 'Zainstalowane wentylatory: 2',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 479.00,
            'case_image_path' => 'images/case/case7.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'Lian Li O11 Air Mini Black',
            'case_type' => 'Mini Tower',
            'case_standard' => 'ATX, microATX, Mini-ITX, EATX',
            'case_fans' => 'Zainstalowane wentylatory: 3',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 549.00,
            'case_image_path' => 'images/case/case8.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'be quiet! Pure Base 500FX',
            'case_type' => 'Middle Tower',
            'case_standard' => 'ATX, m-ATX, Mini-ITX',
            'case_fans' => 'Zainstalowane wentylatory: 4',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 699.00,
            'case_image_path' => 'images/case/case9.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'Kolink Void RGB White',
            'case_type' => 'Middle Tower',
            'case_standard' => 'ATX, microATX, Mini-ITX',
            'case_fans' => 'Zainstalowane wentylatory: 1',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 279.00,
            'case_image_path' => 'images/case/case10.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'MSI MAG Forge 111R',
            'case_type' => 'Middle Tower',
            'case_standard' => 'ATX, m-ATX, ITX',
            'case_fans' => 'Zainstalowane wentylatory: 1',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 299.00,
            'case_image_path' => 'images/case/case11.jpg',
        ]);

        DB::table('case')->insert([
            'case_fullname' => 'Zalman S3',
            'case_type' => 'Middle Tower',
            'case_standard' => 'ATX, m-ATX, Mini-ITX',
            'case_fans' => 'Zainstalowane wentylatory: 1',
            'case_side_panel' => 'Szkło hartowane',
            'case_price' => 299.00,
            'case_image_path' => 'images/case/case12.jpg',
        ]);
    }
}
