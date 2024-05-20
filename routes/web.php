<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\OrderanController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderUserController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\CardShoppingCOntroller;
use App\Http\Controllers\auth\RegistrasiController;
use App\Http\Controllers\HistoryOrderUserController;


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

//Route::get('/index', function () {
 //   return view('index');
//});

Route::get('index', [HomeController::class, 'index'])->name('Home.View');


Route::middleware('guest')->group(function () {
    //Login
    Route::get('/Login', [LoginController::class , 'index'])->name('login');
    Route::post('/Login/proses', [LoginController::class , 'login_proses'])->name('Login.Proses');

    //Registrasi
    Route::get('/registrasi', [RegistrasiController::class , 'index'])->name('registrasi');
    Route::post('/registrasi/Tambah', [RegistrasiController::class , 'registrasi_proses'])->name('Registrasi.Tambah');

    Route::get('/About', [AboutController::class, 'index'])->name('About.index');

    Route::get('/Contact', [ContactController::class, 'index'])->name('Contact.index');

    Route::get('/Galeri', [GaleriController::class, 'index'])->name('Galeri.index');


});

Route::middleware('auth')->group(function () {
    route::post('logout', [LoginController::class , 'logout'])->name('logout');
    Route::get('Dashboard', [DashboardController::class ,'index'])->name('Dashboard');
    Route::get('/Historyorder/user', [HistoryOrderUserController::class , 'index'])->name('History.Order');
    Route::get('/OrderUser', [OrderUserController::class, 'index'])->name('Order.User');
    Route::get('/CardShopping' , [CardShoppingCOntroller::class , 'index'])->name('Card.View');
});


Route::middleware('admin')->group(function () {

    //Kategori
    Route::get('/Kategory', [KategoryController::class ,'index'])->name('kategory.index');
    Route::post('/Kategory/Tambah', [KategoryController::class , 'store'])->name('Kategory.Store');
    Route::PUT('/Kategory/Update/{id}', [KategoryController::class , 'update'])->name('Kategory.Update');
    Route::DELETE('/Kategori/Delete/{id}', [KategoryController::class , 'destroy'])->name('Kategory.Destroy');

    //Produk
    Route::get('/Produk', [ProdukController::class , 'index'])->name('Produk.index');
    Route::post('/Produk/Tambah', [ProdukController::class, 'store'])->name('Produk.Store');
    Route::PUT('/Produk/Update/{id}' , [ProdukController::class , 'update'])->name('Produk.update');
    Route::DELETE('/Produk/Delete/{id}', [ProdukController::class , 'destroy'])->name('Produk.Destroy');
    Route::get('/detail/{id}', [ProdukController::class , 'Detail'])->name('Detail.Produk');

    //About
    Route::get('Dashboard/About', [AboutController::class , 'About'])->name('About.Ds');
    Route::PUT('Dashboard/About/Update/{id}', [AboutController::class , 'update'])->name('About.Update');

    //Contact
    Route::get('/Dashboard/Contact', [ContactController::class , 'view'])->name('Contact.View');
    Route::PUT('/Dashboard/Contact/Update/{id}' , [ContactController::class , 'update'])->name('Contact.Update');

    Route::get('/orderan', [OrderanController::class , 'Index'])->name('Orderan.index');

    //User
    Route::get('/User', [UserController::class, 'index'])->name('User.index');
    Route::POST('/User/Tambah', [UserController::class , 'store'])->name('User.Store');
    Route::DELETE('/User/Delete/{id}', [UserController::class, 'destroy'])->name('User.Destroy');
    Route::PUT('/User/Update/{id}', [UserController::class, 'update'])->name('User.Update');

    Route::get('/history', [HistoryController::class, 'index'])->name('History.index');

    //Slider
    Route::get('/Slider', [SliderController::class, 'view'])->name('Slider.View');
    Route::post('/Slider/Tambah', [SliderController::class , 'store'])->name('Slider.Store');
    Route::DELETE('/Slider/Delete/{id}' , [SliderController::class , 'destroy'])->name('Slider.Destroy');
    Route::PUT('/Slider/Update/{id}', [SliderController::class , 'update'])->name('Slider.Update');

    Route::get('/Profil', [ProfilController::class, 'index'])->name('Profil.index');

});










