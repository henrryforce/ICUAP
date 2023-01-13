<?php

namespace App\Http\Livewire;

use App\Models\Patente;
use Livewire\Component;
use App\Models\Articulo;
use App\Models\Investigadore;
use App\Models\Journal;
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
    public $articuloSelected=false;
    public $pNombre;
    public $pFecha;
    public $pResume;
    public $idPatente='';
    public $idRed='';
    public $nombreR;
    public $tipoR;
    public $idArticulo;
    public $tituloArt;
    public $autoresA;
    public $fechaArt;
    public $doiArt;
    public $journalArt;
    public $journalId;
    public $editarArticulo=false;
    public $editarRed=false;
    public $editarp=false;
    protected $rules = [
        'pNombre' =>'required',
        'pFecha'=>'required',
        'pResume'=>'required|min:50|max:1500',
        'nombreR'=>'required',
            'tipoR'=>'required'
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
        $this->investigadores = Investigadore::orWhere('apellido_paterno','like',trim($this->buscar).'%')->orWhere('apellido_materno','like',trim($this->buscar).'%')->orWhere('nombres','like',trim($this->buscar).'%')->take(5)->get();
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
        $this->articulos=Articulo::where('investigador_id',$id)->get();
        
        
    }
    public function clickPatente(){
        $this->patenteSelected = true;
        $this->redSelected =false;
        $this->articuloSelected=false;
    }
    public function clickRed(){
        $this->patenteSelected = false;
        $this->redSelected =true;
        $this->articuloSelected=false;
    }
    public function clickArti(){
        $this->patenteSelected = false;
        $this->redSelected =false;
        $this->articuloSelected=true;
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
            $findPat->anio_publicacion=$this->pFecha;
            $findPat->resumen=trim($this->pResume);
            $findPat->save();
            session()->flash('message', 'Patente Editada con exito');
            
        }else{       
        Patente::create([
            'titulo'=>$this->pNombre,
            'resumen'=>trim($this->pResume),
            'year'=>$this->pFecha,
            'investigador_id'=>$this->idInvestigador
        ]);
        session()->flash('message', 'Patente Agregado con exito');
     }
        $this->reset('pNombre');
        $this->reset('pResume');
        $this->reset('pFecha');
        $this->editarp=false; 
        $this->patentes=Patente::where('investigador_id',$this->idInvestigador)->get();       
    }
    public function AgregarRedes(){
        $this->validate([
            'nombreR'=>'required',
            'tipoR'=>'required|exists:tipos_redes_institucionales,id'
        ]);
        if($this->editarRed){
            $findRed = Red_institucional::find((int) $this->idRed);
            $findRed->nombre=$this->nombreR;
            $findRed->tipo_red_institucion_id=$this->tipoR;
            $findRed->save();
            session()->flash('message', 'Red Editada con exito');
            
        }else{
           
            Red_institucional::create([
                'nombre'=>$this->nombreR,
                'tipo_red_institucion_id'=>$this->tipoR,
                'investigador_id'=>$this->idInvestigador
            ]);
            session()->flash('message', 'Red Institucional agregada con exito');
        }
        
        $this->reset('nombreR');
        $this->tipoR=0;
        $this->editarRed=false;
        $this->redes=Red_institucional::where('investigador_id',$this->idInvestigador)->get();
    }
    public function agregarArticulo(){
        $this->validate([
            'tituloArt'=>'required',
            'autoresA'=>'required',
            'fechaArt'=>'required',
            'doiArt'=>'required',
            'journalArt'=>'required',
            
        ]);
        if($this->editarArticulo){
            $art = Articulo::find((int)$this->idArticulo);
            $jour = Journal::find((int) $this->journalId);
            $art->nombre =$this->tituloArt;
            $art->ano_publicacion=$this->fechaArt;
            $art->doi=$this->doiArt;
            $art->autores =$this->autoresA;
            $art->save();
            $jour->nombre=$this->journalArt;
            $jour->save();
            session()->flash('message', 'Articulo editado con exito');
        }else{
            $joural= Journal::create([
                'nombre'=>$this->journalArt
            ]);
            Articulo::create([
                'nombre'=>$this->tituloArt,
                'ano_publicacion'=>$this->fechaArt,
                'doi'=>$this->doiArt,
                'autores'=>$this->autoresA,
                'journal_id'=>$joural->id,
                'investigador_id'=>$this->idInvestigador
            ]);
            session()->flash('message', 'Articulo agregado con exito');
        }
        $this->reset('tituloArt');
        $this->reset('fechaArt');
        $this->reset('doiArt');
        $this->reset('autoresA');
        $this->reset('journalArt');
        $this->editarArticulo=false;
        $this->articulos=Articulo::where('investigador_id',$this->idInvestigador)->get();
    }
    public function getJournal($id){
        $journalName=Journal::find((int) $id);
        return $journalName->nombre;
    }
    public function eliminarPatente($id){
        Patente::destroy((int) $id);
    }
    public function eliminarRed($id){
        Red_institucional::destroy((int) $id);
    }
    public function eliminarArticulo($id){
        $art=Articulo::find((int) $id);
        Articulo::destroy((int) $id);
        Journal::destroy((int) $art->journal_id);
        $this->articulos=Articulo::where('investigador_id',$this->idInvestigador)->get();
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
    public function editarArticulo($id,$nombre,$year,$doi,$autores,$journalid,$journalNombre){
        $this->idArticulo=$id;
        $this->tituloArt=$nombre;
        $this->fechaArt=$year;
        $this->doiArt=$doi;
        $this->autoresA=$autores;
        $this->journalArt=$journalNombre;
        $this->journalId=$journalid;
        $this->editarArticulo=true;
    }
   public function reoverInvestigadorSeleccionado(){
    $this->piecked=false;
    $this->idInvestigador='';
    $this->investigadores=[];
   }

    
}
