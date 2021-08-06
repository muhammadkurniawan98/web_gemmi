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

Route::group(['middleware' => 'auth'], function (){
    Route::get('/tamu-input-success', function (){
        return view('pages_user.buku_tamu.create-success');
    })->name('tamu.success');
    Route::get('/pendaftar-donatur-success', function (){
        return view('pages_user.donatur.create-success');
    })->name('donatur.success');
    Route::get('/pemberian-donasi-success', function (){
        return view('pages_user.donasi.create-success');
    })->name('donasi.success');

    Route::post('/tamu/cari', [BukutamuController::class, 'search'])->name('tamu.cari');
    Route::post('/donatur/cari', [DonaturController::class, 'search'])->name('donatur.cari');
    Route::post('/donasi/cari', [DonasiController::class, 'search'])->name('donasi.cari');
});

Route::get('/pdf', function (){
    $donasi = \App\Models\Donasi::firstOrFail();
    return view('laporan', $donasi);
});


