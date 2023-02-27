<?php

use App\Http\Controllers\DatosController;
use App\Http\Controllers\Etiquetas;
use App\Http\Controllers\PruebasController; 

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

Route::view('/login', 'login')->name('logininicio');
Route::post('/login-usuario', [PruebasController::class, 'login'])->name('login');


Route::view('/registrar', 'registrar')->name('registrarinicio');
Route::post('/registrar-usuario', [PruebasController::class, 'registro'])->name('registrar');