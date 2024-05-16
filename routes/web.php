<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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

Route::get('/', [KaryawanController::class, 'index']);
Route::get('/insert', [KaryawanController::class, 'insert']);
Route::post('/create', [KaryawanController::class, 'create']);
Route::get('/edit/{karyawan:id}', [KaryawanController::class, 'edit']);
Route::post('/update', [KaryawanController::class, 'update']);
Route::get('/delete/{karyawan:id}', [KaryawanController::class, 'delete']);
