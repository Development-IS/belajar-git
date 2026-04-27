<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;

// Route untuk halaman calculate absensi
Route::get('/calculate-absensi', [AbsensiController::class, 'index'])->name('absensi.calculate');
Route::post('/calculate-absensi/result', [AbsensiController::class, 'calculate'])->name('absensi.calculate.post');

// Atau route sederhana tanpa controller (untuk belajar)
Route::view('/calculate-absensi-simple', 'calculate_absensi');

// Route dengan parameter
Route::get('/absensi/{karyawan_id}', function($id) {
    return view('calculate_absensi', ['karyawan_id' => $id]);
});