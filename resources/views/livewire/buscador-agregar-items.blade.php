<div>
    <form class="flex items-center md:w-1/2 mx-auto mt-20">
        <label for="voice-search" class="sr-only">Buscar</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" wire:model="buscar" id="apellido"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Ingresa el Apellido">
            @error('buscar')
                <div class="input-group mb3"> <span
                        class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                </div>
            @enderror
            <div class="shadow rounded px-3 pt-3 pb-0">
                @if (!$piecked)
                    @foreach ($investigadores as $inves)
                        <div style="cursor: pointer;">
                            <a
                                wire:click="asignarInvestigador('{{ $inves->id }}','{{ $inves->nombres }} {{ $inves->apellido_paterno }} {{ $inves->apellido_materno }}')">
                                {{ $inves->nombres }} {{ $inves->apellido_paterno }} {{ $inves->apellido_materno }}
                            </a>
                        </div>
                        </br>
                    @endforeach
                @endif
            </div>
        </div>
        <button type="submit"
            class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-[#003B5C] rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>Buscar
        </button>
    </form>
    @if ($piecked)
        <div id="root">
            <div class="border-b border-gray-200 dark:border-gray-700 md:w-1/2 mx-auto mt-9">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                    <li class="mr-2">
                        <a href="#" wire:click='clickPatente'
                            class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent"><i
                                class="mr-2 w-5 h-5 bi bi-patch-check-fill"></i> Patente</a>
                    </li>
                    <li class="mr-2">
                        <a href="#" class="inline-flex p-4" aria-current="page"><i
                                class="mr-2 w-5 h-5 bi bi-file-text-fill"></i>Articulos </a>
                    </li>
                    <li class="mr-2">
                        <a href="#" class="inline-flex p-4"><i class="mr-2 w-5 h-5 bi bi-globe2"></i>Redes
                            Institucionales </a>
                    </li>
                </ul>
            </div>
            <div class="container mx-auto mt-20">
                @if ($patenteSelected)
                    <h1 class="font-black text-5xl text-center md:w-2/3 mx-auto">Ingresar Patentes de
                        {{ $buscar }}</h1>
                    <div class="mt-12 md:flex">
                        <div class="md:w-1/2 lg:w-2/5 mx-5">
                            <h2 class="font-black text-3xl text-center">Ingresar Patentes</h2>
                            <p class="text-lg mt-5 text-center mb-10">Añade Patentes y <span>Administrarlos</span></p>
                            <form class="bg-white shadow-lg rounded-lg py-10 px-10"
                                wire:submit.prevent='AgregarPatente'>
                                <div class="bg-green-400 text-white my-2 rounded-lg text-sm p2 text-center">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-5"><label for="patente"
                                        class="block text-gray-700 uppercase font-bold">Nombre Patente </label>
                                    <input id="patente" wire:model='pNombre' type="text"
                                        placeholder="Nombre de la patente"
                                        class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="">
                                </div>
                                <div class="mb-5">
                                    <label for="alta" class="block text-gray-700 uppercase font-bold">Alta</label>
                                    <input id="alta" type="date" wire:model='pFecha'
                                        class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="">
                                </div>
                                <div class="mb-5">
                                    <label for="Sintomas" class="block text-gray-700 uppercase font-bold">Resumen de la
                                        patente</label>
                                    <textarea id="resumen" wire:model='pResume' class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md"
                                        placeholder="Resumen de patente"></textarea>
                                </div>
                                <input type="submit"
                                    class=" bg-[#003B5C] w-full p-3 text-white uppercase font-bold hover:bg-[#236082] cursor-pointer"
                                    value="Agregar paciente">
                            </form>
                        </div>
                        <div class="md:w-1/2 lg:w-3/5 md:h-screen overflow-y-scroll">
                            <h2 class="font-black text-3xl text-center">No hay patentes registradas</h2>
                            <p class="text-xl mt-5 mb-10 text-center">comienza agregando una patente <span>y aparecerán
                                    en
                                    este lugar</span></p>

                            {{--   <div class="max-w-3xl rounded overflow-hidden shadow-lg">
                                        <div class="px-6 py-4">
                                            @if ($usuario->tipo_user == 1)
                                            <div class="font-bold text-xl mb-2">Administrador</div>
                                            @else
                                            <div class="font-bold text-xl mb-2">Capturista</div>
                                            @endif
                                            
                                            <a class="decoration-solid">Usuario</a>
                                            <a>{{$usuario->user}}</a>
                                            
                                        </div>
                                        <div class="flex justify-end">
                                            
                                                <button type="button" wire:click="borrarUsuario('{{$usuario->id}}')"
                                                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#b9372d] rounded-full" >Eliminar</button>
                                          
                                            <button type="button"
                                                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#003B5C] rounded-full ">Editar</button>
                                        </div>
                                    </div>
                                    <div id="relleno"></div> --}}

                        </div>
                    </div>
                @endif

            </div>
        </div>
</div>
@endif


</div>
