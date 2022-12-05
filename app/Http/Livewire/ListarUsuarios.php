<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Login;

class ListarUsuarios extends Component
{
    public function render()
    {
        return view('livewire.listar-usuarios',['usuarios'=> Login::all('id','user','tipo_user')]);
    }
    public function borrarUsuario($id){       
        Login::destroy((int) $id);
    }

}
