<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\farmasiController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\Front\PendaftaranController;
use App\Http\Controllers\identitascontroller;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\jadwal_doktercontroller;
use App\Http\Controllers\kamarController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\rekam_medisController;
use App\Http\Controllers\sambutancontroller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FrontController::class, 'index']);
Route::resource('informasi', InformasiController::class);
Route::resource('kontak', KontakController::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('kamar',kamarController::class);

Route::resource('farmasi',farmasiController::class);
Route::get('farmasi', [farmasiController::class, 'index'])->name('farmasi.index');
Route::get('farmasi/create', [farmasiController::class, 'create'])->name('farmasi.create');
Route::post('farmasi', [farmasiController::class, 'store'])->name('farmasi.store');
Route::get('farmasi/{id}/edit', [farmasiController::class, 'edit'])->name('farmasi.edit');
Route::put('farmasi/{id}', [farmasiController::class, 'update'])->name('farmasi.update');
Route::delete('farmasi/{id}', [farmasiController::class, 'destroy'])->name('farmasi.destroy');

Route::get('identitas',[identitascontroller::class, 'index'])->name('identitas.index');
Route::get('sambutan',[sambutancontroller::class, 'index'])->name('sambutan.index');
Route::get('pasien_daftar',[Frontcontroller::class, 'pendaftaran'])->name('front.pasien_daftar');
Route::post('pasien_daftar/store',[Frontcontroller::class, 'pendaftaran_store'])->name('front.pasien_daftar.store');

Route::resource('jadwal_dokter', jadwal_dokterController::class);
Route::get('jadwal_dokter', [jadwal_dokterController::class, 'index'])->name('jadwal_dokter.index');
Route::get('jadwal_dokter/create', [jadwal_dokterController::class, 'create'])->name('jadwal_dokter.create');
Route::post('jadwal_dokter', [jadwal_dokterController::class, 'store'])->name('jadwal_dokter.store');
Route::get('jadwal_dokter/{id}/edit', [jadwal_dokterController::class, 'edit'])->name('jadwal_dokter.edit');
Route::put('jadwal_dokter/{id}', [jadwal_dokterController::class, 'update'])->name('jadwal_dokter.update');
Route::delete('jadwal_dokter/{id}', [jadwal_dokterController::class, 'destroy'])->name('jadwal_dokter.destroy');

Route::get('pendaftaran', [PendaftaranController::class,'pendaftaran'])->name('front.pendaftaran'); 

Route::resource('rekam_medis', rekam_medisController::class);
Route::resource('rekam-medis', rekam_medisController::class);
