<?php

use Illuminate\Support\Facades\Route;
//para ellogin
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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
    return view('inicio');
})->middleware('auth');

//vistas de los blade
Route::view('inicio','inicio')->middleware('auth');
Route::view('ventas','ventas')->middleware('auth');
Route::view('ventasc','ventasc')->middleware('auth');
Route::view('ventast','ventast')->middleware('auth');
Route::view('productos','productos')->middleware('auth');
Route::view('productosc','productosc')->middleware('auth');
Route::view('productost','productost')->middleware('auth');
Route::view('ventasHechas','ventasHechas')->middleware('auth');
Route::view('ventasHechasc','ventasHechasc')->middleware('auth');
Route::view('ventasHechast','ventasHechast')->middleware('auth');
Route::view('pedidos','pedidos')->middleware('auth');

//apis
Route::apiResource('apiProducto','ProductoController')->middleware('auth');
Route::apiResource('apiVenta','VentaController')->middleware('auth');
Route::apiResource('apiVentac','VentacController')->middleware('auth');
Route::apiResource('apiVentat','VentatController')->middleware('auth');
Route::apiResource('apiVentashechas','VentashechasController')->middleware('auth');
Route::apiResource('apiProductoc','ProductocController')->middleware('auth');
Route::apiResource('apiProductot','ProductotController')->middleware('auth');
Route::apiResource('apiPedido','PedidoController')->middleware('auth');
Route::apiResource('apiDetalles','VentaController')->middleware('auth');

//generar ticket
Route::get('ticket/{folio}',[
			'as'=>'ticket',
			'uses'=>'VentaController@ticket'
])->middleware('auth');
//tekanto
Route::get('ticketT/{folio}',[
			'as'=>'ticket',
			'uses'=>'VentatController@tickett'
])->middleware('auth');
//para el login
Route::get('/login',[SessionsController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::get('/register',[RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/register',[RegisterController::class, 'store'])
->name('register.store');

Route::post('/login',[SessionsController::class, 'store'])
->name('login.store');

Route::get('/logout',[SessionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');