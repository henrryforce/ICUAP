<?php

namespace App\Http\Livewire;

use App\Models\Login;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ModalUsersSistema extends Component
{
    public $usuario;
    public $password;
    public $password_confirmation;
    public $tipoUser;
    protected $rules =[
        'usuario'=>'required|unique:logins,user|min:3|max:20',
        'password'=>'required|confirmed|min:6',
        'tipoUser'=>'required|exists:tipos_users,id'
    ];
    public function render()
    {
        return view('livewire.modal-users-sistema');
    }
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function submit(){
        $this->validate();
        Login::create([
            'user'=>$this->usuario,
            'password'=> Hash::make( $this->password),
            'tipo_user'=>$this->tipoUser
        ]);
        $this->reset();
        session()->flash('message', 'Usuario Agregado con exito');
    }
}
