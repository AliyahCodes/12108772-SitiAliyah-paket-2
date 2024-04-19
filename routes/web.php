<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth'])->name('auth');

Route::get('/logout', [AuthController::class, 'logout']);


Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('staf', [DashboardController::class, 'staf']);

    Route::get('User', [UserController::class, 'index']);
    Route::get('User/create', [UserController::class, 'create']);
    Route::post('User/create', [UserController::class, 'store'])->name('create.user');
    Route::get('User/edit/{id}', [UserController::class, 'edit']);
    Route::patch('User/edit/{id}', [UserController::class, 'update']);
    Route::delete('User/delete/{id}', [UserController::class, 'destroy']);

    Route::get('Pelanggan', [PelangganController::class, 'index']);
    Route::get('Pelanggan/create', [PelangganController::class, 'create']);
    Route::post('Pelanggan/create', [PelangganController::class, 'store'])->name('create.Pelanggan');
    Route::get('Pelanggan/edit/{id}', [PelangganController::class, 'edit']);
    Route::patch('Pelanggan/edit/{id}', [PelangganController::class, 'update']);
    Route::delete('Pelanggan/delete/{id}', [PelangganController::class, 'destroy']);

    Route::get('Produk', [ProdukController::class, 'index']);
    Route::get('search', [ProdukController::class, 'search'])->name('search');

    Route::get('Produk/create', [ProdukController::class, 'create']);
    Route::post('Produk/create', [ProdukController::class, 'store'])->name('create.Produk');
    Route::get('Produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::patch('Produk/edit/{id}', [ProdukController::class, 'update']);
    Route::delete('Produk/delete/{id}', [ProdukController::class, 'destroy']);

    Route::get('Produk/stok/{id}', [ProdukController::class, 'edit_stok']);
    Route::patch('Produk/stok/{id}', [ProdukController::class, 'update_stok']);


    Route::get('Transaksi', [TransaksiController::class, 'index']);
    Route::get('transaksi/create', [TransaksiController::class, 'create']);
    Route::get('Transaksi/{id}/edit', [TransaksiController::class, 'update']);
    Route::delete('Transaksi/delet/{id}', [TransaksiController::class, 'destroy']);



    Route::get('transaksi/detail/{$id}', [DetailTransaksiController::class, 'detail']);
    Route::post('transaksi/detail/create', [DetailTransaksiController::class, 'store']);
    Route::delete('transaksi/delete/{id}', [DetailTransaksiController::class, 'destroy']);
    Route::get('transaksi/print/{id}', [DetailTransaksiController::class, 'print']);





});
