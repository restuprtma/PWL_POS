<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class KategoriController extends Controller
{
    public function index()
    {
        // $data = [
        //     'kategori_kode' => 'SNCK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return "Insert data baru berhasil";

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNCK')->update(['kategori_nama' => 'Camilan']);
        // return "Update data berhasil. Jumlah data yang diupdate : " . $row . " baris!";

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNCK')->delete();
        // return "Delete data berhasil. Jumlah data yang dihapus: " . $row . " baris!";

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
