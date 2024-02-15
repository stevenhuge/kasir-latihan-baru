<?php

use App\Http\Controllers\ProdukController;
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
    return view('welcome');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/tambah', [ProdukController::class, 'tambah'])->name('tambah');
Route::post('/produk', [ProdukController::class, 'store'])->name('store');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('edit');
Route::get('/produk/{id}', [ProdukController::class, 'destroy'])->name('destroy');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('update');
