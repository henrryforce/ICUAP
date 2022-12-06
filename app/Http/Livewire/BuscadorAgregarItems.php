<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Investigadore;
use App\Models\Patente;

class BuscadorAgregarItems extends Component
{
    public $buscar='';
    public $investigadores=[];
    public $piecked=false;
    public $idInvestigador;
    public $patentes=[];
    public $articulos=[];
    public $redes=[];
    public $patenteSelected=false;
    public $pNombre;
    public $pFecha;
    public $pResume;
    public function render()
    {
        return view('livewire.buscador-agregar-items');
    }
    public function updatedBuscar(){
        if($this->buscar==''){
            $this->piecked=false;
        }
        if(!$this->piecked){
            $this->validate([
            "buscar" => "required|min:2"
        ]);
        $this->investigadores = Investigadore::where('apellido_paterno','like',trim($this->buscar).'%')->take(3)->get();
        }else{
            $this->investigadores=[];
        }
    }
    public function asignarInvestigador($id,$nombre){
        $this->idInvestigador = $id;
        $this->buscar = $nombre;
        $this->piecked = true;
        
    }
    public function clickPatente(){
        $this->patenteSelected = true;
    }
    public function AgregarPatente(){
        Patente::create([
            'titulo'=>$this->pNombre,
            'resumen'=>$this->pResume,
            'year'=>$this->pFecha,
            'investigador_id'=>$this->idInvestigador
        ]);
        $this->reset('pNombre');
        $this->reset('pResume');
        $this->reset('pFecha');
        session()->flash('message', 'Usuario Agregado con exito');
        
    }
}
