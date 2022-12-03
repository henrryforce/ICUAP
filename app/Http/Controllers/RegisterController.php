<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function store(Request $request){
        //dd($request->get('username'));
        //Modificar el request
        $request->request->add(['user' => Str::slug($request->user)]);

        // $this->validate($request,[
            
        //     'user'=> 'required|unique:logins|min:3|max:20',            
        //     'password'=>'required|confirmed|min:6',
        //     'tipo_user'=>'required'
        // ]);
        $validator = Validator::make($request->all(),[
                'user'=> 'required|unique:logins|min:3|max:20',            
            'password'=>'required|confirmed|min:6',
            'tipo_user'=>'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }else{
            Login::create([
            'user'=> $request->user,
            'password'=> Hash::make( $request->password),
            'tipo_user' => $request->tipo_user
        ]);
        return response()->json("ok",200);
        redirect()->route('administracion',auth()->user()->user);
        }
        
    }
}
