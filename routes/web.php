<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('Admin/Dashboard', [AdminController::class, 'Dashboard']);

Route::get('Produk', [AdminController::class, 'produk']);
Route::get('Produk/create', [AdminController::class, 'create']);
// Route::post('Produk/create', [AdminController::class, 'store'])->name('create.data');
Route::get('produk/edit', [AdminController::class, 'edit']);
// Route::patch('produk/{$id}/edit', [AdminController::class, 'update'])->name('update.data');
Route::delete('Produk/{$id}/delete', [AdminController::class, 'destroy']);








Route::get('Transaksi', [AdminController::class, 'transaksi']);
Route::get('transaksi/create', [AdminController::class, 'create_transaksi']);
// Route::post('transaksi/create', [AdminController::class, 'store_transaksi'])->name('create.data');
Route::get('transaksi/create/post', [AdminController::class, 'post']);
Route::get('transaksi/edit', [AdminController::class, 'edit_transaksi']);
// Route::patch('transaksi/{$id}/edit', [AdminController::class, 'update_transaksi'])->name('update.data');
Route::get('transaksi/detail', [AdminController::class, 'detail_transaksi']);
Route::get('transaksi/print', [AdminController::class, 'print_transaksi']);
Route::delete('transaksi/{$id}/delete', [AdminController::class, 'destroy_transaksi']);






Route::get('User', [AdminController::class, 'user']);
Route::get('User/create', [AdminController::class, 'create_user']);
// Route::post('User/create', [AdminController::class, 'store_user'])->name('create.data');
Route::get('User/edit', [AdminController::class, 'edit_user']);
// Route::patch('User/{$id}/edit', [AdminController::class, 'update_user'])->name('update.data');
Route::delete('User/{$id}/delete', [AdminController::class, 'destroy_user']);





