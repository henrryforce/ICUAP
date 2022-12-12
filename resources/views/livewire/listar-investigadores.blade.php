<div>
    @foreach ($investigadores as $investigador)
        <div class=" rounded overflow-hidden shadow-lg">
            <img class="h-[280px] w-auto ml-0" src="{{ asset('img/logo_cards.png') }}" alt="Inserte una imagen">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $investigador->nombres }} {{ $investigador->apellido_paterno }}
                    {{ $investigador->apellido_materno }}</div>

                @foreach ($correos as $correo)
                    @if ($correo->id == $investigador->correo_id)
                        <p class="decoration-solid">Correo: {{ $correo->nombre }}</p>
                    @endif
                @endforeach
                @foreach ($centros as $centro)
                    @if ($centro->id == $investigador->centro_adscripcion_id)
                        <p class="decoration-solid">Centro de adscripcion: {{ $centro->nombre }}</p>
                    @endif
                @endforeach
            </div>
            <div class="px-6 pt-4 pb-2">
                @foreach ($areasInteres as $areaInteres)
                    @if ($areaInteres->investigador_id == $investigador->id)
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $areaInteres->nombre }}</span>
                    @endif
                @endforeach
                <button type="button" wire:click="eliminarInvestigador('{{ $investigador->id }}')"
                    class="py-2.5 px-5 ml-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#b9372d] rounded-full ">Eliminar</button>
                <button type="button" wire:click="editarInvestigador('{{$investigador->id}}','{{$investigador->nombres}}','{{ $investigador->apellido_paterno }}','{{ $investigador->apellido_materno }}','{{$investigador->centro_adscripcion_id}}','{{$investigador->correo_id}}')"
                    class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#003B5C] rounded-full "
                    data-bs-toggle="modal" data-bs-target="#editarInvestigador">Editar</button>
            </div>
            <div class="flex justify-end">

            </div>
        </div>
        <div id="relleno"></div>
    @endforeach
    <div  wire:ignore.self class="modal fade bd-example-modal-lg" id="editarInvestigador" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <label for="tipo_user"
                        class="mb-2 block uppercase text-gray-500 font-bold pd:none">Editar usuario</label>
                    <button type="button" data-bs-dismiss="modal" wire:click='resetModal' aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Agregar el livewire -->
                    <div class="bg-green-400 text-white my-2 rounded-lg text-sm p2 text-center">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <form wire:submit.prevent="submit" method="POST">
                        <div class="mb-2">
                            <label class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                            <input wire:model='nombres' type="text" class="border w-full p-2 rounded-lg ">
                            @error('nombres')
                                <div class="input-group mb3"> <span
                                        class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="mb-2 block uppercase text-gray-500 font-bold">Primer apellido</label>
                            <input wire:model='apellidoPaterno' type="text" class="border w-full p-2 rounded-lg ">
                            @error('apellidoPaterno')
                                <div class="input-group mb3"> <span
                                        class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="mb-2 block uppercase text-gray-500 font-bold">Segundo apellido</label>
                            <input wire:model='apellidoMaterno' type="text" class="border w-full p-2 rounded-lg ">
                            @error('apellidoMaterno')
                                <div class="input-group mb3"> <span
                                        class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                            <input wire:model='correo' type="text" class="border w-full p-2 rounded-lg ">
                            @error('correo')
                                <div class="input-group mb3"> <span
                                        class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="mb-2 block uppercase text-gray-500 font-bold">Centro de adscripción</label>
                            <select class="form-control" wire:model="centro" id="centroOPt">
                                <option value="0">Selecciona una opcion</option>
                                @foreach ($centros as $centro)
                                    <option value="{{ $centro->id }}">{{ $centro->nombre }}</option>
                                @endforeach
                            </select>
                            @error('centro')
                                <div class="input-group mb3"> <span
                                        class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="mb-2 block uppercase text-gray-500 font-bold">Area de interes</label>
                            <input wire:model='areas' name="user" type="text"
                                class="border w-full p-2 rounded-lg ">
                            @error('areas')
                                <div class="input-group mb3"> <span
                                        class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <input type="submit" id="btnAltaUser" value="Guardar cambios"
                            class="bg-[#003B5C] font-bold w-100 p-3 text-white rounded-lg mt-2" />
                    </form>
                </div><!-- Fin modal body -->
            </div>
        </div>
    </div>
</div>
