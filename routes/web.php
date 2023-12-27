<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PartnerController;

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

//user controller
Route::get('/user', [UserController::class, 'home'])->name('data.user');
Route::get('/jasa', [UserController::class, 'jasa'])->name('data.user');

//admin controller
Route::get('/admin', [AdminController::class, 'admin'])->name('data.admin');


//layout setting
  // Navbar Controller
Route::get('/navbar', [NavbarController::class, 'index'])->name('data.navbar');
Route::post('/simpan-logo', [NavbarController::class, 'simpan'])->name('data.simpan');

  // Footer Controller
Route::get('/footer', [FooterController::class, 'footer'])->name('data.footer');
      ///medsos
Route::post('/simpan-medsos', [FooterController::class, 'simpan'])->name('data.simpan');
      ///quotes
Route::post('/simpan-quotes', [FooterController::class, 'simpanQuotes'])->name('data.simpan');
     ///contalk
Route::post('/simpan-kontak', [FooterController::class, 'simpanKontak'])->name('data.simpan');


//Content
   //Slider
Route::get('/slider', [SliderController::class, 'index'])->name('data.slider');
Route::post('/simpan-slider', [SliderController::class, 'simpan'])->name('data.simpan');

    //Partner
 Route::get('/partner', [PartnerController::class, 'index'])->name('data.partner');
 Route::post('/simpan-partner', [PartnerController::class, 'simpan'])->name('data.simpan');
