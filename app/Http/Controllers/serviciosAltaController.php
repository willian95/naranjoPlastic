<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Servicio;
use App\DetalleServicio;
use Yajra\DataTables\Datatables;
use Auth;

class serviciosAltaController extends Controller
{
    public function index()
    {
      return view('servicios.alta.index');
    }

    public function servicioCrear(Request $request)
    {
      $request['idAuth']= Auth::user()->id;
      $Servicios=Servicio::create( $request->all());
      $Servicios->toArray();
      return response()->json(['responseData' => $Servicios]);
    }

    public function servicioDetalle(Request $request)
    {
      $detalleServicio=DetalleServicio::create( $request->all());
      $detalleServicio->toArray();
      return response()->json(['responseData' => $detalleServicio]);
    }

    public function apiServicio()
    {
      $user=Servicio::all();
      return  Datatables::of($user)
      ->addColumn('fecha',function($user){
          return date('d-m-Y',strtotime($user->created_at));
        })
        ->addColumn('action',function($user){
        
            if (Auth::user()->borrarPermiso) {
            return '<button type="button" class="btn btn-secondary btn-sm" href="#" onClick="VerServicio('.$user->id.');"><i class="fa fa-eye"></i></button>'.
                    '<button type="button" href="#" onClick="actualizarServicio('.$user->id.');" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>'.
                    '<button type="button" href="#" onClick="eliminarServicio('.$user->id.');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
            }else{
            return '<button type="button" class="btn btn-secondary btn-sm" href="#" onClick="VerServicio('.$user->id.');"><i class="fa fa-eye"></i></button>'.
                    '<button type="button" href="#" onClick="actualizarServicio('.$user->id.');" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>' ;
            
            }

    })->make(true);
    }

    public function deleteServicio(Request $request)
    {
      Servicio::destroy($request->id);
      $detalle= DetalleServicio::where('idServicio','=',$request->id);
      $detalle->delete(); 
      return response()->json( ['responseData' => $request]);
    }

    public function VerServicio(Request $request)
    {
      $servicio=Servicio::find($request->id);
      $detalle=DB::table('detalleservicio')
        ->join('productos', 'detalleservicio.idProducto', '=', 'productos.id')
        ->where('detalleservicio.idServicio', '=',$request->id)
        ->select('productos.*','productos.id as idd', 'detalleservicio.*')
        ->get();
      $detalle->toArray();
      return response()->json(['responseData' => $detalle,'responseData1' => $servicio]);
    }

    public function servicioActualizar(Request $request)
    {
      $Servicios=Servicio::find($request->id);
      $Servicios->fill($request->all());
      $Servicios->save();
      $detalle= DetalleServicio::where('idServicio','=',$request->id);
      $detalle->delete();
      $Servicios->toArray();
      return response()->json(['responseData' => $Servicios]);
    }
}
