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
use App\Http\Controllers\PesanController;
use App\Http\Controllers\JenisServiceController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Models\JenisService;

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

//
Route::resource('/jenis_service', JenisServiceController::class);
Route::resource('/pesan', PesanController::class);
Route::get('/pesan/{id}', [PesanController::class, 'indexJenisService']);
Route::post('pesan/{id}', [PesanController::class, 'pesan']);
Route::get('check-out', [PesanController::class, 'check_out']);
Route::delete('check-out/{id}', [PesanController::class, 'delete']);
Route::get('konfirmasi-check-out', [PesanController::class, 'konfirmasi']);

Route::get('history', [HistoryController::class, 'indexhistory']);
Route::get('history/{id}', [HistoryController::class, 'detail']);
Route::get('/history/{id}/cetak_pdf', [HistoryController::class, 'cetak_pdf']);
Route::get('/history/{id}/cetak_pdf', [HistoryController::class, 'cetak_pdf'])->name('cetak_pdf');
Route::get('profile', [ProfileController::class, 'index']);
Route::post('profile', [ProfileController::class, 'update']);

Route::resource('admin2', TransaksiController::class);