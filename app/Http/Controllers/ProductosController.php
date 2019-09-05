<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use App\Productos;
use App\Inventario;
use App\InventarioServicio;
use App\TipoCambio;

class ProductosController extends Controller
{
    public function insertaProducto(Request $request)
    {
        $producto = Productos::create($request->all());
        $producto->toArray();
        return response()->json(['responseData'=> $producto]);
    }

    public function insertarInventario(Request $request)
    {
        $inventario = Inventario::create($request->all());
        $inventario->toArray();
        return response()->json(['responseData'=> $inventario]);
    }

    public function CargaProductos()
    {
        return view('productos.listaProductos');
    }

    public function EliminarProductos(Request $producto)
    {
        Productos::destroy($producto->id);
        Inventario::destroy($producto->id);
        InventarioServicio::destroy($producto->id);
        return response()->json(['responseData'=>$producto]);
    }

    public function infoProductos()
    {
        $datosProductos = Productos::select('productos.id','productos.codigo','productos.created_at','productos.descripcion','inventario.existencia','productos.precio','productos.gramos')
        ->join('inventario','productos.id','=','inventario.id')
        ->get();
        return  Datatables::of($datosProductos)
            ->addColumn('action',function($datosProductos){
            if (Auth::user()->borrarPermiso) {
                return  '<button class="btn btn-secondary btn-sm" onClick="ver('.$datosProductos->id.')"><i class="fa fa-eye"></i></button> '.
                        '<button onClick="actualizaProducto('.$datosProductos->id.')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button> '.
                        '<button onClick="eliminaProducto('.$datosProductos->id.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';
                        }else{
                        
                return  '<button class="btn btn-secondary btn-sm" onClick="ver('.$datosProductos->id.')"><i class="fa fa-eye"></i></button> '.
                        '<button onClick="actualizaProducto('.$datosProductos->id.')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button> ' ;
                        }
        })->make(true);
    }

    public function buscaProducto(Request $request){
        $datosProducto = Productos::select('productos.id','productos.codigo','productos.descripcion','productos.costo','productos.precio','productos.gramos','inventario.existencia')
        ->join('inventario','productos.id','=','inventario.id')
        ->where('productos.id','=',$request->id)
        ->get();
        $datosProducto->toArray();

        $tipoCambio = TipoCambio::orderBy('id', 'desc')->first();

        return response()->json(['responseData'=> $datosProducto, 'cambio' => $tipoCambio]);
    }

    //Controllers para Stock
    public function cargaStock()
    {
        return view('productos.stock');
    }

    public function cargaProductosStock()
    {
        $productos = Productos::select('productos.id','productos.codigo','productos.descripcion','inventario.existencia')
                                ->join('inventario','inventario.id','=','productos.id')
                                ->get();
        return  Datatables::of($productos)
            ->addColumn('action',function($productos){
                return  '<a href="#" onClick="actualizarUsuario('.$productos->id.');" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>';
            })->make(true);
    }

    public function buscaStockProducto(Request $request){
        //$producto= CLientes::find($request->id);
        $producto = Productos::select('productos.id','productos.codigo','productos.descripcion','inventario.existencia')
                                ->join('inventario','inventario.id','=','productos.id')
                                ->where('productos.id','=',$request->id)
                                ->get();
        $producto->toArray();
        return response()->json(['responseData' =>  $producto]);
    }

    public function actualizaInventario(Request $request){
        $producto=Inventario::find($request->id);
        $producto->fill($request->all());
        $producto->save();
        $producto->toArray();
        return response()->json(['responseData' =>  $producto]);
    }

    public function actualizaProductos(Request $request){
        $producto=Productos::find($request->id);
        $producto->fill($request->all());
        $producto->save();
        $producto->toArray();
        return response()->json(['responseData' =>  $producto]);
    }

    public function insertarInventarioServicio(Request $request)
    {
        $inventario = InventarioServicio::create($request->all());
        $inventario->toArray();
        return response()->json(['responseData'=> $inventario]);
    }

    public function actualizaProductosServicio(Request $request){
        $producto=InventarioServicio::find($request->id);
        $producto->fill($request->all());
        $producto->save();
        $producto->toArray();
        return response()->json(['responseData' =>  $producto]);
    }
}
