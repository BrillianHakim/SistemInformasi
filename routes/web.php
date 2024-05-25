<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DokterController;

use App\Http\Controllers\PasienController;

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

Route::get('dashboard', function () {
    return view('home');
});

// Definisi rute untuk menampilkan data dokter
Route::get('dokter', [DokterController::class, 'data']);

// Definisi rute untuk menampilkan form tambah dokter
Route::get('dokter/add', [DokterController::class, 'add']);

// Definisi rute untuk menangani proses penambahan dokter
Route::post('dokter', [DokterController::class, 'addProcces']);

// Definisi rute untuk menampilkan form edit dokter berdasarkan id
Route::get('dokter/edit/{id}', [DokterController::class, 'edit']);

// Definisi rute untuk menangani proses edit dokter berdasarkan id
Route::patch('dokter/{id}', [DokterController::class, 'editProcess'])->name('dokter.edit');

// Definisi rute untuk menangani penghapusan dokter berdasarkan id
Route::delete('dokter/{id}', [DokterController::class, 'delete']);