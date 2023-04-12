<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendakiController;
<<<<<<< HEAD
use App\Http\Controllers\SepatuController;
=======
use App\Http\Controllers\SleepingBagController;
>>>>>>> e6033388240a63069e929ff7ba494c71209da645
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
=======
Route::resource('/sb', SleepingBagController::class);
>>>>>>> e6033388240a63069e929ff7ba494c71209da645
