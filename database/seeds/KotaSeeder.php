<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kotas')->insert([
            'nama' => 'Jakarta',
            'provinsi' => 'DKI Jakarta',
            'gambar' => 'jakarta.png',
        ]);

        DB::table('kotas')->insert([
            'nama' => 'Jogja',
            'provinsi' => 'DI Yogyakarta',
            'gambar' => 'jogja.png',
        ]);

        DB::table('kotas')->insert([
            'nama' => 'Malang',
            'provinsi' => 'Jawa Timur',
            'gambar' => 'malang.png',
        ]);
    }
}
