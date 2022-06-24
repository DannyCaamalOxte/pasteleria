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
Route::view('ventasc','ventasc');
Route::view('ventast','ventast');
Route::view('productos','productos');
Route::view('productosc','productosc');
Route::view('productost','productost');
Route::view('ventasHechas','ventasHechas');
Route::view('ventasHechasc','ventasHechasc');
Route::view('ventasHechast','ventasHechast');

//apis
Route::apiResource('apiProducto','ProductoController');
Route::apiResource('apiVenta','VentaController');
Route::apiResource('apiVentac','VentacController');
Route::apiResource('apiVentat','VentatController');
Route::apiResource('apiVentashechas','VentashechasController');
Route::apiResource('apiProductoc','ProductocController');
Route::apiResource('apiProductot','ProductotController');

//generar ticket
Route::get('ticket/{folio}',[
			'as'=>'ticket',
			'uses'=>'VentaController@ticket'
]);

