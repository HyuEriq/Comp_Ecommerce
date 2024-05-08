<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\OrderanController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\DashboardController;


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

Route::get('/index', function () {
    return view('index');
});

Route::get('/Dashboard', [DashboardController::class ,'index'])->name('Dashboard');


Route::get('/Kategory', [KategoryController::class ,'index'])->name('kategory.index');

Route::get('/Produk', [ProdukController::class , 'index'])->name('Produk.index');

Route::get('/detail', [ProdukController::class , 'Detail'])->name('Detail.Produk');

Route::get('/orderan', [OrderanController::class , 'Index'])->name('Orderan.index');

Route::get('/User', [UserController::class, 'index'])->name('User.index');

Route::get('/history', [HistoryController::class, 'index'])->name('History.index');

Route::get('/Profil', [ProfilController::class, 'index'])->name('Profil.index');

