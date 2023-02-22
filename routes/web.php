<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MainWisataController;
use App\Http\Controllers\MainTravelController;
use App\Http\Controllers\MainRentalController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('wisata', [MainWisataController::class, 'index'])->name('wisata');
Route::get('travel', [MainTravelController::class, 'index'])->name('travel');
Route::get('rental', [MainRentalController::class, 'index'])->name('rental');

Auth::routes();

Route::middleware(['pelanggan'])->group(function() {


});

Route::middleware(['admin'])->group(function() {

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('home', [HomeController::class, 'index'])->name('home');

        Route::resource('user', UserController::class);
        Route::resource('mobil', MobilController::class);
        Route::resource('travel', TravelController::class);
        Route::resource('wisata', WisataController::class)->except(['edit','destroy']);
        Route::prefix('wisata')->name('wisata.')->group(function () {
            Route::get('/{wisata}/edit', [WisataController::class, 'edit'])->name('edit');
            Route::delete('/{wisata}', [WisataController::class, 'destroy'])->name('destroy');
        });

    });
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        // Route::get('/travelindex', [App\Http\Controllers\TravelController::class, 'index'])->name('travel');
        // Route::post('/travelindex', [App\Http\Controllers\TravelController::class, 'create'])->name('travelcreate');
        // Route::put('/traveledit', [App\Http\Controllers\TravelController::class, 'edit'])->name('traveledit');
        // Route::put('/travelupdate', [App\Http\Controllers\TravelController::class, 'create'])->name('travelupdate');
        // Route::delete('/traveldelete/{id}', [App\Http\Controllers\TravelController::class, 'destroy'])->name('traveldelete');

        // Route::get('/tourwisata', [App\Http\Controllers\TourWisataController::class, 'index'])->name('tourwisata');
        // Route::post('/tourwisata', [App\Http\Controllers\TourWisataController::class, 'create'])->name('tourwisatacreate');
        // Route::put('/tourwisata', [App\Http\Controllers\TourWisataController::class, 'edit'])->name('tourwisataedit');

        // Route::get('/rentalmobil', [App\Http\Controllers\RentalMobilController::class, 'index'])->name('rentalmobil');
        // Route::post('/rentalmobil', [App\Http\Controllers\RentalMobilController::class, 'create'])->name('rentalmobilcreate');
        // Route::put('/rentalmobil', [App\Http\Controllers\RentalMobilController::class, 'edit'])->name('rentalmobiledit');
        // Route::delete('/rentalmobildelete/{id}', [App\Http\Controllers\RentalMobilController::class, 'destroy'])->name('rentalmobildelete');

        Route::get('/pemesanan', [App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan');

        Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran');
});
