<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



class ResultadoBusquedaInvestigador extends Controller
{

    public function index(){       
        $da=session()->get('data');
        if(!isset($da[0]) ){
            return view('pagina_principal');
        }
        $articulosChart = DB::table('Articulos')->select('ano_publicacion',DB::raw('count(id) as total'))->where('investigador_id','=',$da[7])->groupBy('ano_publicacion')->get();
        $patentesChart = DB::table('patentes')->select('anio_publicacion',DB::raw('count(id) as total'))->where('investigador_id','=',$da[7])->groupBy('anio_publicacion')->get();
        return view('vista_usuarios',['articulosChart'=>$articulosChart,'patentesChart'=>$patentesChart]);
    }

}
