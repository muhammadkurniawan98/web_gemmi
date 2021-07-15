<?php

use App\Http\Controllers\BukutamuController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonasiController;

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
    return view('gemmi');
});

Auth::routes();

Route::resource('donasi', DonasiController::class);
Route::resource('donatur', DonaturController::class);
Route::resource('tamu', BukutamuController::class);
Route::resource('user', UserController::class);



