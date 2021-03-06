<?php

use App\Http\Controllers\MahasiswaController;
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

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('cari',[MahasiswaController::class, 'search']);
Route::get('mahasiswa/nilai/{nim}',[MahasiswaController::class, 'nilai'])
    ->name('mahasiswa.nilai');
Route::get('mahasiswa/nilai/{nim}/cetak_pdf', [MahasiswaController::class,'cetak_pdf'])
    ->name('mahasiswa.cetak_pdf');
Route::get('/', function () {
    return view('welcome');
});
