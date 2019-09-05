<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Clientes;
use App\Venta;
use App\DetalleVenta;
use App\Inventario;
use App\TipoCambio;
use App\Pagos;
use Auth;

class ventaController extends Controller
{
    public function ventaProducto() 
    {   
        $tipoCambio = TipoCambio::all()->last();
        return view('productos.venta', ['tCambio' => $tipoCambio]);
    }

    public function listaProductos()
    {
        return Productos::Select('productos.id','productos.descripcion')
            ->where('descripcion','LIKE','%'.request('q').'%')
            ->orwhere('codigo','LIKE','%'.request('q').'%')
            ->paginate(10); 
    }

    public function listaClientes()
    {
        return Clientes::Select('clientes.id','clientes.name','clientes.apePat','clientes.apeMat')
            ->where('name','LIKE','%'.request('q').'%')
            ->orwhere('id','LIKE','%'.request('q').'%')
            ->paginate(10);
    }
    
    public function buscaProducto(Request $request)
    {
        $producto= Productos::select('productos.id','productos.codigo','productos.descripcion','productos.precio','productos.costo','inventario.existencia')
            ->join('inventario','inventario.id','=','productos.id')
            ->where('productos.id','=',$request->id)
            ->get();
        $producto->toArray();
        return response()->json(['responseData' =>  $producto]);
    }

    public function insertarVenta(Request $request)
    {
        //$request->request->add(['password' => bcrypt($request['password'])]);
        $request->request->add(['idVendedor' => Auth::user()->id]); 
        $reparto=Venta::create($request->all());
        $reparto->toArray();
        return response()->json(['responseData'=> $reparto]);
    }

    public function insertarDetalle(Request $request)
    {
        $detalle=DetalleVenta::create($request->all());
        $detalle->toArray();
        return response()->json(['responseData'=> $detalle]);
    }

    public function actualizaExistencia(Request $request)
    {
        $producto=Inventario::find($request->id);
        $producto->fill($request->all());
        $producto->save(); 
        $producto->toArray();
        return response()->json(['responseData' =>  $producto]);
    }

    public function insertaPagos(Request $request)
    {
        $pagos = Pagos::create($request-> all());
        $pagos->toArray();
        return response()->json(['responseData' => $pagos]);
    }
}
