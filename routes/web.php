<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//route resource
Route::resource('/barang', \App\Http\Controllers\BarangController::class);

//route resource
Route::resource('/Pegawai', \App\Http\Controllers\PegawaiController::class);
Route::get('pegawai/pdf', [PegawaiController::class, 'exportPdf'])->name('pegawai.pdf');