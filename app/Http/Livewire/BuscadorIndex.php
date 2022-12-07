<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Investigadore;

class BuscadorIndex extends Component
{
    public $buscar='';
    public $investigadores=[];
    public $piecked=false;
    public $idInvestigador;
    public function render()
    {
        return view('livewire.buscador-index');
    }
    public function updatedBuscar(){
        if($this->buscar==''){
            $this->piecked=false;
        }
        if(!$this->piecked){
            $this->validate([
            "buscar" => "required"
        ]);
        // $this->investigadores = Investigadore::where('apellido_paterno','like',trim($this->buscar).'%')->take(3)->get();
        $this->investigadores = Investigadore::orWhere('apellido_paterno','like',trim($this->buscar).'%')->orWhere('apellido_materno','like',trim($this->buscar).'%')->orWhere('nombres','like',trim($this->buscar).'%')->get();
        }else{
            $this->investigadores=[];
        }
    }
    public function verInvestigador($id){
        dump($id);
    }
    public function reoverInvestigadorSeleccionado(){
        $this->piecked=false;
        $this->idInvestigador='';
        $this->investigadores=[];
       }
}
