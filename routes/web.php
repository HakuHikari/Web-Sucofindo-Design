<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/profil',[HomeController::class,'profil'])->name('profil');
Route::get('/struktur',[HomeController::class,'struktur'])->name('struktur');
Route::get('/artilogo',[HomeController::class,'artilogo'])->name('artilogo');
Route::get('/layanan',[HomeController::class,'layanan'])->name('layanan');
Route::get('/galeri',[HomeController::class,'galeri'])->name('galeri');


