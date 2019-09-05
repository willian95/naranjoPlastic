<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use App\User;
use Auth;
use App\TipoCambio;
use Illuminate\Support\Facades\DB;

class tipoCambioController extends Controller
{
    public function index()
    {
      if (Auth::user()->tipoCambio) {
        return view('admin.tipoCambio.index');
      }
      else {
        return view('layouts.permisos');
      }
    }

    public function registerTipoCambio(Request $request)
    {


      $request['idUser']= Auth::user()->id;
      $dere=TipoCambio::create( $request->all());

      $dere->toArray();
      return response()->json(['responseData' => $dere]);
    }

    public function apiTipoCambio()
    {
        $user= DB::table('users')->join('tipocambio', 'users.id', '=', 'tipocambio.idUser')
            ->select('users.name as nombre', 'users.apePat as apellidoP','users.apeMat','tipocambio.*' )
            ->get();
        return  Datatables::of($user) ->addColumn('nombre',function($user){
              return $user->nombre.' '.$user->apellidoP.' '.$user->apeMat;

        })->addColumn('fecha',function($user){
              return date('d-m-Y',strtotime($user->created_at));

      })->make(true);
    }
}
