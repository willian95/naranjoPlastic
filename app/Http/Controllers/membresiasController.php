<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Datatables;
use Illuminate\Http\Request;
use App\Productos;
use App\Servicio;
use App\membresia;
use App\DetalleMembresia;
use Auth;
use DB;

class membresiasController extends Controller{
  public function showProductos()
  {
      $datosProductos = Productos::all();
      return  Datatables::of($datosProductos)
          ->addColumn('action',function($datosProductos){
              return
                      '<button class="btn btn-success btn-sm" onClick="agregarProducto('.$datosProductos->id.');"><i class="fa fa-plus"></i></button>';
      })->make(true);
  }

  public function showServicios(){
    $datosServicios = Servicio::all();
    return Datatables::of($datosServicios)
    ->addColumn('action',function($datosServicios){
        return
                '<button class="btn btn-success btn-sm" onClick="agregarServicio('.$datosServicios->id.');" ><i class="fa fa-plus"></i></button>';
        })->make(true);
  }

  public function buscarProducto(Request $request) {
    $producto= Productos::find($request->id);
    $producto->toArray();
    return response()->json(['responseData'=>$producto]);
  }

  public function buscarServicio(Request $request) {
    $producto= Servicio::find($request->id);
    $producto->toArray();
    return response()->json(['responseData'=>$producto]);
  }

  public function crearMembresia(Request $request){
    $request['idAuth']=Auth::user()->id;
    $membresia=membresia::create($request->all());
    $membresia->toArray();
    return response()->json(['responseData'=>$membresia]);
  }

  public function detalleMembresia(Request $request){
    $detalle=DetalleMembresia::create($request->all());
    $detalle->toArray();
    return response()->json(['responseData'=>$detalle]);
  }

  public function listaMembresias(){
    $membresias = membresia::all();
    return Datatables::of($membresias)->addColumn('action',function($membresias){
    if (Auth::user()->borrarPermiso) {
        return '<a href="#" onClick="verMembresia('.$membresias->id.');" class="btn btn-secondary btn-sm"><i class="fa fa-eye"></i></a>'.
                 '<a href="#" onClick="editaMembresia('.$membresias->id.');" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>'.
                 '<a href="#" onClick="eliminaMembresia('.$membresias->id.');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
    }else{
        return '<a href="#" onClick="verMembresia('.$membresias->id.');" class="btn btn-secondary btn-sm"><i class="fa fa-eye"></i></a>'.
                 '<a href="#" onClick="editaMembresia('.$membresias->id.');" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>' ;
    
    
    }
      })->make(true);
  }

  public function eliminaMembresia(Request $request){
    $membresia=membresia::destroy($request->id);
    $detalleMem=DetalleMembresia::where('idMembresia','=',$request->id);
    $detalleMem->delete();
    return response()->json(['responseData'=>$membresia]);
  }

  public function actualizaMembresia(Request $request){
    $membresia=membresia::find($request->id);
    $membresia->fill($request->all());
    $membresia->save();
    $detalleMem=DetalleMembresia::where('idMembresia','=',$request->id);
    $detalleMem->delete();
    return response()->json(['responseData'=>$membresia]);
  }

  public function verMembresia(Request $request){
    $detalleMem=DB::table('detallemembresia')->select('detallemembresia.*')->where('idMembresia','=',$request->id)->get();
    $membresia=membresia::find($request->id);

    return response()->json(['responseData'=>$detalleMem,'responseData2'=>$membresia]);
  }
}
