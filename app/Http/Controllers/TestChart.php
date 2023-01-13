<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;




class TestChart extends Controller
{
    //
        
    public function index(Request $request){
        $articulos = DB::table('Articulos')->select('ano_publicacion',DB::raw('count(id) as total'))->where('investigador_id','=',$request->id)->groupBy('ano_publicacion')->get();
        $patentes = DB::table('patentes')->select('anio_publicacion',DB::raw('count(id) as total'))->where('investigador_id','=',$request->id)->groupBy('anio_publicacion')->get();
        return view("testchart",['articulos'=>$articulos, 'patentes'=>$patentes]);
    }
}
