<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FaqController;

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
Route::get('/hapus-medsos/{id}', [FooterController::class, 'hapusMedsos'])->name('hapus.medsos');
      ///quotes
Route::post('/simpan-quotes', [FooterController::class, 'simpanQuotes'])->name('data.simpan');
     ///contak
Route::post('/simpan-kontak', [FooterController::class, 'simpanKontak'])->name('data.simpan');
Route::get('/hapus-kontak/{id}', [FooterController::class, 'hapusKontak'])->name('hapus.kontak');


//Content

      //Slider
Route::get('/slider', [SliderController::class, 'index'])->name('data.slider');
Route::post('/simpan-slider', [SliderController::class, 'simpan'])->name('data.simpan');
Route::get('/hapus-slider/{id}', [SliderController::class, 'hapusSlider'])->name('hapus.slider');
Route::get('/slider-ubah{id}', [SliderController::class, 'ubah'])->name('slider.ubah');
Route::get('/tes-ubah', [SliderController::class, 'ubahTes'])->name('slider.ubahTest');
Route::get('/form', [SliderController::class, 'showForm'])->name('form.show');
Route::post('/update-slider/{id}', [SliderController::class, 'update'])->name('update.slider');
Route::post('/edit-slider/{id}', [SliderController::class, 'edit'])->name('edit.slider');

      //Partner
 Route::get('/partner', [PartnerController::class, 'index'])->name('data.partner');
 Route::post('/simpan-partner', [PartnerController::class, 'simpan'])->name('data.simpan');
 Route::get('/hapus-partner/{id}', [PartnerController::class, 'hapusPartner'])->name('hapus.partner');
//  Route::post('/ubah-partner{id}', [PartnerController::class, 'ubah'])->name('partner.ubah');
 Route::post('/edit-partner/{id}', [PartnerController::class, 'edit'])->name('edit.partner');
     //FAQ
 Route::get('/faq', [FaqController::class, 'index'])->name('data.faq');
 Route::post('/simpan-faq', [FaqController::class, 'simpanPertanyaan'])->name('data.simpanPertanyaan');
 Route::post('/simpan-jawaban', [FaqController::class, 'simpanJawaban'])->name('simpan.jawaban');
