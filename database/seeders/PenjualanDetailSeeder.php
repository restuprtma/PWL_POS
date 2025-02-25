<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $barangHarga = [
            1 => 3000, 2 => 12000, 3 => 3000, 4 => 7000, 5 => 3000,
            6 => 3000, 7 => 3000, 8 => 23000, 9 => 35000, 10 => 9000,
            11 => 20000, 12 => 18000, 13 => 25000, 14 => 1500, 15 => 1500
        ];

        for ($i = 1; $i <= 10; $i++) { // 10 transaksi
            $barangDipilih = array_rand($barangHarga, 3); // Pilih 3 barang unik
            foreach ($barangDipilih as $barang_id) {
                $data[] = [
                    'penjualan_id' => $i,
                    'barang_id' => $barang_id,
                    'harga' => $barangHarga[$barang_id], // Harga sesuai database
                    'jumlah' => rand(1, 5),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
 
    }
}
