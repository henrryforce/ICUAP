<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investigadore;
use App\Models\Correo;
class ListadoInvestigadoresController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    } 
    public function index(){
        return view('listado_investigadores');
    }
    public function destroy(Request $request){
        $id = (int) $request->investigador;
        $investigador = Investigadore::find($id);
        Correo::destroy($investigador->correo_id);
       Investigadore::destroy($request->investigador);
       return back();
    }
}
