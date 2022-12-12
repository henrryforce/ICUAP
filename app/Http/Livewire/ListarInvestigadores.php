<?php

namespace App\Http\Livewire;

use App\Models\Correo;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Investigadore;
use App\Models\Areas_interese;
use App\Models\Centros_Adscripcion;

class ListarInvestigadores extends Component
{
   public $nombres;
   public $apellidoPaterno;
    public $apellidoMaterno;
    public $centro;
   public $correo;
   public $areas;
   public $idInves;
   protected $rules = [
    'nombres' =>'required',
    'apellidoPaterno'=>'required',
    'apellidoMaterno'=>'required',
    'correo'=>'required|email',
    'centro'=>'required',
    'areas'=>'required|max:50'
];
    public function render()
    {
        return view('livewire.listar-investigadores',['investigadores'=> Investigadore::all(),'correos'=> Correo::all(),'centros'=>Centros_Adscripcion::all(),'areasInteres'=>Areas_interese::all()]);
    }
    public function eliminarInvestigador($id){
        $investigador = Investigadore::find((int) $id);
        Correo::destroy($investigador->correo_id);
       Investigadore::destroy((int)$id);
    }
    public function editarInvestigador($id,$nombres,$apellidoPaterno,$apellidoMaterno,$centro,$idCorreo){
        $this->nombres=$nombres;
        $this->apellidoPaterno=$apellidoPaterno;
        $this->apellidoMaterno=$apellidoMaterno;
        $this->centro=$centro;
        $email =Correo::find((int) $idCorreo);
        $this->correo=$email->nombre;
         $areasBD=Areas_interese::where('investigador_id',(int) $id)->get();
         $arrayAreas=[];
         foreach($areasBD as $area){
            array_push($arrayAreas,$area->nombre);
         }         
         $this->areas=implode(',',$arrayAreas);
        $this->idInves=$id;
    }
    public function resetModal(){
        $this->reset('nombres');
        $this->reset('apellidoPaterno');
        $this->reset('apellidoMaterno');
        $this->reset('correo');
        $this->reset('areas');
        
    }
    public function submit(){
        $this->validate();
        $investigador=Investigadore::find((int) $this->idInves);
        $correo=Correo::find((int)$investigador->correo_id);
        Areas_interese::where('investigador_id',(int) $investigador->id)->delete();
        $areasNuevas = Str::of($this->areas)->split('/[\s,]+/');
        foreach($areasNuevas as $insertArea){
            Areas_interese::create([
                'nombre'=>$insertArea,
                'investigador_id'=>$investigador->id
            ]);
        }
        $correo->nombre=$this->correo;
        $correo->save();
        $investigador->nombres=$this->nombres;
        $investigador->apellido_paterno=$this->apellidoPaterno;
        $investigador->apellido_materno=$this->apellidoMaterno;
        $investigador->centro_adscripcion_id=$this->centro;
        $investigador->save();
        $this->reset();
        session()->flash('message', 'Investigador editado con exito');
    }
}
