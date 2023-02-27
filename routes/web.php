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

Auth::routes();

Route::get('mundo', function () {
    return 'LOOOOOOOOOOOOOOGIN';
});