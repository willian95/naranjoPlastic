<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\TipoCambio;
use App\DetalleServicio;
use App\User;
use App\DetalleVentaServicio;
use App\DetalleMembresiaCliente;

class VentaServicioController extends Controller
{
    public function ventaServicio()
    {
        $tipoCambio = TipoCambio::all()->last();
        return view('servicios.venta.ventaServicio', ['tCambio' => $tipoCambio]);
    }

    public function listaServicio(){
        return Servicio::Select('servicio.id','servicio.nombre')
        ->where('id','LIKE','%'.request('q').'%')
        ->orwhere('nombre','LIKE','%'.request('q').'%')
        ->paginate(10);
    }

    public function buscaServicio(Request $request)
    {
        $servicio = Servicio::Select('servicio.id','servicio.nombre','servicio.cantidadSesion','servicio.presioSesion','presioCompleto')
            ->where('servicio.id','=',$request->id)
            ->get();
        $servicio->toArray();

        $tipoCambio = TipoCambio::orderBy('id', 'desc')->first();

        return response()->json(['responseData' =>  $servicio, 'cambio' => $tipoCambio]);
    }

    public function buscaProductosServicio(Request $request){
        $producto = DetalleServicio::Select('detalleservicio.idServicio','detalleservicio.idProducto','detalleservicio.productoCompleto','detalleservicio.productoSesion','inventario.existencia','inventarioservicio.botes','inventarioservicio.existencia as stock','productos.gramos')
        ->join('inventario','inventario.id','=','detalleservicio.idProducto')
        ->join('inventarioservicio','inventarioservicio.id','=','detalleservicio.idProducto')
        ->join('productos','productos.id','=','detalleservicio.idProducto')
        ->where('detalleservicio.idServicio','=',$request->idServicio)
        ->get();
        $producto->toArray();
        return response()->json(['responseData' =>  $producto]);
    }

    public function listaTerapeuta()
    {
        return User::Select('users.id','users.name','users.apePat','users.apeMat')
            ->where('name','LIKE','%'.request('q').'%')
            ->orwhere('id','LIKE','%'.request('q').'%')
            ->paginate(10);
    }

    public function insertarDetalleVentaServicio(Request $request)
    {
        $reparto=DetalleVentaServicio::create($request->all());
        $reparto->toArray();
        return response()->json(['responseData'=> $reparto]);
    }

    public function buscaMembresiaCliente(Request $request){
        $membresia = DetalleMembresiaCliente::Select('clientes.id','clientes.name','clientes.apePat','clientes.apeMat','detallemembresiausuario.id','detallemembresiausuario.nombre','detallemembresiausuario.cantidad','detallemembresiausuario.tipo','detallemembresiausuario.idMembresia','detallemembresiausuario.idProdServ')
        ->join('clientes','clientes.id','=','detallemembresiausuario.idMembresia')
        ->where('detallemembresiausuario.idMembresia','=',$request->id)
        ->get();
        $membresia->toArray();
        return response()->json(['responseData' => $membresia]);
    }

    public function actualizaCantidadMembresia(Request $request){
        $producto=DetalleMembresiaCliente::find($request->id);
        $producto->fill($request->all());
        $producto->save(); 
        $producto->toArray();
        return response()->json(['responseData' =>  $producto]);
    }

    public function eliminarProductosMembresia(Request $producto)
    {
        DetalleMembresiaCliente::destroy($producto->id);
        return response()->json(['responseData'=>$producto]);
    }
}
