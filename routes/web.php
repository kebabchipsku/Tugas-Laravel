<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa/create', [SiswaController::class, 'create']);

Route::get('/siswa', [SiswaController::class, 'index']);

Route::get('/siswa/{id_siswa}', [SiswaController::class, 'show']);

Route::post('/siswa', [SiswaController::class, 'store']);

Route::get('/siswa/{id_siswa}/edit', [SiswaController::class, 'edit']);

Route::put('/siswa/{id_siswa}', [SiswaController::class, 'update']);

Route::delete('/siswa/{id_siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
