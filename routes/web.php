<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

// Rute untuk Halaman Utama (Homepage)
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk Halaman Profil Desa
Route::get('/profil', function () {
    return view('profil'); // -> Menampilkan file resources/views/profil.blade.php
})->name('profil');

// --- Rute Placeholder untuk Halaman Lainnya ---
// Anda bisa mengembangkan ini nanti dengan controller dan view yang sesungguhnya

Route::get('/infografis', function () {
    return "Halaman Infografis akan segera dibuat.";
})->name('infografis');

Route::get('/listing', function () {
    return "Halaman Listing akan segera dibuat.";
})->name('listing');

Route::get('/belanja', function () {
    return "Halaman Belanja akan segera dibuat.";
})->name('belanja');


// --- Rute untuk Berita (sudah ada sebelumnya) ---

// Halaman daftar semua berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

// Halaman detail satu berita
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

