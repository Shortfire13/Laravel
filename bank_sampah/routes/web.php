<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PegawaiController;

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/user',  [AdminController::class, 'user']);
Route::get('/adminform',  [AdminController::class, 'adminform']);
Route::get('/adminlist',  [AdminController::class, 'adminlist']);
Route::get('/transaksi',  [AdminController::class, 'transaksi']);
Route::get('/tambahpegawai',  [PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::get('/listpegawai',  [PegawaiController::class, 'index'])->name('listpegawai');
Route::post('/store',  [PegawaiController::class, 'store'])->name('store');
Route::get('/editpegawai/{id}',  [PegawaiController::class, 'editpegawai'])->name('editpegawai');