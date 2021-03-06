<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\pelangganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pelanggan.login');
});

Route::get('/daftar', function () {
    return view('pelanggan.daftar');
});


Route::get('/admin', [ObatController::class, 'admin'])->name('obat');

Route::get('/home', [ObatController::class, 'index'])->name('obat');

Route::get('/katalog', [ObatController::class, 'katalog'])->name('katalog');

Route::get('/detailobat/{id}', [ObatController::class, 'detail'])->name('detail');

Route::post('/admin/tambahobat', [ObatController::class, 'tambahobat'])->name('simpanobat');

Route::post('/daftarpelanggan', [pelangganController::class, 'daftar'])->name('daftarpelanggan');
