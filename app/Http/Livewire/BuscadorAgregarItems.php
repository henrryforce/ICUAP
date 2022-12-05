<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Investigadore;

class BuscadorAgregarItems extends Component
{
    public $buscar='';
    public $investigadores=[];
    public $piecked=false;
    public $investigador;
    public function render()
    {
        return view('livewire.buscador-agregar-items');
    }
    public function updatedBuscar(){
        $this->validate([
            "buscar" => "required|min:2"
        ]);
        $this->investigadores = Investigadore::where('apellido_paterno','like',trim($this->buscar).'%')->take(3)->get();
    }
}
