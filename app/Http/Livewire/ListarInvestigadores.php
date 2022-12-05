<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Investigadore;
use App\Models\Centros_Adscripcion;
use App\Models\Areas_interese;
use App\Models\Correo;
class ListarInvestigadores extends Component
{
   

    public function render()
    {
        return view('livewire.listar-investigadores',['investigadores'=> Investigadore::all(),'correos'=> Correo::all(),'centros'=>Centros_Adscripcion::all(),'areasInteres'=>Areas_interese::all()]);
    }
    public function eliminarInvestigador($id){
        $investigador = Investigadore::find((int) $id);
        Correo::destroy($investigador->correo_id);
       Investigadore::destroy((int)$id);
    }
}
