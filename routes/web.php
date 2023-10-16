<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\DiskController;
use App\Http\Controllers\GpuController;
use App\Http\Controllers\MbController;
use App\Http\Controllers\PsuController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\CartController;

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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/showCases', [CaseController::class, 'showCases'])->name('showCases');
Route::get('/showCpu', [CpuController::class, 'showCpu'])->name('showCpu');
Route::get('/showDisk', [DiskController::class, 'showDisk'])->name('showDisk');
Route::get('/showGpu', [GpuController::class, 'showGpu'])->name('showGpu');
Route::get('/showMb', [MbController::class, 'showMb'])->name('showMb');
Route::get('/showPsu', [PsuController::class, 'showPsu'])->name('showPsu');
Route::get('/showRam', [RamController::class, 'showRam'])->name('showRam');
Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('add-to-cart/{id}',[CaseController::class, 'addToCart']);
// Route::get('add-cpu-to-cart/{id}',[CpuController::class, 'addToCart']);
// Route::get('add-to-cart/{id}',[DiskController::class, 'addToCart']);
// Route::get('add-to-cart/{id}',[GpuController::class, 'addToCart']);
// Route::get('add-to-cart/{id}',[MbController::class, 'addToCart']);
// Route::get('add-to-cart/{id}',[RamController::class, 'addToCart']);
// Route::get('add-to-cart/{id}',[PsuController::class, 'addToCart']);