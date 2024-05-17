<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContactController;
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




    Route::get('Dashboard', [DashboardController::class ,'index'])->name('Dashboard');


    Route::get('/Kategory', [KategoryController::class ,'index'])->name('kategory.index');
    Route::post('/Kategory/Tambah', [KategoryController::class , 'store'])->name('Kategory.Store');
    Route::PUT('/Kategory/Update/{id}', [KategoryController::class , 'update'])->name('Kategory.Update');
    Route::DELETE('/Kategori/Delete/{id}', [KategoryController::class , 'destroy'])->name('Kategory.Destroy');

    Route::get('/Produk', [ProdukController::class , 'index'])->name('Produk.index');
    Route::post('/Produk/Tambah', [ProdukController::class, 'store'])->name('Produk.Store');
    Route::PUT('/Produk/Update/{id}' , [ProdukController::class , 'update'])->name('Produk.update');
    Route::DELETE('/Produk/Delete/{id}', [ProdukController::class , 'destroy'])->name('Produk.Destroy');
    Route::get('/detail/{id}', [ProdukController::class , 'Detail'])->name('Detail.Produk');

    Route::get('Dashboard/About', [AboutController::class , 'About'])->name('About.Ds');
    Route::PUT('Dashboard/About/Update/{id}', [AboutController::class , 'update'])->name('About.Update');

    Route::get('/Dashboard/Contact', [ContactController::class , 'view'])->name('Contact.View');
    Route::PUT('/Dashboard/Contact/Update/{id}' , [ContactController::class , 'update'])->name('Contact.Update');

    Route::get('/orderan', [OrderanController::class , 'Index'])->name('Orderan.index');

    Route::get('/User', [UserController::class, 'index'])->name('User.index');

    Route::get('/history', [HistoryController::class, 'index'])->name('History.index');

    Route::get('/Profil', [ProfilController::class, 'index'])->name('Profil.index');


    Route::get('admin/About', [AboutController::class, 'index'])->name('About.index');

    Route::get('/Contact', [ContactController::class, 'index'])->name('Contact.index');

    Route::get('/Galeri', [GaleriController::class, 'index'])->name('Galeri.index');


    Route::get('/Login', [AuthController::class , 'view_login'])->name('login');
    Route::post('/Login/proses', [AuthController::class , 'login_proses'])->name('Login.Proses');

    route::get('logout', [AuthController::class , 'logout'])->name('logout');

    Route::get('/registrasi', [AuthController::class , 'view_registrasi'])->name('registrasi');
    Route::post('/registrasi/Tambah', [AuthController::class , 'registrasi_proses'])->name('Registrasi.Tambah');
