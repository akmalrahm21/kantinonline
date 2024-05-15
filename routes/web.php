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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\KantinController;

Route::get('/kantins', [KantinController::class, 'index'])->name('kantins.index');
Route::get('/kantins/create', [KantinController::class, 'create'])->name('kantins.create');
Route::post('/kantins', [KantinController::class, 'store'])->name('kantins.store');
Route::get('/kantins/{kantin}', [KantinController::class, 'show'])->name('kantins.show');
Route::get('/kantins/{kantin}/edit', [KantinController::class, 'edit'])->name('kantins.edit');
Route::put('/kantins/{kantin}', [KantinController::class, 'update'])->name('kantins.update');
Route::delete('/kantins/{kantin}', [KantinController::class, 'destroy'])->name('kantins.destroy');
Route::get('/pembeli', [KantinController::class, 'indexPembeli'])->name('pembeli.index');


use App\Http\Controllers\SupplierController;

Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index');
Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
Route::post('/suppliers', [SupplierController::class, 'store'])->name('suppliers.store');
Route::get('/suppliers/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show');
Route::get('/suppliers/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
Route::put('/suppliers/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');
Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');

use App\Http\Controllers\PembeliController;

Route::get('/pembeli', [PembeliController::class, 'index'])->name('pembeli.index');






