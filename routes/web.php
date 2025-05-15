<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\Front\PendaftaranController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KontakController;

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
Route::get('home', [HomeController::class, 'index']);
Route::get('pendaftaran', [PendaftaranController::class,'pendaftaran'])->name('front.pendaftaran');
Route::resource('informasi', InformasiController::class);
Route::resource('kontak', KontakController::class);

