<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'MKN', 'kategori_nama' => 'Makanan'],
            ['kategori_id' => 2, 'kategori_kode' => 'MIN', 'kategori_nama' => 'Minuman'],
            ['kategori_id' => 3, 'kategori_kode' => 'SNK', 'kategori_nama' => 'Snack'],
            ['kategori_id' => 4, 'kategori_kode' => 'BHN', 'kategori_nama' => 'Bahan Masakan'],
            ['kategori_id' => 5, 'kategori_kode' => 'FRZ', 'kategori_nama' => 'Frozen Food'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
