<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompletarInvestigadores extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    } 
    public function index(){
        return view('auth.detalles_investigador');
    }
}
