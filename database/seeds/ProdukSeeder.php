<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
        	'nama' => 'Kerak Telor',
            'kota_id' => 1,
            'harga' => 20000,
            'jenis' => 'Makanan',
            'berat' => 150,
            'satuan' => 'Porsi',
            'gambar' => 'kerak telor.jpg'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Kue Kembang Goyang',
            'kota_id' => 1,
            'harga' => 20000,
            'jenis' => 'Makanan',
            'berat' => 250,
            'satuan' => 'Bungkus',
            'gambar' => 'Kue kembang goyang.jpg'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Bir Pletok',
            'kota_id' => 1,
            'harga' => 25000,
            'jenis' => 'Minuman',
            'berat' => 500,
            'satuan' => 'Botol',
            'gambar' => 'Bir pletok.jpg'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Bakpia Pathok isi 15',
            'kota_id' => 2,
            'harga' => 30000,
            'jenis' => 'Makanan',
            'berat' => 625,
            'satuan' => 'Kotak',
            'gambar' => 'Bakpia pathok.jpg'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Cokelat Monggo',
            'kota_id' => 2,
            'harga' => 26000,
            'jenis' => 'Makanan',
            'berat' => 40,
            'satuan' => 'Bungkus',
            'gambar' => 'coklat monggo.jpg'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Yangko isi 30',
            'kota_id' => 2,
            'harga' => 25000,
            'jenis' => 'Makanan',
            'berat' => 650,
            'satuan' => 'Kotak',
            'gambar' => 'yangko.jpg'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Keripik buah',
            'kota_id' => 3,
            'harga' => 15000,
            'jenis' => 'Makanan',
            'berat' => 50,
            'satuan' => 'Bungkus',
            'gambar' => 'keripik buah.jpg'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Pia mangkok isi 12',
            'kota_id' => 3,
            'harga' => 50000,
            'jenis' => 'Makanan',
            'berat' => 550,
            'satuan' => 'Bungkus',
            'gambar' => 'pia mangkok.jpg'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Cokelat tempe isi 10',
            'kota_id' => 3,
            'harga' => 30000,
            'jenis' => 'Makanan',
            'berat' => 400,
            'satuan' => 'Pack',
            'gambar' => 'coklat tempe.jpg'
        ]);
    }
}
