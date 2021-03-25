<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoria','ApiController@mostrarCategoria');
Route::get('producto/{categoria}','ApiController@mostrarProducto');
Route::post('cliente','ApiController@storeCliente');
Route::post('cliente/datos','ApiController@storeDatosCliente');
Route::get('cliente/{cliente}','ApiController@mostrarCliente');
Route::get('allProducto','ApiController@allProducto');
Route::get('costo/minimo','ApiController@costoMinimo');
Route::get('zonas','ApiController@zonas');
Route::post('store/pedido','ApiController@storePedido');
Route::get('factura/{cliente}','ApiController@getFactura');
Route::post('store/factura','ApiController@storeFactura');
Route::post('update/cliente','ApiController@updateCliente');
Route::post('update/pedido','ApiController@updatePedido');

Route::get('pedido-detalle/{id}','ApiController@mostrarDetalle');
Route::get('pedido/{persona_id}','ApiController@mostrarPedido');
Route::post('usuario','ApiController@mostrarUsuario');
Route::get('zona','ApiController@mostrarZonas');
Route::get('selecciona','ApiController@seleccionaCliente');
Route::get('listar-productos','ApiController@listarProductos');
Route::get('actualizar-estado-pedido/{id}','ApiController@editarEstadoPedido');
Route::get('user/{username}','ApiController@users');
Route::get('back/{id}','ApiController@atras');
Route::get('boleta','ApiController@boleta');
Route::get('factura','ApiController@factura');
Route::get('pedidos-admin','ApiController@pedidosAdmin');
Route::post('equipo','ApiController@addEquipo');
Route::get('/notificacion','ApiController@notificacion')->name('notificacion');

Route::get('pedidos_admin','ApiController@listarPedidos');
Route::get('cliente_admin/{cliente_id}','ApiController@buscarCliente');
Route::get('zona_admin/{zona_id}','ApiController@buscarZona');
Route::get('producto_admin/{producto_id}','ApiController@buscaProductoAdmin');
