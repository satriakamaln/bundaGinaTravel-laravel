<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VerifController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\MainOrderController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MainRentalController;
use App\Http\Controllers\MainTravelController;
use App\Http\Controllers\MainWisataController;


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

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('wisata', [MainWisataController::class, 'index'])->name('wisata');
Route::get('wisata/{{wisata}}/show', [MainWisataController::class, 'show'])->name('wisatashow');
Route::get('travel', [MainTravelController::class, 'index'])->name('travel');
Route::get('rental', [MainRentalController::class, 'index'])->name('rental');

Auth::routes();

Route::middleware(['pelanggan'])->group(function() {
    Route::post('wisata', [MainWisataController::class, 'store'])->name('wisatastore');
    Route::post('travel', [MainTravelController::class, 'store'])->name('travelstore');
    Route::post('rental', [MainRentalController::class, 'store'])->name('rentalstore');

    Route::prefix('customer')->name('customer.')->group(function () {
        Route::resource('order', MainOrderController::class);
    });
});

Route::middleware(['admin'])->group(function() {

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('home', [HomeController::class, 'index'])->name('home');

        Route::resource('user', UserController::class);
        Route::resource('mobil', MobilController::class);
        Route::resource('travel', TravelController::class);
        Route::resource('order', OrderController::class);
        Route::resource('verif', VerifController::class);
        Route::resource('wisata', WisataController::class)->except(['edit','destroy']);
        Route::prefix('wisata')->name('wisata.')->group(function () {
            Route::get('/{wisata}/edit', [WisataController::class, 'edit'])->name('edit');
            Route::delete('/{wisata}', [WisataController::class, 'destroy'])->name('destroy');
        });
        Route::name('report.')->prefix('laporan')->group(function () {
            Route::get('/userall', [ReportController::class, 'userall'])->name('userall');
            Route::get('/wisata', [ReportController::class, 'wisataall'])->name('wisataall');
            Route::get('/mobil', [ReportController::class, 'mobilall'])->name('mobilall');
            Route::get('/travel', [ReportController::class, 'travelall'])->name('travelall');
            Route::get('/order', [ReportController::class, 'orderall'])->name('orderall');
            Route::get('/order/{{id}}', [ReportController::class, 'orderdate'])->name('orderdate');
        });

    });
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('/pemesanan', [App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan');

        Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran');
});
