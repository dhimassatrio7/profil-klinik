<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/layanan', [HomeController::class, 'allLayanan'])->name('layanan.index');
Route::get('/layanan/{id}', [HomeController::class, 'showLayanan'])->name('layanan.show');

Route::get('/dokter', [HomeController::class, 'allDokter'])->name('dokter.index');
Route::get('/dokter/{id}', [HomeController::class, 'showDokter'])->name('dokter.show');

Route::get('/artikel', [HomeController::class, 'allArtikel'])->name('artikel.index');
Route::get('/artikel/{slug}', [HomeController::class, 'showArtikel'])->name('artikel.show');

Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
