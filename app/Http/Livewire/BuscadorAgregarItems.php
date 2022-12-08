<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Investigadore;
use App\Models\Patente;
use App\Models\Red_institucional;

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
    public $redSelected=false;
    public $pNombre;
    public $pFecha;
    public $pResume;
    public $idPatente='';
    public $nombreR;
    public $tipoR;
    public $idRed='';
    public $editarRed=false;
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
            "buscar" => "required"
        ]);
        // $this->investigadores = Investigadore::where('apellido_paterno','like',trim($this->buscar).'%')->take(3)->get();
        $this->investigadores = Investigadore::orWhere('apellido_paterno','like',trim($this->buscar).'%')->orWhere('apellido_materno','like',trim($this->buscar).'%')->orWhere('nombres','like',trim($this->buscar).'%')->get();
        }else{
            $this->investigadores=[];
        }
    }
    
    public function asignarInvestigador($id,$nombre){
        $this->idInvestigador = $id;
        $this->buscar = $nombre;
        $this->piecked = true;
        $this->patentes=Patente::where('investigador_id',$id)->get();
        $this->redes=Red_institucional::where('investigador_id',$id)->get();
        
    }
    public function clickPatente(){
        $this->patenteSelected = true;
        $this->redSelected =false;
    }
    public function clickRed(){
        $this->patenteSelected = false;
        $this->redSelected =true;
    }
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function AgregarPatente(){
        $this->validate(['pNombre' =>'required',
        'pFecha'=>'required',
        'pResume'=>'required|min:50|max:1500'
        ]);
        if($this->editarp){
           $findPat=Patente::find((int) $this->idPatente);
            $findPat->titulo=$this->pNombre;
            $findPat->year=$this->pFecha;
            $findPat->resumen=$this->pResume;
            $findPat->save();
            session()->flash('message', 'Patente Editada con exito');
            $this->patentes=Patente::where('investigador_id',$this->idInvestigador)->get();
        }else{       
        Patente::create([
            'titulo'=>$this->pNombre,
            'resumen'=>$this->pResume,
            'year'=>$this->pFecha,
            'investigador_id'=>$this->idInvestigador
        ]);
        session()->flash('message', 'Patente Agregado con exito');
     }
        $this->reset('pNombre');
        $this->reset('pResume');
        $this->reset('pFecha');        
    }
    public function AgregarRedes(){
        $this->validate([
            'nombreR'=>'required',
            'tipoR'=>'required'
        ]);
        if($this->editarRed){
            $findRed = Red_institucional::find((int) $this->idRed);
            $findRed->nombre=$this->nombreR;
            $findRed->tipo_red_institucion_id=$this->tipoR;
            $findRed->save();
            session()->flash('message', 'Red Editada con exito');
        }else{
            $this->validate([
                'tipoR'=> 'required',
                'nombreR'=>'required'
            ]);
            Red_institucional::create([
                'nombre'=>$this->nombreR,
                'tipo_red_institucion_id'=>$this->tipoR,
                'investigador_id'=>$this->idInvestigador
            ]);
            session()->flash('message', 'Red Institucional agregada con exito');
        }
        $this->redes=Red_institucional::where('investigador_id',$this->idInvestigador)->get();
        $this->reset('nombreR');
        $this->tipoR=0;

    }
    public function eliminarPatente($id){
        Patente::destroy((int) $id);
    }
    public function eliminarRed($id){
        Red_institucional::destroy((int) $id);
    }
    public function editarPatente($id,$titulo,$fecha,$resumen){
        $this->editarp=true;
        $this->idPatente =$id;
        $this->pNombre=$titulo;
        $this->pFecha=$fecha;
        $this->pResume=$resumen;
    }
    public function editarRed($id,$nombre,$tipo){
        $this->nombreR=$nombre;
        $this->idRed=$id;
        $this->tipoR=$tipo;
        $this->editarRed=true;
    }
   public function reoverInvestigadorSeleccionado(){
    $this->piecked=false;
    $this->idInvestigador='';
    $this->investigadores=[];
   }
    
}
