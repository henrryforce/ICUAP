<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultasCharts extends Controller
{
    public function articulos(Request $request){
        return(DB::table('Articulos')->select('nombre','ano_publicacion')->where('investigador_id','=',$request->id)->orderBy('ano_publicacion')->get());
 }
 //select patentes.titulo, patentes.year from patentes where patentes.investigador_id=1 order by year asc;
 public function patentes(Request $request){
    return(DB::table('patentes')->select('titulo','anio_publicacion')->where('investigador_id','=',$request->id)->orderBy('anio_publicacion')->get());
}
}
