<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;
use App\User;
use Yajra\DataTables\Datatables;
use Auth;
use App\Venta;
use App\DetalleVentaServicio;

class inventarioServicioController extends Controller
{
  public function index()
  {
    if (Auth::user()->productoServ) {


    return view('inventario.servicio.index');
    }
    else {
      return view('layouts.permisos');
    }
  }

  public function inventarioServicioTipo()
  {
    $Servicios=DB::table('productos')
                    ->join('detalleventa', 'productos.id', '=', 'detalleventa.idProducto')
                    ->join('venta','venta.id','=','detalleventa.folio')
                    ->select('detalleventa.idProducto','detalleventa.nombre' )
                      ->where('venta.idTipoVenta', '=','2')->get();
    $Servicios->toArray();

    return response()->json(['responseData' => $Servicios]);
  }

  public function apiInventarioServicio(Request $request)
  {
    $user = DetalleVentaServicio::select(
      'detalleventaservicio.id',
      'detalleventaservicio.stock',
      'detalleventaservicio.servicioCantidad',
      'detalleventaservicio.disponible',
      'detalleventaservicio.created_at',
      'productos.descripcion',
      'clientes.name',
      'clientes.apePat',
      'clientes.apemat',
      'users.name as tName',
      'users.apePat as tApePat',
      'users.apeMat as tApeMat')
      ->join('clientes','clientes.id','=','detalleventaservicio.idCliente')
      ->join('users','users.id','=','detalleventaservicio.idTerapeuta')
      ->join('productos','productos.id','=','detalleventaservicio.idProducto')
      ->where('detalleventaservicio.created_at', '>=',$request->fechaInicial)
      ->where('detalleventaservicio.created_at', '<=',$request->fechaFinal)
      ->where('detalleventaservicio.idTipoServicio','=',$request->idTipoServicio)	
      ->get();
        

        return  Datatables::of($user) ->addColumn('fecha',function($user){
              return date('d-m-Y',strtotime($user->created_at));


      })->addColumn('disponible',function($user){
            return  ($user->disponible - ( $user->disponible % 1));

          })->addColumn('Terapeuta',function($user){
                return  $user->tName.'  '.$user->tApePat.'  '.$user->tApeMat;

              })
              ->addColumn('cliente',function($user){
                    return  $user->name.'  '.$user->apePat.'  '.$user->apeMat;

                  })
          ->addColumn('stock',function($user){
                return  ($user->stock - ( $user->stock % 1));

              })
              ->addColumn('servicioCantidad',function($user){
                    return  ($user->servicioCantidad - ( $user->servicioCantidad % 1));

                  })->make(true);
      }

}
