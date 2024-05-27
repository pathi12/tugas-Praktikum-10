<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeriksaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/admin', [AdminController::class, 'index']);

// praktikum 11
Route::get('/admin/pasien', [PasienController::class, 'index']);

// tugas pegawai praktikum 10
Route::get('/pegawai', [PegawaiController::class, 'index']);

// Tugas praktikum 11 Dokter
Route::resource('dokter', DokterController::class);

Route::get('/periksa', [PeriksaController::class, 'index'])->name('periksa');

