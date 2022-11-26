<?php

namespace App\Http\Controllers;

use App\Models\Correo;
use App\Models\Journal;
use Illuminate\Http\Request;

class CrearInvertagorController extends Controller
{
    public function store(Request $request){
         $this->validate($request,[
            'correo'=>'required',
            'journal'=>'required'
        ]);
       /*  
        Journal::create([
            'nombre'=> $request->journal
        ]);
        Correo::create([
            'nombre'=>$request->correo
        ]); */
        return("{\"respuesta\":200}");
    }
}
