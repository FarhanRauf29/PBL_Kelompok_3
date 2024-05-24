<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard',[HomeController::class, 'index'])->middleware(['auth','admin']);

// mahasiswa
route::get('view_mahasiswa',[AdminController::class, 'view_mahasiswa'])->middleware(['auth','admin']);
route::post('add_mahasiswa',[AdminController::class, 'add_mahasiswa'])->middleware(['auth','admin']);

// dosen
route::get('view_dosen',[AdminController::class, 'view_dosen'])->middleware(['auth','admin']);
route::post('add_dosen',[AdminController::class, 'add_dosen'])->middleware(['auth','admin']);

// staff
route::get('view_staff',[AdminController::class, 'view_staff'])->middleware(['auth','admin']);
route::post('add_staff',[AdminController::class, 'add_staff'])->middleware(['auth','admin']);

// staff
route::get('view_prodi',[AdminController::class, 'view_prodi'])->middleware(['auth','admin']);
route::post('add_prodi',[AdminController::class, 'add_prodi'])->middleware(['auth','admin']);

// Kategori Barang
route::get('view_kategori',[AdminController::class, 'view_kategori'])->middleware(['auth','admin']);
route::post('add_kategori',[AdminController::class, 'add_kategori'])->middleware(['auth','admin']);

// Barang
route::get('view_barang',[AdminController::class, 'view_barang'])->middleware(['auth','admin']);
route::post('add_barang',[AdminController::class, 'add_barang'])->middleware(['auth','admin']);

// peminjaman
route::get('view_peminjaman',[AdminController::class, 'view_peminjaman'])->middleware(['auth','admin']);
route::post('add_peminjaman',[AdminController::class, 'add_peminjaman'])->middleware(['auth','admin']);

// pengembalian
route::get('view_pengembalian',[AdminController::class, 'view_pengembalian'])->middleware(['auth','admin']);
route::post('add_pengembalian',[AdminController::class, 'add_pengembalian'])->middleware(['auth','admin']);