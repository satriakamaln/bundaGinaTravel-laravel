<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/travelindex', [App\Http\Controllers\TravelController::class, 'index'])->name('travel');
Route::post('/travelindex', [App\Http\Controllers\TravelController::class, 'create'])->name('travelcreate');

Route::get('/tourwisata', [App\Http\Controllers\TourWisataController::class, 'index'])->name('tourwisata');
Route::post('/tourwisata', [App\Http\Controllers\TourWisataController::class, 'create'])->name('tourwisatacreate');

Route::get('/rentalmobil', [App\Http\Controllers\RentalMobilController::class, 'index'])->name('rentalmobil');
Route::post('/rentalmobil', [App\Http\Controllers\RentalMobilController::class, 'create'])->name('rentalmobilcreate');

Route::get('/pemesanan', [App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan');

Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran');
