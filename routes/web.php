<?php

use App\Http\Controllers\TampilanFrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TampilanFrontendController::class, 'beranda'])->name('beranda');
Route::get('/profile', [TampilanFrontendController::class, 'profile'])->name('profile');
Route::get('/program', [TampilanFrontendController::class, 'program'])->name('program');
Route::get('/layanan', [TampilanFrontendController::class, 'layanan'])->name('layanan');
Route::get('/produk-jasa', [TampilanFrontendController::class, 'produkJasa'])->name('produkJasa');
Route::get('/berita', [TampilanFrontendController::class, 'berita'])->name('berita');
Route::get('/galeri', [TampilanFrontendController::class, 'galeri'])->name('galeri');
Route::get('/layanan/web', [TampilanFrontendController::class, 'layananWeb'])->name('layanan.Web');
