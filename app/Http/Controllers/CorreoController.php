<?php

namespace App\Http\Controllers;

use App\Models\Correo;
use Illuminate\Http\Request;


class CorreoController extends Controller
{
    public function store(Request $request){
        $this->validate($request,['nombre'=>'required|email']);
        Correo::create([
            'nombre'=> $request->nombre
        ]);
        return("{\"respuesta\":200}");
    }
}
