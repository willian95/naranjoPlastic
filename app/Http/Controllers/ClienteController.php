<?php

namespace App\Http\Controllers;

use Auth;
use Yajra\DataTables\Datatables;
use App\Clientes;
use App\NotaPostOperatoria;
use Illuminate\Http\Request;
use App\User;
use App\membresia;
use App\DetalleMembresiaCliente;
use App\Foto;
use App\Indicaciones;
use App\NotaMedica;
use App\NotaEgreso;
use App\seguimiento_quirurgico;
use App\HojaEnfermeriaUnidadQuirurgica;
use App\HojaEnfermeria;
use App\HojaEnfermeriaPart2;
use App\HojaEnfermeriaPart3;
use PDF;
use DB;
use DNS1D;


class ClienteController extends Controller
{
      public function index(){
        if (Auth::user()->altaCliente) {
          return view('cliente.index');
        }
        else {
          return view('layouts.permisos');
        }
      }

      public function editarUser(Request $request)
      {
        $usuario=User::find($request->id);
        $usuario->toArray();

        $foto=DB::table('foto')->select('foto.*')->where('foto.idUsuario','=',$request->id)->get();
        return response()->json(['responseData'=>$cliente, 'responseData1' => $foto]);
      }

      public function editarCliente(Request $request)
      {
        $cliente=Clientes::find($request->id);
        $cliente['barcode']=DNS1D::getBarcodePNG($cliente['id'],'C39');
        $cliente->toArray();
        $foto=DB::table('foto')->select('foto.*')->where('foto.idUsuario','=',$request->id)->get();

        $postoperatorio = NotaPostOperatoria::where('cliente_id', $request->id)->get();
        $indicaciones = Indicaciones::where('cliente_id', $request->id)->get();
        $notaMedica = NotaMedica::where('cliente_id', $request->id)->get();
        $notaEgreso = NotaEgreso::where('cliente_id', $request->id)->get();
        $seguimientoQuirurgico = seguimiento_quirurgico::where('cliente_id_seccion8', $request->id)->get();
        $hojaEnfermeriaUnidadQuirurgica = HojaEnfermeriaUnidadQuirurgica::where('cliente_id', $request->id)->get();
        $hojaEnfermeria = HojaEnfermeria::where('cliente_id', $request->id)->get();
        $hojaEnfermeria2 = HojaEnfermeriaPart2::where('cliente_id', $request->id)->get();

        return response()->json(['responseData'=>$cliente,'responseData1' => $foto, 'postOperatorio' => $postoperatorio, 'indicaciones' => $indicaciones, 'notaMedica' => $notaMedica, 'notaEgreso' => $notaEgreso, 'seguimientoQuirurgico' => $seguimientoQuirurgico, 'hojaEnfermeriaUnidadQuirurgica' => $hojaEnfermeriaUnidadQuirurgica, 'hojaEnfermeria' => $hojaEnfermeria, 'hojaEnfermeria2' => $hojaEnfermeria2, 'hojaEnfermeria3' => $hojaEnfermeria3]);
      }

      public function actualizaPaciente(Request $request){
        $request['idUsuario']=$request['id'];
	      $request['foto']=$request['imagen'] ;
	      $foto=DB::table('foto')->select('foto.*')->where('foto.idUsuario','=',$request->id)->first();
	      if($foto && $request['imagen']){
	        $imagen=Foto::find($foto->id);
	        $imagen->fill($request->all());
	        $imagen->save();
	        }else if($request['imagen']) {
	          DB::table('foto')->insert(['idUsuario' =>$request['idUsuario'], 'foto' => $request['foto']]);

	  //      DB::table('foto')->update(['idUsuario' =>$request['idUsuario'], 'foto' => $request['foto']])->where('foto.idUsuario','=',$request->id)->get();

	}
        $cliente=Clientes::find($request->id);
        $cliente->fill($request->all());
        $cliente->save();
        $cliente->toArray();
        

        if($request->notapostoperatoria_id != ''){
          $notaPostOperatoria = NotaPostOperatoria::find($request->notapostoperatoria_id);
          $notaPostOperatoria->fill($request->all());
          $notaPostOperatoria->update();
        }

        if($request->indicaciones_id != ''){
          $indicaciones = Indicaciones::find($request->indicaciones_id);
          $indicaciones->fill($request->all());
          $indicaciones->update();
        }

        if($request->nota_medica_id != ''){
          $notaMedica = NotaMedica::find($request->nota_medica_id);
          $notaMedica->fill($request->all());
          $notaMedica->update();
        }

        if($request->nota_egreso_id != ''){
          $notaEgreso = NotaEgreso::find($request->nota_egreso_id);
          $notaEgreso->fill($request->all());
          $notaEgreso->update();
        }

        if($request->resumen_id_seccion8 != ''){
          $seguimientoQuirurgico = seguimiento_quirurgico::find($request->resumen_id_seccion8);
          $seguimientoQuirurgico->fill($request->all());
          $seguimientoQuirurgico->update();
        }

        if($request->id_seccion10 != ''){
          $hojaEnfermeria = HojaEnfermeria::find($request->id_seccion10);
          $hojaEnfermeria->fill($request->all());
          $hojaEnfermeria->update();

          $hojaEnfermeria2 = HojaEnfermeriaPart2::find($request->id_seccion10);
          $hojaEnfermeria2->fill($request->all());
          $hojaEnfermeria2->update();

          $hojaEnfermeria3 = HojaEnfermeriaPart3::find($request->id_seccion10);
          $hojaEnfermeria3->fill($request->all());
          $hojaEnfermeria3->update();
        }

        return response()->json(['responseData'=>$cliente]);
      }

      public function muestraCliente(){
        $clientes = Clientes::all();

        return Datatables::of($clientes)->addColumn('name',function($clientes){
              return  $clientes->name.'  '.$clientes->apePat.'  '.$clientes->apeMat;

            })

            ->addColumn('fecha',function($clientes){
                return date('d-m-Y',strtotime($clientes->created_at));
              })

              ->addColumn('action',function($clientes){
                if (Auth::user()->borrarPermiso) {
        	return '<a href="#" onClick="verCliente('.$clientes->id.');" class="btn btn-secondary btn-sm"><i class="fa fa-eye"></i></a>'.
                     '<a href="#" onClick="editaCliente('.$clientes->id.');" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>'.
                     '<a href="#" onClick="eliminaCliente('.$clientes->id.');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>'.
                     '<a href="#" onClick="agregaMembresia('.$clientes->id.');" class="btn btn-success btn-sm"><i class="fa fa-address-card" aria-hidden="true"></i></a>'.
                     '<a href="'.url("/clientePdf/".$clientes->id).'" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></i></a>';

          }else{
           	 return '<a href="#" onClick="verCliente('.$clientes->id.');" class="btn btn-secondary btn-sm"><i class="fa fa-eye"></i></a>'.
                     '<a href="#" onClick="editaCliente('.$clientes->id.');" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>'.
                     '<a href="#" onClick="agregaMembresia('.$clientes->id.');" class="btn btn-success btn-sm"><i class="fa fa-address-card" aria-hidden="true"></i></i></a>'.
                     '<a href="'.url("/clientePdf/".$clientes->id).'" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></i></a>';
           }
           })


          ->make(true);

      }

      public function agregaCliente(Request $request)
      {



        $cliente=Clientes::create($request->all());
        $cliente->toArray();
        if ($request->imagen) {
          $request['foto']=$request['imagen'];
          $request['idUsuario']=$cliente['id'];
          Foto::create($request->all());
        }

        $notaPostOperatoria = NotaPostOperatoria::create($request->all());
        $notaPostOperatoria->update(['cliente_id' => $cliente->id]);

        $indicacionesQuirurgicas = Indicaciones::create($request->all());
        $indicacionesQuirurgicas->update(['cliente_id' => $cliente->id]);

        $notaMedica = NotaMedica::create($request->all());
        $notaMedica->update(['cliente_id' => $cliente->id]);

        $notaEgreso = NotaEgreso::create($request->all());
        $notaEgreso->update(['cliente_id' => $cliente->id]);

        $seguimientoQuirurgico = seguimiento_quirurgico::create($request->all());
        $seguimientoQuirurgico->update(['cliente_id_seccion8' => $cliente->id]);

        $hojaEnfermeriaUnidadQuirurgica = HojaEnfermeriaUnidadQuirurgica::create($request->all());
        $hojaEnfermeriaUnidadQuirurgica->update(['cliente_id' => $cliente->id]);

        $hojaEnfermeria = HojaEnfermeria::create($request->all());
        $hojaEnfermeria->update(['cliente_id' => $cliente->id]);

        $hojaEnfermeria2 = HojaEnfermeriaPart2::create($request->all());
        $hojaEnfermeria2->update(['cliente_id' => $cliente->id]);

        $hojaEnfermeria3 = HojaEnfermeriaPart3::create($request->all());
        $hojaEnfermeria3->update(['cliente_id' => $cliente->id]);

        return response()->json(['responseData'=>$cliente]);
      }

      public function eliminaPaciente(Request $request){
        $cliente=Clientes::destroy($request->id);
        return response()->json(['responseData'=>$cliente]);
      }

      public function listaMembresia(){
        return membresia::Select('membresia.id','membresia.nombre')
            ->where('nombre','LIKE','%'.request('q').'%')
            ->orwhere('id','LIKE','%'.request('q').'%')
            ->paginate(10);
      }


      public function agregarMembresiaCliente(Request $request)
      {
        $clienteMembresia=DetalleMembresiaCliente::create($request->all());
        $clienteMembresia->toArray();
        return response()->json(['responseData'=>$cliente]);
      }

      public function pdf($id){

        $clientes = Clientes::find($id);
        $notaPostOperatoria = NotaPostOperatoria::where('cliente_id', $id)->first();
        $indicaciones = Indicaciones::where('cliente_id', $id)->first();
        $notaMedica = NotaMedica::where('cliente_id', $id)->first();
        $notaEgreso = NotaEgreso::where('cliente_id', $id)->first();
        $seguimiento = seguimiento_quirurgico::where('cliente_id_seccion8', $id)->first();
        $hojaEnfermeria = HojaEnfermeria::where('cliente_id', $id)->first();
        $hojaEnfermeria2 = HojaEnfermeriaPart2::where('cliente_id', $id)->first();
        $hojaEnfermeria3 = HojaEnfermeriaPart3::where('cliente_id', $id)->first();
        $hojaEnfermeria3 = HojaEnfermeriaPart3::where('cliente_id', $id)->first();
        $hojaEnfermeriaUnidadQuirurgica = HojaEnfermeriaUnidadQuirurgica::where('cliente_id', $id)->first();

        dd($id);

        $pdf = PDF::loadView('pdf.cliente', ['clientes' => $clientes, 'notaPostOperatoria' => $notaPostOperatoria,'indicaciones'=> $indicaciones, 'notaMedica' => $notaMedica, 'notaEgreso' => $notaEgreso, 'seguimiento' => $seguimiento, 'hojaEnfermeria' => $hojaEnfermeria, 'hojaEnfermeria2' => $hojaEnfermeria2, 'hojaEnfermeria3' => $hojaEnfermeria3, 'hojaEnfermeriaUnidadQuirurgica' => $hojaEnfermeriaUnidadQuirurgica]);
        return $pdf->stream();

      }
}
