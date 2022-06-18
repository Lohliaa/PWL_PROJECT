<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ServiceController;
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

Route::get('/homeadmin', function () {
    return view('master');
});

Auth::routes();
// Route::get('/login', LoginController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/barang', BarangController::class);
Route::resource('/customer', CustomerController::class);
Route::resource('/pegawai', PegawaiController::class);


//HALAMAN USER
Route::get('/homeuser', [HomeUserController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/feature', [FeatureController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);