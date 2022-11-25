<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function store(Request $request){
        $this->validate($request,['nombre'=>'required']);
        Journal::create([
            'nombre'=> $request->nombre
        ]);
        return("{\"respuesta\":200}");
    }
}
