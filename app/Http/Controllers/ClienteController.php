<?php

namespace App\Http\Controllers;

use Auth;
use Yajra\DataTables\Datatables;
use App\Clientes;
use Illuminate\Http\Request;
use App\User;
use App\membresia;
use App\DetalleMembresiaCliente;
use App\Foto;
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
        return response()->json(['responseData'=>$cliente,'responseData1' => $foto]);
      }

      public function editarCliente(Request $request)
      {
        $cliente=Clientes::find($request->id);
        $cliente['barcode']=DNS1D::getBarcodePNG($cliente['id'],'C39');
        $cliente->toArray();
        $foto=DB::table('foto')->select('foto.*')->where('foto.idUsuario','=',$request->id)->get();
        return response()->json(['responseData'=>$cliente,'responseData1' => $foto]);
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
                     '<a href="#" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></i></a>';

          }else{
           	 return '<a href="#" onClick="verCliente('.$clientes->id.');" class="btn btn-secondary btn-sm"><i class="fa fa-eye"></i></a>'.
                     '<a href="#" onClick="editaCliente('.$clientes->id.');" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>'.
                     '<a href="#" onClick="agregaMembresia('.$clientes->id.');" class="btn btn-success btn-sm"><i class="fa fa-address-card" aria-hidden="true"></i></i></a>'.
                     '<a href="#" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></i></a>';
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

      public function pdf(){
        
        $pdf = PDF::loadHtml('<h1>Test</h1>');
        return $pdf->stream();

      }
}
