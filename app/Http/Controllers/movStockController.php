<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use App\MovStock;
use Auth;

class movStockController extends Controller
{
  public function historicoMovStock()
  {
    $historial = MovStock::select('movinventario.cantidad','movinventario.created_at','users.name as nombre','users.apePat as apellidoP','users.apeMat','productos.descripcion')
      ->join('users','users.id','=','movinventario.idusuario')
      ->join('productos','productos.id','=','movinventario.idproducto')
      ->get();
      return  Datatables::of($historial)
        ->addColumn('nombre',function($historial){
          return $historial->nombre.' '.$historial->apellidoP.' '.$historial->apeMat;
        })
        ->addColumn('fecha',function($historial){
          return date('d-m-Y',strtotime($historial->created_at));
        })->make(true);
  }

    public function index()
    {
      //if (Auth::user()->tipoCambio) {
        //return view('admin.tipoCambio.index');
      //}
      //else {
        return view('productos.historialStock');
      //}
    }
    public function insertarMovInventario(Request $request)
    {
        $request->request->add(['idusuario' => Auth::user()->id]); 
        $inventario = MovStock::create($request->all());
        $inventario->toArray();
        return response()->json(['responseData'=> $inventario]);
    }
}
