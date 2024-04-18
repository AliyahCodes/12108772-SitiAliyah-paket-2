<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::get('User', [UserController::class, 'index']);
Route::get('User/create', [UserController::class, 'create']);
Route::post('User/create', [UserController::class, 'store'])->name('create.user');
Route::get('User/edit/{id}', [UserController::class, 'edit']);
Route::patch('User/edit/{id}', [UserController::class, 'update']);
Route::delete('User/delete/{id}', [UserController::class, 'destroy']);






