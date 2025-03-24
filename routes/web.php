<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Monolog\Level;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);             // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);        // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);     // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);           // menyimpan data user baru
    Route::get('/create_ajax', [UserController::class, 'create_ajax']);  //Menampilkan halaman form tambah user ajax
    Route::post('/ajax', [UserController::class, 'store_ajax']);        //Menyimpan datauser baru Ajax
    Route::get('/{id}', [UserController::class, 'show']);         // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);    // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);       // menyimpan perubahan data user
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);   
    Route::delete('/{id}', [UserController::class, 'destroy']);
    Route::get('/{id}/show_ajax', [UserController::class, 'show_ajax']);
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);             // menampilkan halaman awal Level
    Route::post('/list', [LevelController::class, 'list']);        // menampilkan data Level dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);     // menampilkan halaman form tambah Level
    Route::post('/', [LevelController::class, 'store']);           // menyimpan data Level baru
    Route::get('/create_ajax', [LevelController::class, 'create_ajax']);  //Menampilkan halaman form tambah user ajax
    Route::post('/ajax', [LevelController::class, 'store_ajax']);        //Menyimpan datauser baru Ajax
    Route::get('/{id}', [LevelController::class, 'show']);         // menampilkan detail Level
    Route::get('/{id}/edit', [LevelController::class, 'edit']);    // menampilkan halaman form edit Level
    Route::put('/{id}', [LevelController::class, 'update']);       // menyimpan perubahan data Level
    Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
    Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
    Route::delete('/{id}', [LevelController::class, 'destroy']);   // menghapus data user
    Route::get('/{id}/show_ajax', [LevelController::class, 'show_ajax']);
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);             // menampilkan halaman awal Kategori
    Route::post('/list', [KategoriController::class, 'list']);        // menampilkan data Kategori dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']);     // menampilkan halaman form tambah Kategori
    Route::post('/', [KategoriController::class, 'store']);           // menyimpan data Kategori baru
     Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);  //Menampilkan halaman form tambah user ajax
    Route::post('/ajax', [KategoriController::class, 'store_ajax']);        //Menyimpan datauser baru Ajax
    Route::get('/{id}', [KategoriController::class, 'show']);         // menampilkan detail Level
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);    // menampilkan halaman form edit Level
    Route::put('/{id}', [KategoriController::class, 'update']);       // menyimpan perubahan data Level
    Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
    Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);   // menghapus data user
    Route::get('/{id}/show_ajax', [KategoriController::class, 'show_ajax']);
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [SupplierController::class, 'index']);             // menampilkan halaman awal Supplier
    Route::post('/list', [SupplierController::class, 'list']);        // menampilkan data Supplier dalam bentuk json untuk datatables
    Route::get('/create', [SupplierController::class, 'create']);     // menampilkan halaman form tambah Supplier
    Route::post('/', [SupplierController::class, 'store']);           // menyimpan data Supplier baru
    Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
    Route::post('/ajax', [SupplierController::class, 'store_ajax']);
    Route::get('/{id}', [SupplierController::class, 'show']);
    Route::get('/{id}/show_ajax', [SupplierController::class, 'show_ajax']);
    Route::get('/{id}/edit', [SupplierController::class, 'edit']); 
    Route::put('/{id}', [SupplierController::class, 'update']);
    Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']); 
    Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']); 
    Route::delete('/{id}', [SupplierController::class, 'destroy']);
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']);             // menampilkan halaman awal Barang
    Route::post('/list', [BarangController::class, 'list']);        // menampilkan data Barang dalam bentuk json untuk datatables
    Route::get('/create', [BarangController::class, 'create']);     // menampilkan halaman form tambah Barang
    Route::post('/', [BarangController::class, 'store']);           // menyimpan data Barang baru
    Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
    Route::post('/ajax', [BarangController::class, 'store_ajax']);
    Route::get('/{id}', [BarangController::class, 'show']);
    Route::get('/{id}/show_ajax', [BarangController::class, 'show_ajax']);
    Route::get('/{id}/edit', [BarangController::class, 'edit']); 
    Route::put('/{id}', [BarangController::class, 'update']);
    Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']); 
    Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']); 
    Route::delete('/{id}', [BarangController::class, 'destroy']);
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('user.ubah_simpan');
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);