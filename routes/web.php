<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TendaController;
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



Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index']);
    Route::get('/anggotakelompok', [AnggotaController::class, 'index']);
    Route::resource('/datatenda', TendaController::class);
    // Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('logout', [LoginController::class, 'logout']);
