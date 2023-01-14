<?php

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

Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');

Route::post('kirim-pertanyaan', [App\Http\Controllers\ManajemenWebsite\PertanyaanController::class, 'sendMessage'])->name('sendMessage');
Route::post('kirim-laporan', [App\Http\Controllers\ManajemenWebsite\LaporanController::class, 'sendLaporan'])->name('sendLaporan');

Route::get('get-kelurahan', [App\Http\Controllers\ManajemenWebsite\LaporanController::class, 'kelurahanByKecamatan'])->name('kelurahanByKecamatan');

Route::get('login', fn() => redirect('dashboard'))->name('login');

Route::group(['middleware' => ['auth']], function () {
    // Manajemen Website
    Route::prefix('manajemen-website')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\BerandaController::class, 'dashboard'])->name('dashboard');
        // User
        Route::get('/user/ajaxDatatable', [App\Http\Controllers\ManajemenWebsite\UserController::class, 'ajaxDatatable'])->name('user.ajaxDatatable');
        Route::resource('user', 'App\Http\Controllers\ManajemenWebsite\UserController', ['names' => 'user']);

        // Pertanyaan
        Route::get('/pertanyaan/ajaxDatatable', [App\Http\Controllers\ManajemenWebsite\PertanyaanController::class, 'ajaxDatatable'])->name('pertanyaan.ajaxDatatable');
        Route::resource('pertanyaan', 'App\Http\Controllers\ManajemenWebsite\PertanyaanController', ['names' => 'pertanyaan']);

        // Kecamatan
        Route::get('/kecamatan/ajaxDatatable', [App\Http\Controllers\ManajemenWebsite\KecamatanController::class, 'ajaxDatatable'])->name('kecamatan.ajaxDatatable');
        Route::resource('kecamatan', 'App\Http\Controllers\ManajemenWebsite\KecamatanController', ['names' => 'kecamatan', 'only' => 'index']);

        // Kelurahan
        Route::get('/kelurahan/ajaxDatatable', [App\Http\Controllers\ManajemenWebsite\KelurahanController::class, 'ajaxDatatable'])->name('kelurahan.ajaxDatatable');
        Route::resource('kelurahan', 'App\Http\Controllers\ManajemenWebsite\KelurahanController', ['names' => 'kelurahan', 'only' => 'index']);

        // Laporan
        Route::get('/laporan/ajaxDatatable', [App\Http\Controllers\ManajemenWebsite\LaporanController::class, 'ajaxDatatable'])->name('laporan.ajaxDatatable');
        Route::resource('laporan', 'App\Http\Controllers\ManajemenWebsite\LaporanController', ['names' => 'laporan']);
    });
});

Auth::routes();