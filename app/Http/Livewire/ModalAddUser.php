<?php

namespace App\Http\Livewire;
use App\Models\Correo;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Investigadore;
use App\Models\Centros_Adscripcion;
use App\Models\Areas_interese;

class ModalAddUser extends Component
{
    public $nombres;
    public $apellidoPat;
    public $apellidoMat;
    public $email;
    public $centroOPt;
    public $area;
    
    protected $rules = [
        'nombres' =>'required',
        'apellidoPat'=>'required',
        'apellidoMat'=>'required',
        'email'=>'required|email',
        'centroOPt'=>'required',
        'area'=>'required|max:50'
    ];
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.modal-add-user',['centros' => Centros_Adscripcion::all()]);
    }
    public function submit(){
        $this->validate();
        $correobd = Correo::create([
            'nombre'=> $this->email
        ]);
        $investigador = Investigadore::create([
            'nombres'=>$this->nombres,
            'apellido_paterno'=>$this->apellidoPat,
            'apellido_materno'=>$this->apellidoMat,
            'correo_id'=>$correobd->id,
            'centro_adscripcion_id'=>$this->centroOPt
        ]);
        $areas = Str::of($this->area)->split('/[\s,]+/');
        foreach($areas as $insertArea){
            Areas_interese::create([
                'nombre'=>$insertArea,
                'investigador_id'=>$investigador->id
            ]);
        }
        $this->reset();
        session()->flash('message', 'Usuario Agregado con exito');
    }
    
}
