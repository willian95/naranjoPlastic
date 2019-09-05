<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EstadosController extends Controller
{
    function obtenerId($pais_id){

        $estados = DB::table('estados')->where('pais_id', $pais_id)->get();
        return response()->json(['estados' => $estados]);

    }
}
