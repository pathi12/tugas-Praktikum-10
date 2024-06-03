<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitkerjaController;
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

Route::resource('Unitkerja', UnitkerjaController::class);

// Praktikum 12
Route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('/admin/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('/admin/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');

Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');