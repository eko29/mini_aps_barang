<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [BarangController::class, 'index'])->name('barang.index');
Route::post('/upload', [BarangController::class, 'upload'])->name('barang.upload');
Route::post('/', [BarangController::class, 'index'])->name('barang.search');
Route::get('/download', [BarangController::class, 'download'])->name('barang.download');


