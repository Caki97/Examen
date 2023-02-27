<?php

use App\Http\Controllers\DatosController;
use App\Http\Controllers\Etiquetas;

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
// Route::view('/nuevo','nuevo')->name( new 'insertar');

Route::view('/formulario','formulario')->name('formulario');
Route::view('/insertarPost','insertarPost');
Route::post('/almacenarPost', [Etiquetas::class, 'almacenarPost'])->name('almacenarPost');
//Route::get('/insertarPost', [DatosController::class, 'insertarPost'])->name('insertarPost');
