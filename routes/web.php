<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\DiskController;
use App\Http\Controllers\GpuController;
use App\Http\Controllers\MbController;
use App\Http\Controllers\PsuController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('welcome');
Route::get('/showCases', [CaseController::class, 'showCases'])->name('showCases');
Route::get('/showCpu', [CpuController::class, 'showCpu'])->name('showCpu');
Route::get('/showDisk', [DiskController::class, 'showDisk'])->name('showDisk');
Route::get('/showGpu', [GpuController::class, 'showGpu'])->name('showGpu');
Route::get('/showMb', [MbController::class, 'showMb'])->name('showMb');
Route::get('/showPsu', [PsuController::class, 'showPsu'])->name('showPsu');
Route::get('/showRam', [RamController::class, 'showRam'])->name('showRam');
Route::get('/orders', [OrderController::class, 'index'])->name('order');

Route::get('addcase-to-cart/{id}',[CaseController::class, 'addToCart1']);
Route::get('addcpu-to-cart/{id}',[CpuController::class, 'addToCart2']);
Route::get('adddisk-to-cart/{id}',[DiskController::class, 'addToCart3']);
Route::get('addgpu-to-cart/{id}',[GpuController::class, 'addToCart4']);
Route::get('addmb-to-cart/{id}',[MbController::class, 'addToCart5']);
Route::get('addpsu-to-cart/{id}',[PsuController::class, 'addToCart6']);
Route::get('addram-to-cart/{id}',[RamController::class, 'addToCart7']);

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/cart/total-value', [CartController::class, 'calculateTotalValue'])->name('cart.total-value');
Route::delete('/cart/remove/{category}/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('cart/confirmation', [CartController::class, 'confirmation'])->name('cart.confirmation');

Route::get('/addItems', [HomeController::class, 'addItems'])->name('addItems');
Route::post('/addCase', [CaseController::class, 'addCase'])->name('addCase');
Route::post('/addCpu', [CpuController::class, 'addCpu'])->name('addCpu');
Route::post('/addDisk', [DiskController::class, 'addDisk'])->name('addDisk');
Route::post('/addGpu', [GpuController::class, 'addGpu'])->name('addGpu');
Route::post('/addMb', [MbController::class, 'addMb'])->name('addMb');
Route::post('/addPsu', [PsuController::class, 'addPsu'])->name('addPsu');
Route::post('/addRam', [RamController::class, 'addRam'])->name('addRam');

//seller
Route::get('/orders2', [OrderController::class, 'sellerIndex'])->name('sellerIndex');
Route::get('/editItemsShow', [HomeController::class, 'editItemsShow'])->name('editItemsShow');

Route::get('/showCases2', [CaseController::class, 'showCases2'])->name('showCases2');
Route::get('/cases/edit/{id}', [CaseController::class, 'editCase'])->name('cases.edit');
Route::put('/cases/update/{id}', [CaseController::class, 'updateCase'])->name('cases.update');

Route::get('/showCpus2', [CpuController::class, 'showCpus2'])->name('showCpus2');
Route::get('/cpus/edit/{id}', [CpuController::class, 'editCpu'])->name('cpus.edit');
Route::put('/cpus/update/{id}', [CpuController::class, 'updateCpu'])->name('cpus.update');

Route::get('/showDisks2', [DiskController::class, 'showDisks2'])->name('showDisks2');
Route::get('/disks/edit/{id}', [DiskController::class, 'editDisk'])->name('disks.edit');
Route::put('/disks/update/{id}', [DiskController::class, 'updateDisk'])->name('disks.update');

Route::get('/showGpus2', [GpuController::class, 'showGpus2'])->name('showGpus2');
Route::get('/gpus/edit/{id}', [GpuController::class, 'editGpu'])->name('gpus.edit');
Route::put('/gpus/update/{id}', [GpuController::class, 'updateGpu'])->name('gpus.update');

Route::get('/showMbs2', [MbController::class, 'showMbs2'])->name('showMbs2');
Route::get('/mbs/edit/{id}', [MbController::class, 'editMb'])->name('mbs.edit');
Route::put('/mbs/update/{id}', [MbController::class, 'updateMb'])->name('mbs.update');

Route::get('/showPsus2', [PsuController::class, 'showPsus2'])->name('showPsus2');
Route::get('/psus/edit/{id}', [PsuController::class, 'editPsu'])->name('psus.edit');
Route::put('/psus/update/{id}', [PsuController::class, 'updatePsu'])->name('psus.update');

Route::get('/showRams2', [RamController::class, 'showRams2'])->name('showRams2');
Route::get('/rams/edit/{id}', [RamController::class, 'editRam'])->name('rams.edit');
Route::put('/rams/update/{id}', [RamController::class, 'updateRam'])->name('rams.update');

Route::delete('/cases/{id}', [CaseController::class, 'destroy'])->name('cases.delete');
Route::delete('/cpus/{id}', [CpuController::class, 'destroy'])->name('cpus.delete');
Route::delete('/disks/{id}', [DiskController::class, 'destroy'])->name('disks.delete');
Route::delete('/gpus/{id}', [GpuController::class, 'destroy'])->name('gpus.delete');
Route::delete('/mbs/{id}', [MbController::class, 'destroy'])->name('mbs.delete');
Route::delete('/psus/{id}', [PsuController::class, 'destroy'])->name('psus.delete');
Route::delete('/rams/{id}', [RamController::class, 'destroy'])->name('rams.delete');
