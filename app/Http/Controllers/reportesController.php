<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Yajra\DataTables\Datatables;
use Validator;
use App\Foto;
use Auth;
use App\InicioCaja;

class reportesController extends Controller
{
    
    public function ventasGen()
    {
      if (Auth::user()->ventaGeneral) {
        return view('reportes.reporteVenta.index');
      }
      else {
        return view('layouts.permisos');
      }
    }
    
    public function ventaGen()
    {
      if (Auth::user()->ventaGeneral) {
        return view('reportes.reporteGeneral.index');
      }
      else {
        return view('layouts.permisos');
      }
    }

    public function ventaCaj()
    {
      $Empleados=User::where('venderProd','=', 1)->orwhere('venderServ','=', 1)->get();
      return view('reportes.reporteCajero.index',['Empleados'=>$Empleados] );
    }

    public function reporteTerapeuta()
    {
      if (Auth::user()->rendimientoRepor) {
        $Empleados=User::where('venderProd','=', 1)->orwhere('venderServ','=', 1)->get();
        return view('reportes.reporteTerapeuta.index',['Empleados'=>$Empleados] );
      }
      else {
        return view('layouts.permisos');
      }
    }

   public function apiReporteVenta(Request $request)
    {
      if($request->id){

      $user=DB::table('venta')
            ->join('users', 'venta.idVendedor', '=', 'users.id') 
            ->rightJoin('pagos','pagos.folio','=','venta.id')
            ->join('clientes','clientes.id','=','venta.idCliente')
            ->select( 'users.name','users.apePat','users.apeMat ','clientes.name as nameC','clientes.apePat as apePatC','clientes.apeMat as apeMatC', 'venta.*','pagos.pesos' ,'pagos.dollar','pagos.tarjeta','pagos.deposito','pagos.transferencia' )
            ->where('pagos.updated_at', '>=',$request->fechaInicial)
            ->where('pagos.updated_at', '<=',$request->fechaFinal)
            ->where('users.id','=',$request->id)->get();
      }else {
        $user=DB::table('venta')
        ->join('users', 'venta.idVendedor', '=', 'users.id') 
        ->rightJoin('pagos','pagos.folio','=','venta.id')
        ->join('clientes','clientes.id','=','venta.idCliente')
        ->select( 'users.name','users.apePat','users.apeMat','clientes.name as nameC','clientes.apePat as apePatC','clientes.apeMat as apeMatC',  'venta.*','pagos.updated_at as actualizado' ,'pagos.pesos' ,'pagos.dollar','pagos.tarjeta','pagos.deposito','pagos.transferencia')
        ->where('pagos.updated_at', '>=',$request->fechaInicial)
        ->where('pagos.updated_at', '<=',$request->fechaFinal)->get();

      } 
      return  Datatables::of($user) ->addColumn('fecha',function($user){
            return date('d-m-Y',strtotime($user->actualizado));

    })->addColumn('name',function($user){
          return  $user->name.'  '.$user->apePat.'  '.$user->apeMat;

        })->addColumn('client',function($user){
              return  $user->nameC.'  '.$user->apePatC.'  '.$user->apeMatC;
        })->addColumn('abonos',function($user){
              return  $user->pesos+$user->dollar+$user->deposito+$user->tarjeta+$user->transferencia;
        })  
        ->make(true);
    }
    
    
    public function apiReporteGeneral(Request $request)
    {
      if($request->id){

      $user=DB::table('venta')
            ->join('users', 'venta.idVendedor', '=', 'users.id')
            ->join('detalleventa','detalleventa.folio','=','venta.id')
            ->join('pagos','pagos.folio','=','venta.id')
            ->select( 'users.name','users.apePat','users.apeMat','detalleventa.*','pagos.*' )
            ->where('detalleventa.created_at', '>=',$request->fechaInicial)
            ->where('detalleventa.created_at', '<=',$request->fechaFinal)
            ->where('users.id','=',$request->id)->get();
      }else {
        $user=DB::table('venta')
        ->join('users', 'venta.idVendedor', '=', 'users.id')
        ->join('detalleventa','detalleventa.folio','=','venta.id')
        ->join('pagos','pagos.folio','=','venta.id')
        ->select( 'users.name','users.apePat','users.apeMat','detalleventa.*','pagos.*')
        ->where('detalleventa.created_at', '>=',$request->fechaInicial)
        ->where('detalleventa.created_at', '<=',$request->fechaFinal)->get();

      }


      return  Datatables::of($user) ->addColumn('fecha',function($user){
            return date('d-m-Y',strtotime($user->created_at));

    })->addColumn('name',function($user){
          return  $user->name.'  '.$user->apePat.'  '.$user->apeMat;

        })
        ->addColumn('cantidad',function($user){
              return  ($user->cantidad - ( $user->cantidad % 1));

            })
        ->make(true);
    }

         public function apiReporteTerapeuta(Request $request)
    {

            $user=DB::table('cita') 
                  ->join('servicio', 'cita.idServicio', '=', 'servicio.id')
                  ->join('users', 'cita.idTerapeuta', '=', 'users.id')
                  ->select( 'users.name','users.apePat','users.apeMat','cita.*','servicio.nombre' )
                  ->where('cita.created_at', '>=',$request->fechaInicial)
                  ->where('cita.created_at', '<=',$request->fechaFinal)
                  ->where('cita.idTerapeuta','=',$request->id)
                  ->get();

              return  Datatables::of($user) ->addColumn('fecha',function($user){
                    return date('d-m-Y',strtotime($user->created_at));

            })->addColumn('name',function($user){
                  return  $user->name.'  '.$user->apePat.'  '.$user->apeMat;

                })
                ->addColumn('cantidad',function($user){
                      return  (1);

                    })
                ->make(true);

    }
    public function apiReporteCaja(Request $request)
    {

      $user=DB::table('users')
                  ->join('caja','users.id','=','caja.idAuth')
                  ->select( 'users.name','users.apePat','users.apeMat','caja.*' )
                  ->where('caja.created_at', '>=',$request->fechaInicial)
                  ->where('caja.created_at', '<=',$request->fechaFinal)
                  ->get();

              return  Datatables::of($user) ->addColumn('fecha',function($user){
                    return date('d-m-Y',strtotime($user->created_at));

                  })->addColumn('name',function($user){
                  return  $user->name.'  '.$user->apePat.'  '.$user->apeMat;

                  })->make(true);

    }


}
