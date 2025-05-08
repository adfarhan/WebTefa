<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\KeunggulanController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\TampilanAdminController;
use App\Http\Controllers\TampilanFrontendController;

Route::get('/', [TampilanFrontendController::class, 'beranda'])->name('beranda.user');
Route::get('/profile/tefa', [TampilanFrontendController::class, 'profile'])->name('profile.user');
Route::get('/program/tefa', [TampilanFrontendController::class, 'program'])->name('program.user');
Route::get('/produk-jasa/tefa', [TampilanFrontendController::class, 'produkJasa'])->name('produkJasa.user');
Route::get('/berita/tefa', [TampilanFrontendController::class, 'berita'])->name('berita.user');
Route::get('/galeri/tefa', [TampilanFrontendController::class, 'galeri'])->name('galeri.user');
Route::get('/kontak/tefa', [TampilanFrontendController::class, 'kontak'])->name('kontak.user');

//detail
Route::get('/program/deail/{program}', [ProgramController::class, 'showUser'])->name('programdetail');
Route::get('/berita/detail/{berita}', [BeritaController::class, 'showUser'])->name('beritadetail');
Route::get('/produk/detail/{produk}', [ProdukController::class, 'showUser'])->name('produkdetail');
Route::get('/industri/detail/{industri}', [IndustriController::class, 'showUser'])->name('industridetail');


//login
Route::get('/login-admin/webtefa',[LoginController::class, 'formlogin'])->name('login');
Route::post('/login-admin/webtefa',[LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    // Form ubah password
    Route::get('/profile/password', [LoginController::class, 'editPassword'])->name('profile.password.edit');

    // Simpan password baru
    Route::post('/profile/password', [LoginController::class, 'updatePassword'])->name('profile.password.update');

    //beranda-utama
    Route::get('/beranda-utama/admin',[TampilanAdminController::class, 'beradautamaAdmin'])->name('berandautama.admin');

    //tampilanEditProfile
    Route::get('/profile-user/admin',[TampilanAdminController::class, 'prouser'])->name('pro.user');

    //beranda
    Route::get('/beranda/admin',[TampilanAdminController::class, 'berandaAdmin'])->name('beranda.admin');
    Route::get('/visi/misi/beranda/admin',[TampilanAdminController::class, 'visimisi'])->name('visi.misi');

    //crudKeunggulan
    Route::resource('/keunggulan',KeunggulanController::class);

    //landing
    Route::resource('landing', BerandaController::class);


    //crudVisi
    Route::resource('/visi',VisiController::class);

    //crudMisi
    Route::resource('/misi',MisiController::class);

    Route::get('/keunggulan/beranda/admin',[TampilanAdminController::class, 'keunggulanBeranda'])->name('keunggulan.admin');

    //profile
    Route::get('/profile/admin',[TampilanAdminController::class, 'profileAdmin'])->name('profile.admin');

    //crudProfileSejarah
    Route::resource('/profile',ProfileController::class);

    //crudIndustri
    Route::resource('/industri',IndustriController::class);

    //crudOrganisasi
    Route::resource('organisasis', OrganisasiController::class);

    //prgram
    Route::get('/program/admin',[TampilanAdminController::class, 'programAdmin'])->name('program.admin');
    //crudProgram
    Route::resource('programs', ProgramController::class);

    //layanan
    Route::get('/layanan/admin',[TampilanAdminController::class, 'layananAdmin'])->name('layanan.admin');
    Route::get('/testimoni/layanan/admin',[TampilanAdminController::class, 'testiLayanan'])->name('testimoni.admin');
    Route::get('/portofolio/layanan/admin',[TampilanAdminController::class, 'portoLayanan'])->name('porto.admin');

    //produk dan jasa
    Route::get('/produk-dan-jasa/admin',[TampilanAdminController::class, 'prodanjasaAdmin'])->name('proja.admin');

    //crudProduk
    Route::resource('/produk',ProdukController::class);

    //
    Route::get('/galeri/admin',[TampilanAdminController::class, 'galeriAdmin'])->name('galeri.admin');
    //crudGaleri
    Route::resource('galeris', GaleriController::class);

    //berita
    Route::get('/berita/admin',[TampilanAdminController::class, 'beritaAdmin'])->name('berita.admin');

    //crudBerita
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index'); // Menampilkan daftar berita
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create'); // Form tambah berita
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store'); // Simpan berita
    Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('berita.show'); // Lihat detail berita
    Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('berita.edit'); // Form edit berita
    Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('berita.update'); // Update berita
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy'); // Hapus berita

    //kontakmedsos
    Route::resource('kontaks', KontakController::class);
});
