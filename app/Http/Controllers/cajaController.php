<?php

namespace App\Http\Controllers;

use Auth;
use Yajra\DataTables\Datatables;
use Illuminate\Http\Request;
use App\User;
use App\InicioCaja;
use DB;
class cajaController extends Controller
{
    public function inicioCaja()
    {
      if (Auth::user()->ventaGeneral) {
        return view('productos.caja');
      }
      else {
        return view('layouts.permisos');
      }
     }
     
    public function movimientoCaja()
    {
      if (Auth::user()->ventaGeneral) {
        return view('reportes.reporteCaja.index');
      }
      else {
        return view('layouts.permisos');
      }
    }

     public function movimiento(Request $request)
     {
       $request['idAuth']=Auth::user()->id;
       $caja=InicioCaja::create($request->all());
       $caja->toArray();
       return response()->json(['responseData'=>$caja]);
     }
}
