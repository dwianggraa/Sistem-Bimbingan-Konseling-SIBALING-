<?php

use App\Http\Controllers\ANBKController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KesehatanMentalController;
use App\Http\Controllers\KonselingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
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


Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/dashboard-admin', [DashboardController::class, 'dashboardAdmin']);

Route::get('/dashboard-siswa', [DashboardController::class, 'dashboardSiswa']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login-admin', [LoginController::class, 'index']);
Route::post('/login-admin', [LoginController::class, 'autentifikasi']);
Route::post('/login-siswa', [LoginController::class, 'AutentifikasiSiswa']);
Route::get('/login-siswa', [LoginController::class, 'loginsiswa']);


Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard-guest', [DashboardController::class, 'dashboardGuest']);
Route::get('/layanan-konseling', [DashboardController::class, 'konseling']);



// Route::group(['middleware' => ['auth', 'CekLevel: admin,guest']], function(){
    Route::get('/pelanggaran', [PelanggaranController::class, 'index']);
    Route::get('/perizinan', [PerizinanController::class, 'index']);
    Route::get('/pelanggaran-guest', [PelanggaranController::class, 'PelanggaranGuest']);
    Route::get('/perizinan-guest', [PerizinanController::class, 'PerizinanGuest']);
// });

// Route::group(['middleware' => ['auth', 'CekLevel:admin']], function(){

Route::get('/pelanggaran/create', [PelanggaranController::class, 'create']);
Route::post('/pelanggaran/simpan', [PelanggaranController::class, 'store']);
Route::get('/pelanggaran/edit/{id}', [PelanggaranController::class, 'edit']);
Route::post('/pelanggaran/update/{id}', [PelanggaranController::class, 'update']);
Route::get('/pelanggaran/delete/{id}', [PelanggaranController::class, 'destroy']);

Route::get('/perizinan/create', [PerizinanController::class, 'create']);
Route::post('/perizinan/simpan', [PerizinanController::class, 'store']);
Route::get('/perizinan/edit/{id}', [PerizinanController::class, 'edit']);
Route::post('/perizinan/update/{id}', [PerizinanController::class, 'update']);
Route::get('/perizinan/delete/{id}', [PerizinanController::class, 'destroy']);

Route::get('/beasiswa', [BeasiswaController::class, 'index']);
Route::get('/beasiswa/create', [BeasiswaController::class, 'create']);
Route::post('/beasiswa/simpan', [BeasiswaController::class, 'store']);
Route::get('/beasiswa/edit/{id}', [BeasiswaController::class, 'edit']);
Route::post('/beasiswa/update/{id}', [BeasiswaController::class, 'update']);
Route::get('/beasiswa/delete/{id}', [BeasiswaController::class, 'destroy']);

Route::get('/anbk', [ANBKController::class, 'index']);
Route::get('/anbk/create', [ANBKController::class, 'create']);
Route::post('/anbk/simpan', [ANBKController::class, 'store']);
Route::get('/anbk/edit/{id}', [ANBKController::class, 'edit']);
Route::post('/anbk/update/{id}', [ANBKController::class, 'update']);
Route::get('/anbk/delete/{id}', [ANBKController::class, 'destroy']);

Route::get('/kesehatan', [KesehatanMentalController::class, 'index']);
Route::get('/kesehatan/create', [KesehatanMentalController::class, 'create']);
Route::post('/kesehatan/simpan', [KesehatanMentalController::class, 'store']);
Route::get('/kesehatan/edit/{id}', [KesehatanMentalController::class, 'edit']);
Route::post('/kesehatan/update/{id}', [KesehatanMentalController::class, 'update']);
Route::get('/kesehatan/delete/{id}', [KesehatanMentalController::class, 'destroy']);

Route::get('/kesehatan', [KonselingController::class, 'index']);
Route::get('/kesehatan/create', [KonselingController::class, 'create']);
Route::post('/kesehatan/simpan', [KonselingController::class, 'store']);
Route::get('/kesehatan/edit/{id}', [KonselingController::class, 'edit']);
Route::post('/kesehatan/update/{id}', [KonselingController::class, 'update']);
Route::get('/kesehatan/delete/{id}', [KonselingController::class, 'destroy']);


// });




