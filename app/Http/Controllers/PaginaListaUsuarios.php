<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class PaginaListaUsuarios extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    } 
    public function index(){
        return view('lista_usuarios');
    }
    // public function destroy(Request $request){
    //     $id = (int) $request->usuario;
    //     Login::destroy($id);
    //     return back();
    // }
}
