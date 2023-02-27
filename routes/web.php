<?php

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

Route::get('/admin', [AuthController::class, 'admin'])->name('admin')->middleware('admin');
Route::group(['middleware' => 'admin'], function(){

    Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
    Route::get('/adminOtraFuncionalidad', [AuthController::class, 'adminOtraFuncionalidad'])->name('adminOtraFuncionalidad');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

Route::get('/paciente', [AuthController::class, 'paciente'])->name('paciente')->middleware('paciente');
Route::group(['middleware' => 'paciente'], function(){

    Route::get('/paciente', [AuthController::class, 'paciente'])->name('paciente');
    //Route::get('/pacienteOtraFuncionalidad', [AuthController::class, 'pacienteOtraFuncionalidad'])->name('pacienteOtraFuncionalidad');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
