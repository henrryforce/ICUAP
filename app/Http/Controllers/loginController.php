<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class loginController extends Controller
{
    public function index() {
        return view('auth.login');
    }
    public function store(Request $request){
        $this->validate($request,[
            'user' =>'required',
            'password'=> 'required'
        ]);
        if(!auth()->attempt($request->only('user','password'),$request->remember)){
            return back()->with('mensaje','Credenciales incorrectas');
        }
        return redirect()-> route('administracion',auth()->user()->user);
    }
}
