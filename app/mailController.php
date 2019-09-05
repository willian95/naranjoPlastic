<?php

namespace App\Http\Controllers;
use Mail;
use App\Clientes;
use App\servicioAgenda;
use Illuminate\Http\Request;

class mailController extends Controller
{
  public function sendEmail(Request $request)
  {
    $client=Clientes::find($request->idCliente);
    $servicio=servicioAgenda::find($request->idServicio);
    $request['servicios']=$servicio['nombre'];
    $request['cliente']=$client['name'].' '.$client['apePat'].' '.$client['apeMat'];
    Mail::send('mail.index',$request->all(),function($msj) use ($client){
      $msj->subject('Correo de Contacto');
      $msj->to($client['email']);
    });
  }
}
