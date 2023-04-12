<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JaketController;
use App\Http\Controllers\PendakiController;
<<<<<<< HEAD

use App\Http\Controllers\SepatuController;

use App\Http\Controllers\SleepingBagController;

=======
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\SleepingBagController;
>>>>>>> 1a6d954a0e5490bad2011624b11bb79051f7a616
use App\Http\Controllers\TendaController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/anggotakelompok', [AnggotaController::class, 'index']);
Route::resource('/datatenda', TendaController::class);
Route::resource('/pendaki', PendakiController::class);
<<<<<<< HEAD

Route::resource('/sepatu', SepatuController::class);

Route::resource('/sb', SleepingBagController::class);

=======
Route::resource('/sb', SleepingBagController::class);
Route::resource('/jaket', JaketController::class);
Route::resource('/sepatu', SepatuController::class);
Route::resource('/sb', SleepingBagController::class);
>>>>>>> 1a6d954a0e5490bad2011624b11bb79051f7a616
