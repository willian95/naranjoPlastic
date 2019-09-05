<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Ticket;
use Barryvdh\DomPDF\Facade as PDF;

class ticketController extends Controller
{
  public function ticketServicio(Request $request)
  {$id=$request->id;
    $venta=DB::table('venta')
        ->join('clientes', 'clientes.id', '=', 'venta.idCliente')
        ->join('tipocambio', 'tipocambio.id', '=', 'venta.idFormaPago')
        ->select('venta.*',   'clientes.name','clientes.apePat','clientes.apeMat','tipocambio.cambio')
        ->where('venta.id','=',$id)
        ->get();
        $venta->toArray();
    $usuario=Auth::user()->name.' '.Auth::user()->apePat.' '.Auth::user()->apeMat;
    $detalles=DB::table('servicio')
        ->join('detalleventa', 'servicio.id', '=', 'detalleventa.idProducto')

        ->select('detalleventa.*','servicio.nombre')
        ->where('detalleventa.folio','=',$id)
        ->get();

     $pago=DB::table('pagos')->select('pagos.*')->where('pagos.folio','=',$id)->orderby('id','DESC')->take(1)->get();
 
        $ticket['idVenta']=$venta[0]->id;
        $ticket=Ticket::create($ticket);
    $pdf= PDF::loadView('servicios.ticketVenta',compact('detalles','usuario','venta','ticket','pago' ));

    return $pdf->stream();

  }

  public function ticketServicioVenta(Request $request)
  {$id=$request->id;
    $venta=DB::table('venta')
        ->join('clientes', 'clientes.id', '=', 'venta.idCliente')
        ->join('tipocambio', 'tipocambio.id', '=', 'venta.idFormaPago')
        ->select('venta.*',   'clientes.name','clientes.apePat','clientes.apeMat','tipocambio.cambio')
        ->where('venta.id','=',$id)
        ->get();
        $venta->toArray();
    $usuario=Auth::user()->name.' '.Auth::user()->apePat.' '.Auth::user()->apeMat;
    $detalles=DB::table('servicio')
        ->join('detalleventa', 'servicio.id', '=', 'detalleventa.idProducto')
        ->select('detalleventa.*','servicio.nombre')
        ->where('detalleventa.folio','=',$id)
        ->get();

  $pago=DB::table('pagos')->select('pagos.*')->where('pagos.folio','=',$id)->orderby('id','DESC')->take(1)->get();
     

        $ticket['idVenta']=$venta[0]->id;
        $ticket=Ticket::create($ticket);
    $pdf= PDF::loadView('servicios.ticket',compact('detalles','usuario','venta','ticket','pago' ));

    return $pdf->stream();

  }

  public function ticket(Request $request)
  {$id=$request->id;
    $venta=DB::table('venta')
        ->join('clientes', 'clientes.id', '=', 'venta.idCliente')
        ->join('tipocambio', 'tipocambio.id', '=', 'venta.idFormaPago')
        ->select('venta.*', 'clientes.name','clientes.apePat','clientes.apeMat','tipocambio.cambio')
        ->where('venta.id','=',$id)
        ->get();
        $venta->toArray();
    $usuario=Auth::user()->name.' '.Auth::user()->apePat.' '.Auth::user()->apeMat;
    $detalles=DB::table('productos')
        ->join('detalleventa', 'productos.id', '=', 'detalleventa.idProducto')
        ->select('detalleventa.*', 'productos.codigo','productos.descripcion')
        ->where('detalleventa.folio','=',$id) 
        ->get();
         $pago=DB::table('pagos')->select('pagos.*')->where('pagos.folio','=',$id)->orderby('id','DESC')->take(1)->get();
 

        $ticket['idVenta']=$venta[0]->id;
        $ticket=Ticket::create($ticket);
    $pdf= PDF::loadView('productos.ticketVenta',compact('detalles','usuario','venta','ticket','pago' )); 
    return $pdf->stream();

  }

  public function ticketVenta(Request $request)
  {$id=$request->id;
    $venta=DB::table('venta')
        ->join('clientes', 'clientes.id', '=', 'venta.idCliente')
        ->join('tipocambio', 'tipocambio.id', '=', 'venta.idFormaPago')
        ->select('venta.*', 'clientes.name','clientes.apePat','clientes.apeMat','tipocambio.cambio')
        ->where('venta.id','=',$id)
        ->get();
        $venta->toArray();
    $usuario=Auth::user()->name.' '.Auth::user()->apePat.' '.Auth::user()->apeMat;
    $detalles=DB::table('productos')
        ->join('detalleventa', 'productos.id', '=', 'detalleventa.idProducto')
        ->select('detalleventa.*', 'productos.codigo','productos.descripcion')
        ->where('detalleventa.folio','=',$id)
        ->get();

       $pago=DB::table('pagos')->select('pagos.*')->where('pagos.folio','=',$id)->orderby('id','DESC')->take(1)->get();
    $ticket['idVenta']=$venta[0]->id;
        $ticket=Ticket::create($ticket);
    $pdf= PDF::loadView('productos.ticket',compact('detalles','usuario','venta','ticket','pago'));

    return $pdf->stream();

  }

}
