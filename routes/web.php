<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
