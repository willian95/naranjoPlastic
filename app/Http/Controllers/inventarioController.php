<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;
use App\User;
use Yajra\DataTables\Datatables;
use Auth;

class inventarioController extends Controller
{
    public function index()
    {
      if (Auth::user()->productoPublico) {
        return view('inventario.publico.index');
      }
      else {
        return view('layouts.permisos');
      }
    }

    public function apiInventarioPublico(Request $request)
    {
      $user=DB::table('productos')
                      ->join('detalleventa', 'productos.id', '=', 'detalleventa.idProducto')
                      ->join('venta','venta.id','=','detalleventa.folio')

                      ->select('productos.id as codi', 'productos.codigo','detalleventa.*' )
                      ->where('detalleventa.created_at', '>=',$request->fechaInicial)
                        ->where('detalleventa.created_at', '<=',$request->fechaFinal)
                        ->where('venta.idTipoVenta', '=','1')
                         ->get();

      return  Datatables::of($user) ->addColumn('fecha',function($user){
            return date('d-m-Y',strtotime($user->created_at));


    })->addColumn('cantidad',function($user){
          return  ($user->cantidad - ( $user->cantidad % 1));

        })
        ->addColumn('cantidadStock',function($user){
              return  ($user->cantidadStock - ( $user->cantidadStock % 1));

            })
            ->addColumn('cantidadDisponible',function($user){
                  return  ($user->cantidadDisponible - ( $user->cantidadDisponible % 1));

                })->make(true);
    }
}
