<?php


namespace App\Http\Controllers;
use Yajra\DataTables\Datatables;
use Validator;
use App\User;
use App\Foto;
use App\Cita;
use App\servicioAgenda;
use DB;
use Auth;
use App\Consultorio;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class calendarioController extends Controller
{
  public function index(){
    if (Auth::user()->altaCliente) {
      $citas=DB::table('cita')
              ->join('users', 'cita.idTerapeuta', '=', 'users.id')
              ->join('servicio', 'cita.idServicio', '=', 'servicio.id')
              ->join('clientes','cita.idCliente','=','clientes.id')
              ->join('consultorio','cita.idConsultorio','=','consultorio.id')
              ->select( 'users.name','users.apePat','users.apeMat','users.colorUser','servicio.nombre as nombreServicio','clientes.name as  namec','consultorio.consultorio','consultorio.id as idConsult','clientes.apePat as apePatc','clientes.apeMat as apeMatc','cita.*' )
              ->get();

      $event_list=[];
      foreach ($citas as $key => $event) {
    		$event_list[] = Calendar::event(
                $event->namec.' '.$event->apePatc.' '.$event->apeMatc.' TPTA:'.$event->name.' '.$event->apePat.' '.$event->apeMat.' CONS:'.$event->consultorio .' SERV:'.$event->nombreServicio .' OBSER:'.$event->observacion ,
                false,
                new \DateTime($event->fechaCita.'T'.$event->horaInicio),
                new \DateTime($event->fechaCita.'T'.$event->horaFinal),
                $event->id,
                [
                           'color' =>  $event->colorUser,

                ]
            );
    	}

      $calendar = \Calendar::addEvents($event_list)
      ->setOptions([

      ])->setCallbacks([
        'buttonText'=> '{
          today: "Hoy",
          month: "Mes",
          week : "Semana",
          day  : "Dia"
        }',
        'eventClick' => 'function(event) { 
             VerCita(event.id,1);
//$("#modalCliente").modal("show");
         }'
        
     ]);

      return view('agenda.agendaDiaria.calendario',['calendar'=>$calendar,'citas'=>$citas] );
    }
    else {
      return view('layouts.permisos');
    }
  }
}
