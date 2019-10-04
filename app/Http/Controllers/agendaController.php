<?php

namespace App\Http\Controllers;
use Yajra\DataTables\Datatables;
use Validator;
use App\User;
use App\Foto;
use App\Cita;
use App\servicioAgenda;
use App\Servicio;
use DB;
use Auth;
use App\Consultorio;
use Illuminate\Http\Request;

class agendaController extends Controller
{
  public function index(){
    if (Auth::user()->altaCliente) {
      return view('agenda.agendaDiaria.index');
    }
    else {
      return view('layouts.permisos');
    }
  }

  public function addConsultorio(Request $request)
  {
      $request['idAuth']=Auth::user()->id;
      $dere=Consultorio::create( $request->all());
      $dere->toArray();
      return response()->json(['responseData' => $dere]);
  }
  
  public function deleteConsultorio(Request $request)
  {
     
    $dere=Consultorio::destroy($request->id);
    $otro="hola";
    return response()->json(['responseData' => $otro]);
 
  }

  public function addServicio(Request $request)
  {
      $request['idAuth']=Auth::user()->id;
      $dere=servicioAgenda::create( $request->all());
      $dere->toArray();
      return response()->json(['responseData' => $dere]);
  }


  public function buscarConsultorio( )
  {
    $dere=Consultorio::all();
    $dere->toArray();
    return response()->json(['responseData' => $dere]);
  }

public function buscarServicioAgenda( )
  {
    $dere=Servicio::all();
    $dere->toArray();
    return response()->json(['responseData' => $dere]);
  }

  public function buscarTeraAgenda( )
  {
    $dere=User::all();
    $dere->toArray();
    return response()->json(['responseData' => $dere]);
  }

  public function agregarCita(Request $request)
  {
    $request['idAuth']=Auth::user()->id;
    $dere=Cita::create( $request->all());
    $dere->toArray();
    return response()->json(['responseData' => $dere]);
  }

  public function buscarAgenda(Request $request)
  {
      $user=DB::table('cita')
              ->join('users', 'cita.idTerapeuta', '=', 'users.id')
              ->join('clientes','cita.idCliente','=','clientes.id')
              ->join('consultorio','cita.idConsultorio','=','consultorio.id')
               ->select( 'users.name','users.apePat','users.apeMat','clientes.name as  namec','consultorio.consultorio','clientes.apePat as apePatc','clientes.celular','clientes.TelCasa','clientes.apeMat as apeMatc','cita.*' )

              ->get();



    return  Datatables::of($user)
    ->addColumn('fecha',function($user){
        return date('d-m-Y',strtotime($user->created_at));
      })
      ->addColumn('nombre',function($user){
          return  $user->name.'  '.$user->apePat.'  '.$user->apeMat;

        })
        ->addColumn('cliente',function($user){
            return  $user->namec.'  '.$user->apePatc.'  '.$user->apeMatc;

          })
          ->addColumn('action',function($user){
              return '<button type="button" class="btn btn-secondary btn-sm" href="#" onClick="VerCita('.$user->id.',0);"><i class="fa fa-eye"></i></button>'.
                      '<button type="button" href="#" onClick="VerCita('.$user->id.',1);" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>'.
                      '<button type="button" href="#" onClick="eliminarCita('.$user->id.');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';


  })->make(true);
  }

public function actualizarCita(Request $request)
{
  $request['idAuth']=Auth::user()->id;
  $dere=Cita::find( $request->id);
  $dere->fill($request->all());
  $dere->save();
  $dere->toArray();
  return response()->json(['responseData' => $dere]);
}

  public function BuscarEspacio(Request $request)
  {
    $citaEspacio = [];
    if($request->horaFinal != null && $request->horaInicio != null)
    {
      $citaEspacio=DB::table('cita')
            ->select( 'cita.*' )
            ->whereDate('cita.fechaCita','=',$request->fechaCita)
            ->where('cita.idConsultorio','=',$request->idConsultorio)
            ->whereTime('cita.horaFinal','>',$request->horaInicio)
            ->whereTime('cita.horaInicio','<',$request->horaFinal)
            ->get();

            $citaEspacio->toArray();
            
    }
    return response()->json(['responseData' => $citaEspacio]);
  }

  public function buscarAgendaFecha(Request $request)
  {
      $user=DB::table('cita')
              ->join('users', 'cita.idTerapeuta', '=', 'users.id')
              ->join('clientes','cita.idCliente','=','clientes.id')
              ->join('consultorio','cita.idConsultorio','=','consultorio.id')
              ->select( 'users.name','users.apePat','users.apeMat','clientes.name as  namec','consultorio.consultorio','clientes.celular','clientes.TelCasa','clientes.apePat as apePatc','clientes.apeMat as apeMatc','cita.*' )
              ->where('cita.idConsultorio','LIKE','%'.$request->idConsultorio.'%')
              ->whereDate('cita.fechaCita','LIKE','%'.$request->fechaCita.'%')

              ->get();



    return  Datatables::of($user)
    ->addColumn('fecha',function($user){
        return date('d-m-Y',strtotime($user->created_at));
      })
      ->addColumn('nombre',function($user){
          return  $user->name.'  '.$user->apePat.'  '.$user->apeMat;

        })
        ->addColumn('cliente',function($user){
            return  $user->namec.'  '.$user->apePatc.'  '.$user->apeMatc;

          })
          ->addColumn('action',function($user){
              return '<button type="button" class="btn btn-secondary btn-sm" href="#" onClick="VerCita('.$user->id.',0);"><i class="fa fa-eye"></i></button>'.
                      '<button type="button" href="#" onClick="VerCita('.$user->id.',1);" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>'.
                      '<button type="button" href="#" onClick="eliminarCita('.$user->id.');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';

  })->make(true);
  }

  public function buscarHoraDispo(Request $request)
  {
    $user=DB::table('cita')
            ->join('users', 'cita.idTerapeuta', '=', 'users.id')
            ->join('clientes','cita.idCliente','=','clientes.id')
            ->join('consultorio','cita.idConsultorio','=','consultorio.id')
            ->select(  'clientes.*','cita.*' )
            ->where('cita.id','=',$request->id)
            ->get();
            $user->toArray();
            return response()->json(['responseData' => $user]);
  }

  public function deleteCita(Request $request)
  {
    $user = Cita::destroy($request->id);
    $otro="hola";
    return response()->json(['responseData' => $otro]);
  }

}
