<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class Contacto extends Component
{
    public $nombre;
    public $correo;
    public $mensaje;
    protected $rules=[
        'nombre'=>'required',
        'correo'=>'required|email',
        'mensaje'=>'required'
    ];
    public function render()
    {
        return view('livewire.contacto');
    }
    public function formEmail(){
        $this->validate();
        Mail::to('luis15ago98@gmail.com')->send(new ContactoMail($this->nombre,$this->correo,$this->mensaje));
        session()->flash('message', 'Correo enviado con exito');
        $this->reset();
    }
}
