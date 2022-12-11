<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaginaListaUsuarios extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        
    } 
    public function index(){
        $user = Auth::user();
        if($user->tipo_user !=1){
            return back();
        }
        return view('lista_usuarios');
    }
    // public function destroy(Request $request){
    //     $id = (int) $request->usuario;
    //     Login::destroy($id);
    //     return back();
    // }
}
