<?php

namespace App\Http\Controllers;



class ResultadoBusquedaInvestigador extends Controller
{

    public function index(){       
        $da=session()->get('data');
        if(!isset($da[0]) ){
            return view('pagina_principal');
        }
        return view('vista_usuarios');
    }

}
