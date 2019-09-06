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


Route::get('/', function () {
    return view('welcome');
});

Route::get('autoCorreo','mailController@autoCorreo');
Route::get('estados/{pais_id}', 'EstadosController@obtenerId');

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('membresia', function () {
        return view('admin.membresia.index');
    });
    Route::get('usoMembresia', function () {
        return view('servicios.membresia.index');
    });
    Route::post('ajaxImageUpload','UserController@ajaxImageUpload');
    Route::get('buscarUser','UserController@buscarUser');
    Route::get('deleteUser','UserController@deleteUser');
    Route::post('updateUser','UserController@updateUser');
    Route::post('registerUser','UserController@registerUser');
    Route::get('apiUser','UserController@apiUser');
    Route::get('user','UserController@index');

    Route::get('cliente','ClienteController@index')->name('cliente');
    Route::get('editarCliente','ClienteController@editarCliente');
    Route::get('actualizaPaciente','ClienteController@actualizaPaciente');
    Route::get('eliminaPaciente','ClienteController@eliminaPaciente');
    Route::get('editarUser', 'ClienteController@editarUser');
    Route::get('buscarCliente', 'ClienteController@muestraCliente');
    Route::post('guardarCliente','ClienteController@agregaCliente');
    Route::get('clientePdf/{id}', 'ClienteController@pdf');

    //Productos
    Route::get('CargaProductos','ProductosController@CargaProductos');
    Route::get('infoProductos','ProductosController@infoProductos');
    Route::post('insertaProducto','ProductosController@insertaProducto');
    Route::post('insertarInventario','ProductosController@insertarInventario');
    Route::delete('EliminarProductos','ProductosController@EliminarProductos');
    Route::get('buscaProducto','ProductosController@buscaProducto');

    //Productos Stock
    Route::get('stock','ProductosController@cargaStock');
    Route::get('cargaProductosStock','ProductosController@cargaProductosStock');
    Route::get('buscaStockProducto','ProductosController@buscaStockProducto');
    Route::post('actualizaInventario','ProductosController@actualizaInventario');
    Route::post('actualizaProductos','ProductosController@actualizaProductos');
    Route::get('ventaProducto','ProductosController@ventaProducto');

    //venta Productos
    Route::get('ventaProducto','ventaController@ventaProducto');
    Route::get('listaProductos','ventaController@listaProductos');
    Route::get('listaClientes','ventaController@listaClientes');
    //Route::get('buscaProducto','ventaController@buscaProducto');
    Route::post('insertarVenta','ventaController@insertarVenta');
    Route::post('insertarDetalle','ventaController@insertarDetalle');
    Route::post('actualizaExistencia','ventaController@actualizaExistencia');
    Route::post('insertaPagos','ventaController@insertaPagos');

    //Abono Productos
    Route::get('abonoVentas','abonoControler@abonoVentas');
    Route::get('abonoVentas2','abonoControler@abonoVentas2');
    Route::get('cargaVentas','abonoControler@cargaVentas');
    Route::post('actualizaVentas','abonoControler@actualizaVentas');

    //Tipo de cambio
    Route::get('tipoCambio','tipoCambioController@index');
    Route::get('apiTipoCambio','tipoCambioController@apiTipoCambio');
    Route::get('registerTipoCambio','tipoCambioController@registerTipoCambio');


    //inventario Publico
    Route::get('inventarioPublico','inventarioController@index');
    Route::get('apiInventarioPublico','inventarioController@apiInventarioPublico');

    //inventario Servicio
    Route::get('inventarioServicio','inventarioServicioController@index');
    Route::get('inventarioServicioTipo','inventarioServicioController@inventarioServicioTipo');
    Route::get('apiInventarioServicio','inventarioServicioController@apiInventarioServicio');

    	//venta servicio
        Route::get('ventaServicio', 'VentaServicioController@ventaServicio');
        Route::get('listaServicio', 'VentaServicioController@listaServicio');
        Route::get('buscaServicio', 'VentaServicioController@buscaServicio');
        Route::post('insertarInventarioServicio','ProductosController@insertarInventarioServicio');// --> Nuevo cambio <--
        Route::get('buscaProductosServicio', 'VentaServicioController@buscaProductosServicio'); // --> Nuevo cambio <--
        Route::get('listaTerapeuta', 'VentaServicioController@listaTerapeuta'); // --> Nuevo cambio <--
        Route::post('actualizaProductosServicio','ProductosController@actualizaProductosServicio');
        Route::post('insertarDetalleVentaServicio','VentaServicioController@insertarDetalleVentaServicio');


    //Reportes
    Route::get('ventaCaj','reportesController@ventaCaj');
    Route::get('ventaGen','reportesController@ventaGen');
    Route::get('ventasGen','reportesController@ventasGen');
    Route::get('rendimientoTera','reportesController@reporteTerapeuta');

    Route::get('apiReporteTerapeuta','reportesController@apiReporteTerapeuta');
    Route::get('apiReporteGeneral','reportesController@apiReporteGeneral');
    Route::get('apiReporteVenta','reportesController@apiReporteVenta');
    Route::get('apiReporteGeneralVenta','reportesController@apiReporteGeneralVenta');

    //servicios
    Route::get('servicioAlta','serviciosAltaController@index');
    Route::post('servicioCrear','serviciosAltaController@servicioCrear');
    Route::post('servicioActualizar','serviciosAltaController@servicioActualizar');
    Route::post('servicioDetalle','serviciosAltaController@servicioDetalle');
    Route::get('deleteServicio','serviciosAltaController@deleteServicio');
    Route::get('verServicio','serviciosAltaController@verServicio');
    Route::get('apiServicio','serviciosAltaController@apiServicio');
    //Membresias
    Route::get('showProductos','membresiasController@showProductos');
    Route::get('showServicios','membresiasController@showServicios');
    Route::get('buscarProducto','membresiasController@buscarProducto');
    Route::get('buscarServicio','membresiasController@buscarServicio');
    Route::get('crearMembresia','membresiasController@crearMembresia');
    Route::get('detalleMembresia','membresiasController@detalleMembresia');
    Route::get('listaMembresias','membresiasController@listaMembresias');
    Route::get('eliminaMembresia','membresiasController@eliminaMembresia');
    Route::get('verMembresia','membresiasController@verMembresia');
    Route::get('actualizaMembresia','membresiasController@actualizaMembresia');

    //notas
    Route::get('ticket/{id}','ticketController@ticket');
    Route::get('ticketVenta/{id}','ticketController@ticketVenta');
    Route::get('ticketServicio/{id}','ticketController@ticketServicio');
    Route::get('ticketServicioVenta/{id}','ticketController@ticketServicioVenta');

    //agendaDiaria

    Route::get('agendaDiaria','agendaController@index');
    Route::get('addConsultorio','agendaController@addConsultorio');
    Route::get('buscarServicioAgenda','agendaController@buscarServicioAgenda');
    Route::get('buscarConsultorio','agendaController@buscarConsultorio');
    Route::get('buscarTeraAgenda','agendaController@buscarTeraAgenda');
    Route::get('buscarAgenda','agendaController@buscarAgenda');
    Route::post('agregarCita','agendaController@agregarCita');
    Route::get('buscarAgendaFecha','agendaController@buscarAgendaFecha');
    Route::get('BuscarEspacio','agendaController@BuscarEspacio');
    Route::get('actualizarCita','agendaController@actualizarCita');
    Route::get('deleteCita','agendaController@deleteCita');
    Route::get('buscarHoraDispo','agendaController@buscarHoraDispo');
    Route::get('deleteCita','agendaController@deleteCita');
    Route::get('sendEmail','mailController@sendEmail');
    Route::get('addServicio','agendaController@addServicio');
    Route::get('deleteConsultorio','agendaController@deleteConsultorio');

    Route::post('insertarMovInventario','movStockController@insertarMovInventario');
    Route::get('historicoMovStock','movStockController@historicoMovStock');
    Route::get('calendario','calendarioController@index');

    Route::get('apiReporteCaja','reportesController@apiReporteCaja');

    Route::post('movimiento','cajaController@movimiento');

    //Cambios para enlazar cliente con menbresia
    Route::get('listaMembresia','ClienteController@listaMembresia');
    Route::post('agregarMembresiaCliente','ClienteController@agregarMembresiaCliente');

    Route::get('buscaMembresiaCliente', 'VentaServicioController@buscaMembresiaCliente');
    Route::get('movimientoCaja','cajaController@movimientoCaja');
    Route::get('inicioCaja','cajaController@inicioCaja');


    Route::get('buscaMembresiaCliente', 'VentaServicioController@buscaMembresiaCliente');
    Route::post('actualizaCantidadMembresia','VentaServicioController@actualizaCantidadMembresia');
    Route::delete('eliminarProductosMembresia','VentaServicioController@eliminarProductosMembresia');


});
