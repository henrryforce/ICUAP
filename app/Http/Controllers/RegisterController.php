<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        //dd($request->get('username'));
        //Modificar el request
        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request,[
            
            'user'=> 'required|unique:logins|min:3|max:20',            
            'password'=>'required|confirmed|min:6',
            'tipo_user'=>'required'
        ]);
        Login::create([
            'user'=> $request->user,
            'password'=> Hash::make( $request->password),
            'tipo_user' => $request->tipo_user
        ]);
        redirect()->route('administracion',auth()->user()->user);
    }
}
