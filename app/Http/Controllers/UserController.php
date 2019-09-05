<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use Validator;
use App\User;
use App\Foto;
use DB;
use Auth;

class UserController extends Controller
{
    public function index()
    {
      if (Auth::user()->usuarioPermiso) {
          return view('admin.user.index');
      }
      else {
        return view('layouts.permisos');
      }
    }

    public function registerUser(Request $request)
    {
      $request['password']=bcrypt($request['password']);
      $dere=User::create( $request->all());
      if ($request->imagen) {
        $request['foto']=$request['imagen'];
        $request['idUsuario']=$dere['id'];
        Foto::create($request->all());
      }
      $dere->toArray();
      return response()->json(['responseData' => $dere]);
    }

    public function buscarUser(Request $request)
    {
      $user=User::find($request->id);
      $user->toArray();

      $foto=DB::table('foto')->select('foto.*')->where('foto.idUsuario','=',$request->id)->get();
      return response()->json(['responseData' => $user,'responseData1' => $foto]);
    }

    public function updateUser(Request $request)
    {
        $request['idUsuario']=$request['id'];
	$request['foto']=$request['imagen'] ;
	$foto=DB::table('foto')->select('foto.*')->where('foto.idUsuario','=',$request->id)->first();
	if($foto && $request['imagen']){
       		$imagen=Foto::find($foto->id);
	        $imagen->fill($request->all());
	        $imagen->save();
	}else if($request['imagen']){
	        DB::table('foto')->insert(['idUsuario' =>$request['idUsuario'], 'foto' => $request['foto']]);
	
	  //      DB::table('foto')->update(['idUsuario' =>$request['idUsuario'], 'foto' => $request['foto']])->where('foto.idUsuario','=',$request->id)->get();
	
	}
      if($request['password']!= null){
        $request['password']=bcrypt($request['password']);
      }else{
        unset($request['password']);
      }
      $user=User::find($request->id);
      $user->fill($request->all());
      $user->save();
      $user->toArray(); 
      
       
      return response()->json(['responseData' => $user]);

    }

    public function deleteUser(Request $request)
    {
      $user = User::destroy($request->id);
      $otro="hola";
      return response()->json(['responseData' => $otro]);
    }

    public function apiUser()
    {
        $user=User::all();
        return  Datatables::of($user)
            ->addColumn('nombre',function($user){
                return  $user->name.'  '.$user->apePat.'  '.$user->apeMat;

        })
            ->addColumn('action',function($user){
                return '<button type="button" class="btn btn-secondary btn-sm" href="#" onClick="verUsuario('.$user->id.');"><i class="fa fa-eye"></i></button>'.
                        '<button type="button" href="#" onClick="actualizarUsuario('.$user->id.');" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>'.
                        '<button type="button" href="#" onClick="eliminarUsuario('.$user->id.');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>';

        })->make(true);
    }

    public function ajaxImageUploadPost(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      if ($validator->passes()) {

        $request['inputFile'] = time().'.'.$request->inputFile->getClientOriginalExtension();
        $request->image->move(public_path('images'), $request['inputFile']);
        $user=User::find($request->id);
        $user->fill($request->all());
        $user->save();

        return response()->json(['success'=>'done']);
      }
      return response()->json(['error'=>$validator->errors()->all()]);
    }

}
