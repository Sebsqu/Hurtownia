<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'name' => 'Sebastian',
            'surname' => 'Skubała',
            'email' => 'seba153@onet.pl',
            'password' => Hash::make("SEBAtoja1@"),
            'role_id' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('Users')->insert([
            'name' => 'Sebastian',
            'surname' => 'Skubała',
            'email' => 'seba154@onet.pl',
            'password' => Hash::make("SEBAtoja1@"),
            'role_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('Users')->insert([
            'name' => 'Sebastian',
            'surname' => 'Skubała',
            'email' => 'seba155@onet.pl',
            'password' => Hash::make("SEBAtoja1@"),
            'role_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
