<?php

namespace App\Http\Livewire;

use App\Http\Controllers\ResultadoBusquedaInvestigador;
use App\Models\Correo;
use App\Models\Journal;
use App\Models\Patente;
use Livewire\Component;
use App\Models\Articulo;
use App\Models\Investigadore;
use App\Models\Areas_interese;
use App\Models\Centros_Adscripcion;

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
       $investigador= Investigadore::find((int)$id);
       $correo = Correo::find((int) $investigador->correo_id);
       $centro = Centros_Adscripcion::find((int) $investigador->centro_adscripcion_id);
       $areas = Areas_interese::where('investigador_id',$investigador->id)->get();
       $patentes = Patente::where('investigador_id',$investigador->id)->get();
       $articulos = Articulo::where('investigador_id',$investigador->id)->get();
       $journals = Journal::all();
       return redirect()->route('resultadoBusquedaInvestigador')->with('data',[$investigador,$correo,$centro,$areas,$patentes,$articulos,$journals,$id]);
    }
    public function reoverInvestigadorSeleccionado(){
        $this->piecked=false;
        $this->idInvestigador='';
        $this->investigadores=[];
       }
}
