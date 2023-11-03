<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::resource('cargos', App\Http\Controllers\CargoController::class);
Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('provedores', App\Http\Controllers\ProvedoreController::class);
Route::resource('farmacias', App\Http\Controllers\FarmaciaController::class);
Route::resource('ventas', App\Http\Controllers\VentaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
