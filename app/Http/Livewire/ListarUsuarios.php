<?php

namespace App\Http\Livewire;

use App\Models\Login;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ListarUsuarios extends Component
{
    public $idUser;
    public $usuario;
    public $password;
    public $password_confirmation;
    public $tipoUser;
    public $actualizarP = false;
    protected $rules = [
        'usuario' => 'required|unique:logins,user|min:3|max:20',
        'password' => 'required|confirmed|min:6',
        'tipoUser' => 'required'
    ];
    public function render()
    {
        return view('livewire.listar-usuarios', ['usuarios' => Login::all('id', 'user', 'tipo_user')]);
    }
    public function borrarUsuario($id)
    {
        Login::destroy((int) $id);
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        if ($this->actualizarP) {
            $this->validate([
                'usuario' => 'required|min:3|max:20',
                'password' => 'required|confirmed|min:6',
                'tipoUser' => 'required'
            ]);
            $user = Login::find((int) $this->idUser);
            $user->user = $this->usuario;
            $user->password = Hash::make($this->password);
            $user->tipo_user = $this->tipoUser;
            $user->save();
            $this->reset('usuario');
            $this->reset('password');
            $this->reset('password_confirmation');
            $this->tipoUser = 0;
        } else {
            $this->validate([
                'usuario' => 'required|min:3|max:20',
                'tipoUser' => 'required'
            ]);
            $user = Login::find((int) $this->idUser);
            $user->user = $this->usuario;
            $user->tipo_user = $this->tipoUser;
            $user->save();
            $this->reset('usuario');
            $this->tipoUser = 0;
        }
        $this->actualizarP =false;
        session()->flash('message', 'Usuario Editado con exito');
        $this->usuarios = Login::all('id', 'user', 'tipo_user');
    }
    public function editarUsuario($user, $tipo, $id)
    {
        $this->tipoUser = $tipo;
        $this->usuario = $user;
        $this->idUser = $id;
        $this->usuarios = Login::all('id', 'user', 'tipo_user');
    }
}
