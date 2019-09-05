<?php

namespace App\Http\Controllers;
use Mail;
use App\Clientes; 
use App\Cita;
use App\Servicio;
use DB;
use Illuminate\Http\Request;

class mailController extends Controller
{
  public function sendEmail(Request $request)
  {
      $client=Clientes::find($request->idCliente);
    $servicio=Servicio::find($request->idServicio);
    $request['servicios']=$servicio['nombre'];
    $request['cliente']=$client['name'].' '.$client['apePat'].' '.$client['apeMat'];
    $to = $client['email'];
	$subject = "TU NUEVA CITA ESTA CONFIRMADA";
	$headers = "From: Naranjo Plastic Surgery <contacto@naranjoplastic-cptv.com>" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	 
	$message = "
	<html lang=\"es\">
	  <head> 
	    <title>Document</title>
	    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\">
	  </head>
	  <body>
	    <center>
	      <img src=\"http://naranjoplastic-cptv.com/public/Logotipo_Naranjo.png\"  class=\"img-fluid  \"width=\"200px\" height=\"90px\">
	      <p><strong style=\"color:#ff7900;\">TU NUEVA CITA ESTA CONFIRMADA CON NARANJO PLASTIC SURGERY - DR. GUSTAVO NARANJO MENDEZ</strong></p>
	    </center>
	  <p style=\"color:#ff7900;\"><strong >Hola </strong>".$request['cliente']."</p>
	
	
	<p style=\"color:#ff7900;\">Su cita con Naranjo Plastic Surgery - Dr. Gustavo Naranjo Méndez ha sido confirmada.<br>
	Agradecemos su preferencia.</p>
	
	<p style=\"color:#ff7900;\">
	  <strong>Aquí los detalles de su cita:</strong><br>
	  Naranjo Plastic Surgery - Dr. Gustavo Naranjo Méndez<br><br>
	  <p style=\"color:#ff7900;\">
	  *Servicio Solicitado: ".  $request['servicios'] ." <br>
	  *Fecha de su Proxima Cita: ".$request['fechaCita']." Hora de su cita:".$request['horaInicio']."Hrs.</p>
	  <br>
	</p>
	<p style=\"color:#ff7900;\">
	  <strong>Lugar de su cita:</strong><br>
	 Naranjo Plastic Surgery - Dr. Gustavo Naranjo Méndez <br>
	 José Clemente Orozco No. 2468, Edificio Plaza Medical Int. 306, Zona Rio, C.P. 22320, Tijuana, Baja California, México. <br>
	</p>
	
	<p  style=\"color:#ff7900;\"> <strong>Atención citas</strong><br>
	Nuevas citas, cambio de citas, solamente por Teléfono <br>
	Comunicarse directamente a Naranjo Plastic Surgery: <br>
	Tel: (664) 634 63 08 o 634 63 09<br>
	<br><br>
	
	<strong style=\"color:#ff7900;\">Nuestra página y redes sociales:</strong> <br>
	
	www.naranjoplasticsurgery.com <br>
	www.facebook.com/NaranjoAestheticSurgeryClinic/ 
	www.instagram.com/naranjoplasticsurgery/ <br><br>
	
	<strong style=\"color:#ff7900;\">Consideraciones en sus citas:</strong><br>
	
	Citas no canceladas con 24 hrs de anticipación, se consideran tomadas. <br>
	</p>
	  </body>
	</html>";
	 
	mail($to, $subject, $message, $headers);
     
  }
  
  public function autoCorreo( )
  {
  $fecha=date('Y-m-d');
    $citas=DB::table('cita')  
              ->select('cita.*') 
              ->where('cita.fechaCita','=',$fecha)   
              ->get();
               
    for($i=0;$i<count($citas);$i++){
    $client=Clientes::find($citas[$i]->idCliente);
    $servicio=Servicio::find($citas[$i]->idServicio);
    $request['fechaCita']=$citas[$i]->fechaCita;
    $request['horaInicio']=$citas[$i]->horaInicio;
    $request['servicios']=$servicio['nombre'];
    $request['cliente']=$client['name'].' '.$client['apePat'].' '.$client['apeMat'];
    $to = $client['email'];
	$subject = "Recordatorio de cita";
	$headers = "From: Naranjo Plastic Surgery <contacto@naranjoplastic-cptv.com>" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	 
	$message = "
	<html lang=\"es\">
	  <head> 
	    <title>Document</title>
	    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\">
	  </head>
	  <body>
	    <center>
	      <img src=\"http://naranjoplastic-cptv.com/public/Logotipo_Naranjo.png\"  class=\"img-fluid  \"width=\"200px\" height=\"90px\">
	      <p><strong style=\"color:#ff7900;\">RECORDATORIO DE TU CITA EN NARANJO PLASTIC SURGERY - DR. GUSTAVO NARANJO MENDEZ</strong></p>
	    </center>
	  <p style=\"color:#ff7900;\"><strong >Hola </strong>".$request['cliente']."</p>
	
	
	<p style=\"color:#ff7900;\">Su cita con Naranjo Plastic Surgery - Dr. Gustavo Naranjo Méndez ha sido confirmada.<br>
	Agradecemos su preferencia.</p>
	
	<p style=\"color:#ff7900;\">
	  <strong>Aquí los detalles de su cita:</strong><br>
	  Naranjo Plastic Surgery - Dr. Gustavo Naranjo Méndez<br><br>
	  <p style=\"color:#ff7900;\">
	  *Servicio Solicitado: ".  $request['servicios'] ." <br>
	  *Fecha de su Proxima Cita: ".$request['fechaCita']." Hora de su cita:".$request['horaInicio']."Hrs.</p>
	  <br>
	</p>
	<p style=\"color:#ff7900;\">
	  <strong>Lugar de su cita:</strong><br>
	 Naranjo Plastic Surgery - Dr. Gustavo Naranjo Méndez <br>
	 José Clemente Orozco No. 2468, Edificio Plaza Medical Int. 306, Zona Rio, C.P. 22320, Tijuana, Baja California, México.<br>
	</p>
	
	<p  style=\"color:#ff7900;\"> <strong>Atención citas</strong><br>
	Nuevas citas, cambio de citas, solamente por Teléfono <br>
	Comunicarse directamente a Naranjo Plastic Surgery: <br>
	Tel: (664) 634 63 08 o 634 63 09<br>
	<br><br>
	
	<strong style=\"color:#ff7900;\">Nuestra página y redes sociales:</strong> <br>
	
	www.naranjoplasticsurgery.com <br>
	www.facebook.com/NaranjoAestheticSurgeryClinic/ 
	www.instagram.com/naranjoplasticsurgery/ <br><br>
	
	<strong style=\"color:#ff7900;\">Consideraciones en sus citas:</strong><br>
	
	Citas no canceladas con 24 hrs de anticipación, se consideran tomadas. <br>
	</p>
	  </body>
	</html>";
	
	mail($to, $subject, $message, $headers);
	}
     
  }
}
