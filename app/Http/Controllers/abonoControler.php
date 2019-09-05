<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use App\TipoCambio;

class abonoControler extends Controller
{
    public function abonoVentas2() 
    {   
        $tipoCambio = TipoCambio::all()->last();
        return view('servicios.abono.abono', ['tCambio' => $tipoCambio]);
    }

    public function abonoVentas() 
    {   
        $tipoCambio = TipoCambio::all()->last();
        return view('productos.abonoVenta', ['tCambio' => $tipoCambio]);
    }

    public function cargaVentas(Request $request){
        $ventas = Venta::select('venta.id','idCliente','total','abono','status','created_at')
        ->where('venta.idCliente','=',$request->idCliente)
        ->where('venta.status','=','Pendiente')
        ->where('venta.idTipoVenta','=',$request->idTipoVenta)
        ->get();
        $ventas->toArray();
        return response()->json(['responseData' =>  $ventas]);
    }

    public function actualizaVentas(Request $request){
        $ventas=Venta::find($request->id);
        $ventas->fill($request->all());
        $ventas->save(); 
        $ventas->toArray();
        return response()->json(['responseData' =>  $ventas]);
    }
}