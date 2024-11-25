<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\PenerimaanAlatBahanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\KerusakanAlatController;
use App\Http\Controllers\PerbaikanAlatPratikumController;


// Rute halaman depan (Welcome Page)
Route::get('/', function () {
    return view('welcome');
});

Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('PeminjamanController');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// Rute Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rute untuk StokBarangController dengan resource route (CRUD)
Route::resource('stok_barang', StokBarangController::class);

// Rute untuk PeminjamanController dengan resource route (CRUD)
Route::resource('peminjaman', PeminjamanController::class);

// Rute untuk PenerimaanAlatBahanController dengan resource route (CRUD)
Route::resource('penerimaan', PenerimaanAlatBahanController::class);

// Rute untuk PermohonanController dengan resource route (CRUD)
Route::resource('permohonan', PermohonanController::class);

// Rute untuk KerusakanAlatController dengan resource route (CRUD)
Route::resource('kerusakanAlat', KerusakanAlatController::class);



Route::middleware(['role:manager'])->group(function () {
    Route::get('/manage-users', [UserController::class, 'manageUsers']);
});

Route::resource('perbaikan_alat_pratikum', PerbaikanAlatPratikumController::class);
