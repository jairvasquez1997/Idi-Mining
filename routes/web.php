<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::post('proceso_compra','ApiController@procesoCompra');

//Route::get('/', 'Auth\LoginController@showLoginForm')->name('administrador');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('cliente/login', 'web\AuthController@showLoginForm')->name('web.login');
Route::post('cliente/registrar', 'web\AuthController@register')->name('web.register');
Route::post('cliente/login', 'web\AuthController@login')->name('web.login');
Route::get('cliente/logout', 'web\AuthController@logout')->name('web.logout');




Route::group(['middleware' => 'auth'], function () {

    Route::get('cliente/pedidos', 'web\ClienteController@pedidos')->name('cliente.pedidos');
		Route::get('cliente/pedidos/get', 'web\ClienteController@getPedidos')->name('pedidos.cliente.pedido');
		Route::get('/cliente/zonas', 'admin\ZonasController@getData')->name('zona.list');
		Route::get('/cliente/zonas/{id}search', 'admin\ZonasController@searchZona')->name('zona.list.envio');
		Route::post('cliente/pedidos/store', 'admin\PedidosController@store')->name('cliente.pedidos.store');

    Route::get('home', 'HomeController@index')->name('home');

    Route::group(['middleware' => 'rol:admin'], function () {

        Route::post('admin/productow/nuevo','admin\ProductoController@nuevo')->name('productow.nuevo');
        Route::get('admin/productow/create','admin\ProductoController@create')->name('productow.create');
        Route::get('admin/producto/{producto}','admin\ProductoController@edit')->name('productoweb.edit');

        Route::resource('admin/actualizaciones', 'admin\ActualizacionController');
        Route::get('admin/actualizacion/delete/{actualizacion}', 'admin\ActualizacionController@delete');

        Route::resource('admin/categoria','admin\CategoriaController');
        Route::get('admin/categoria/delete/{categoria}', 'admin\CategoriaController@delete');
        Route::get('admin/categoriaw/getData', 'admin\CategoriaController@getData')->name('categorias.getData');
        Route::get('admin/categoria/traer/{categoriaid}', 'admin\CategoriaController@getDataSubCategoriaWeb')->name('subcategorias.get');

        Route::resource('admin/producto','admin\ProductoController');
        Route::get('admin/producto/delete/{producto}', 'admin\ProductoController@delete');

        Route::get('admin/costo_minimo','admin\CostoController@index')->name('admin.costo.minimo');
        Route::post('admin/costo_minimo/store','admin\CostoController@store')->name('admin.costo.store');

        Route::get('admin/zonas/view','admin\ZonasController@view')->name('zonas.view');
        Route::resource('admin/zonas','admin\ZonasController');

        Route::get('admin/empleados/view','admin\EmpleadoController@view')->name('empleados.view');
        Route::resource('admin/empleados','admin\EmpleadoController');

        Route::get('admin/repartidores', 'admin\EmpleadoController@getDataRepartidores')->name('repartidores.get');

        Route::get('admin/reporte/pedido','admin\ReporteController@reporte')->name('reporte.pedido');
        Route::get('admin/reporte/pedido/empleados/{fecha}','admin\ReporteController@filtrarReporteEmpleados')->name('reporte.pedido.empleados');
        Route::get('admin/reporte/pedido/menusales/{fecha}','admin\ReporteController@filtrarReporteMensual')->name('reporte.pedido.menusales');



        //Categoria--Web-----------------------------------------------------------
        Route::get('admin/categoriaweb','admin\CategoriaWebController@mostrar')->name('categoriaweb.mostrar');
        Route::get('admin/categoriaweb/create','admin\CategoriaWebController@create')->name('categoriaweb.create');
        Route::post('admin/categoriaweb/store','admin\CategoriaWebController@store')->name('categoriaweb.store');
        Route::get('admin/categoriaweb/edit/{categoriaweb}','admin\CategoriaWebController@edit')->name('categoriaweb.edit');
        Route::put('admin/categoriaweb/update/{categoriaweb}','admin\CategoriaWebController@update')->name('categoriaweb.update');
        Route::get('admin/categoriaweb/delete/{categoriaweb}', 'admin\CategoriaWebController@delete')->name('categoriaweb.delete');
        //------------------------------------------------------------------------


        //Producto--Web-----------------------------------------------------------
        Route::get('admin/productoweb','admin\ProductoWebController@mostrar')->name('productoweb.mostrar');
        Route::get('admin/productoweb/create','admin\ProductoWebController@create')->name('productoweb.create');
        Route::get('admin/productoweb/categoriaweb/get/{tipo}', 'admin\CategoriaWebController@getDataCategoriaWebVue')->name('categoriaswebvue.get');
        Route::post('admin/productoweb/store','admin\ProductoWebController@store')->name('productoweb.store');

        
        //------------------------------------------------------------------------

        //Sliders--Web-----------------------------------------------------------
        Route::get('admin/slidersweb','admin\SlidersWebController@mostrar')->name('slidersweb.mostrar');
        Route::get('admin/slidersweb/create','admin\SlidersWebController@create')->name('slidersweb.create');
        Route::get('admin/slidersweb/categoriaweb/get/{tipo}', 'admin\CategoriaController@getData');
        Route::post('admin/slidersweb/store','admin\SlidersWebController@store')->name('slidersweb.store');
        Route::get('admin/slidersweb/edit/{slidersweb}','admin\SlidersWebController@edit')->name('sliderweb.edit');
        Route::put('admin/slidersweb/update/{slidersweb}','admin\SlidersWebController@update')->name('slider.update');
        Route::get('admin/slidersweb/delete/{slidersweb}', 'admin\SlidersWebController@delete')->name('slider.delete');
        //------------------------------------------------------------------------

        //SubCategoria--Web-----------------------------------------------------------
        Route::get('admin/subcategoriaweb','admin\CategoriaController@mostrarSubCategoria')->name('subcategoriaweb.mostrar');
        Route::get('admin/subcategoriaweb/create','admin\CategoriaController@createSubCategoria')->name('subcategoriaweb.create');
        Route::get('admin/subcategoriaweb/categoriaweb/get/{tipo}', 'admin\CategoriaController@getData');
        Route::post('admin/subcategoriaweb/store','admin\CategoriaController@storeSubCategoria')->name('subcategoriaweb.store');
        Route::get('admin/productoweb/subcategoria/get/{categoria}', 'admin\CategoriaController@getDataSubCategoriaWeb');
        Route::get('admin/subcategoriaweb/edit/{subcategoriaweb}','admin\CategoriaController@editSubCategoria')->name('subcategoriaweb.edit');
        Route::put('admin/subcategoriaweb/update/{subcategoriaweb}','admin\CategoriaController@updateSubCategoria')->name('subcategoriaweb.update');
        Route::get('admin/subcategoriaweb/delete/{subcategoriaweb}', 'admin\CategoriaController@deleteSubCategoria')->name('subcategoriaweb.delete');

        //------------------------------------------------------------------------
        
        //Pagos--------------------------------------------------------------------
        Route::get('admin/pagos','admin\PagosController@viewPagos')->name('pagos.view');
        Route::get('admin/pagos/{tipo}','admin\PagosController@getPagos')->name('pagos.get');
        //------------------------------------------------------------------------


        //REPORTES CLIENTES
        Route::get('admin/reporte/clientes','admin\ReporteController@reporteCliente')->name('reporte.cliente');
        Route::post('admin/reporte/clientes','admin\ReporteController@getClientes')->name('cliente.get');

    });
    Route::get('admin/pedidos_pendientes','admin\PedidoController@viewPendiente')->name('pedidos_pendientes.view');
    Route::get('admin/pedidos_enviados','admin\PedidoController@viewEnviado')->name('pedidos_enviados.view');
    Route::get('admin/pedidos_entregados','admin\PedidoController@viewEntregado')->name('pedidos_entregados.view');

    Route::get('admin/pedidos/{estado}','admin\PedidoController@getPedidos')->name('pedidos.get');
    Route::get('admin/pedido/enviado/{pedido}/{repartidor}','admin\PedidoController@pedidoEnvio')->name('pedido.envio');
    Route::get('admin/pedido/entregado/{pedido}','admin\PedidoController@pedidoEntregado')->name('pedido.entregado');
});




Route::get('/productos', 'web\ProductoController@mostrarProductos')->name('productos.mostrar');
Route::get('productos/{producto}', 'web\ProductoController@productoDetalle')->name('productos');

Route::get('/carrito', 'web\CarritoController@mostrarCarrito')->name('carrito.mostrar');
Route::get('/carrito2', 'web\CarritoController@mostrarCarrito2')->name('carrito2.mostrar');
Route::post('/productos/carrito/agregar', 'web\CarritoController@add')->name('carrito.add');
Route::get('/productos/carrito/content', 'web\CarritoController@content')->name('cart.content');
Route::post('/productos/carrito/update', 'web\CarritoController@update')->name('cart.update');
Route::get('/productos/carrito/remove/{product}', 'web\CarritoController@remove')->name('cart.remove');


Route::get('/', function () {
    return view('web.index');
})->name('/');
Route::get('/empresa/{filter}', function () {
    return view('web.empresa');
})->name('empresa');
Route::get('/servicio/{filter}', function () {
    return view('web.servicio');
})->name('servicio');
Route::get('/innovacion/{filter}', function () {
    return view('web.innovacion');
})->name('innovacion');
Route::get('/innovacion/detalle/{filter}', function () {
    return view('web.innovacion_detalle');
})->name('innovacion.detalle');
Route::get('/escuela/{filter}', function () {
    return view('web.escuela');
})->name('escuela');

Route::get('actualidades', 'web\WebController@actualidades')->name('actualidades');

Route::get('/responsabilidad/{filter}', function () {
    return view('web.responsabilidad');
})->name('responsabilidad');
Route::get('contacto', function () {
    return view('web.contacto');
})->name('contacto');
Route::get('tienda', function () {
    return view('web.tienda');
})->name('tienda');
/*Route::get('detalle', function () {
    return view('web.detalle');
})->name('detalle');*/


Route::get('auth/{provider}', 'web\SocialAuthController@redirectToProvider')->name('social.auth');

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

