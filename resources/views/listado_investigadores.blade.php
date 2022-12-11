@extends('layouts.app')
@section('contenido')
    <div id="relleno-nav"></div>
    <div class="flex justify-center ">
        <livewire:listar-investigadores />
        
    </div>
    <div class="modal fade bd-example-modal-lg" id="editarInvestigador" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <label for="tipo_user" class="mb-2 block uppercase text-gray-500 font-bold pd:none">Editar usuario</label>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                   <!-- Agregar el livewire -->
                   <div class="mb-2">
                        <label for="#" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                        <input id="#"  name="#" type="text" class="border w-full p-2 rounded-lg ">
                    </div>
                    <div class="mb-2">
                        <label for="#" class="mb-2 block uppercase text-gray-500 font-bold">Primer apellido</label>
                        <input id="#"  name="#" type="text" class="border w-full p-2 rounded-lg ">
                    </div>
                    <div class="mb-2">
                        <label for="#" class="mb-2 block uppercase text-gray-500 font-bold">Segundo apellido</label>
                        <input id="#"  name="#" type="text" class="border w-full p-2 rounded-lg ">
                    </div>
                    <div class="mb-2">
                        <label for="#" class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                        <input id="#"  name="#" type="text" class="border w-full p-2 rounded-lg ">
                    </div>
                    <div class="mb-2">
                        <label for="#" class="mb-2 block uppercase text-gray-500 font-bold">Centro de adscripción</label>
                        <input id="#"  name="user" type="text" class="border w-full p-2 rounded-lg ">
                    </div>
                    <div class="mb-2">
                        <label for="#" class="mb-2 block uppercase text-gray-500 font-bold">Area de interes</label>
                        <input id="#"  name="user" type="text" class="border w-full p-2 rounded-lg ">
                    </div>
                    <input type="submit" id="btnAltaUser" value="Guardar cambios" class="bg-[#003B5C] font-bold w-100 p-3 text-white rounded-lg mt-2" />
                </div><!-- Fin modal body -->
            </div>
        </div>
    </div>
    <div id="relleno"></div>
@endsection
