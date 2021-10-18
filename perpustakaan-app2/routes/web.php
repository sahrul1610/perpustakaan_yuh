<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;

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
//     return view('v_home');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/detail/{kode_buku}', [BukuController::class, 'detail']);
Route::get('/petugas', [PetugasController::class, 'index']);
//Route::view('/anggota', 'v_anggota');
//Route::view('/buku', 'v_buku');
//Route::view('/petugas', 'v_petugas');
