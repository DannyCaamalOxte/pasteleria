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

//vistas de los blade
Route::view('index','index');
Route::view('ventas','ventas');
Route::view('productos','productos');

//apis
Route::apiResource('apiProducto','ProductoController');
