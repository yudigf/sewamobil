<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('user.create');
});


Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/mobil', [MobilController::class, 'index'])->name('mobil.index');
Route::get('/mobil/create', [MobilController::class, 'create'])->name('mobil.create');
Route::post('/mobil', [MobilController::class, 'store'])->name('mobil.store');
Route::get('/mobil/search', [MobilController::class, 'search'])->name('mobil.search');


Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
