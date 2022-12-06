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
    public $patente=[];
    public $articulos=[];
    public $redes=[];
    public $patenteSelected=false;
    public $pNombre;
    public $pFecha;
    public $pResume;
    public $idPatente;
    public $editarp=false;
    protected $rules = [
        'pNombre' =>'required',
        'pFecha'=>'required',
        'pResume'=>'required|min:50|max:1500',
        
    ];
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
        $this->patentes=Patente::where('investigador_id',$id)->get();
        
    }
    public function clickPatente(){
        $this->patenteSelected = true;
    }
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function AgregarPatente(){
        $this->validate(['pNombre' =>'required',
        'pFecha'=>'required',
        'pResume'=>'required|min:50|max:1500'

        ]);
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
    public function eliminarPatente($id){
        Patente::destroy((int) $id);
    }
    public function editarPatente($id,$titulo,$fecha,$resumen){
        $this->editarp=true;
        $this->pNombre=$titulo;
        $this->pFecha=$fecha;
        $this->pResume=$resumen;
        
        // $this->pFecha=$this->patente->year;
        // $this->pResume=$this->patente->resumen;
    }
    
}
