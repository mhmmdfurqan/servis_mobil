<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PetugasController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/customer/', [CustomerController::class, 'index']);
Route::get('/customer/form/', [CustomerController::class, 'create']);
Route::post('/customer/store/', [CustomerController::class, 'store']);
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit']);
Route::put('/customer/{id}', [CustomerController::class, 'update']);
Route::delete('/customer/{id}', [CustomerController::class, 'destroy']);


Route::get('/jabatan/', [JabatanController::class, 'index']);
Route::get('/jabatan/form/', [JabatanController::class, 'create']);
Route::post('/jabatan/store/', [JabatanController::class, 'store']);
Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit']);
Route::put('/jabatan/{id}', [JabatanController::class, 'update']);
Route::delete('/jabatan/{id}', [JabatanController::class, 'destroy']);


Route::get('/petugas/', [PetugasController::class, 'index']);
Route::get('/petugas/form/', [PetugasController::class, 'create']);
Route::post('/petugas/store/', [PetugasController::class, 'store']);
Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit']);
Route::put('/petugas/{id}', [PetugasController::class, 'update']);