<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
