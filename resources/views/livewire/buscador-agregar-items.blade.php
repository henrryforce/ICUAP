<div>
    <form class="flex items-center md:w-1/2 mx-auto mt-4">
        <div class="relative w-full">
            <input type="text" wire:model="buscar" id="apellido" wire:keydown.backspace="reoverInvestigadorSeleccionado"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full pl-10 p-2.5 dark:border-gray-600 dark:placeholder-gray-400"
                placeholder="Ingresa el Nombre para hacer la busqueda">
            @error('buscar')
                <div class="input-group mb3"> <span
                        class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                </div>
            @enderror
            <div class="">
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
    </form>
    @if ($piecked)
        <div id="root">
            <div class="border-b border-gray-200 dark:border-gray-700 md:w-1/2 mx-auto mt-9">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                    <li class="mr-2">
                        <a href="#" wire:click='clickPatente'
                            class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent">
                            <i class="mr-2 w-5 h-5 bi bi-patch-check-fill"></i> Patentes</a>
                    </li>
                    <li class="mr-2">
                        <a href="#" wire:click='clickArti' class="inline-flex p-4" aria-current="page">
                            <i class="mr-2 w-5 h-5 bi bi-file-text-fill"></i>Articulos </a>
                    </li>
                    <li class="mr-2">
                        <a href="#" wire:click='clickRed' class="inline-flex p-4"><i
                                class="mr-2 w-5 h-5 bi bi-globe2"></i>Redes
                            Institucionales </a>
                    </li>
                </ul>
            </div>
            {{-- Patentes --}}
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
                                        class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
                                    <div>
                                        @error('pNombre')
                                            <div class="input-group mb3"> <span
                                                    class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="alta" class="block text-gray-700 uppercase font-bold">Alta</label>
                                    <input id="alta" type="date" wire:model='pFecha'
                                        class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
                                    <div>
                                        @error('pFecha')
                                            <div class="input-group mb3"> <span
                                                    class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="Sintomas" class="block text-gray-700 uppercase font-bold">Resumen de la
                                        patente</label>
                                    <textarea id="resumen" wire:model='pResume' class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md"
                                        placeholder="Resumen de patente"></textarea>
                                    <div>
                                        @error('pResume')
                                            <div class="input-group mb3"> <span
                                                    class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                @if ($editarp)
                                    <input type="submit"
                                        class=" bg-[#003B5C] w-full p-3 text-white uppercase font-bold hover:bg-[#236082] cursor-pointer"
                                        value="Editar patente">
                                @else
                                    <input type="submit"
                                        class=" bg-[#003B5C] w-full p-3 text-white uppercase font-bold hover:bg-[#236082] cursor-pointer"
                                        value="Agregar patente">
                                @endif

                            </form>
                        </div>
                        <div class="md:w-1/2 lg:w-3/5 md:h-screen overflow-y-scroll">
                            @if (count($patentes) > 0)
                                @foreach ($patentes as $patente)
                                    <div class="max-w-3xl rounded overflow-hidden shadow-lg">
                                        <div class="px-6 py-4">
                                            <div class="font-bold text-xl mb-2">{{ $patente->titulo }}</div>

                                            <a class="decoration-solid">Fecha</a>
                                            <a>{{ $patente->year }}</a>
                                            </br>
                                            <a class="decoration-solid">Resumen</a>
                                            <p>{{ $patente->resumen }}</p>
                                        </div>
                                        <div class="flex justify-end">

                                            <button type="button" wire:click="eliminarPatente('{{ $patente->id }}')"
                                                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#b9372d] rounded-full">Eliminar</button>

                                            <button type="button"
                                                wire:click="editarPatente('{{ $patente->id }}','{{ $patente->titulo }}','{{ $patente->year }}','{{ $patente->resumen }}')"
                                                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#003B5C] rounded-full ">Editar</button>
                                        </div>
                                    </div>
                                    <div id="relleno"></div>
                                @endforeach
                            @else
                                <h2 class="font-black text-3xl text-center">No hay patentes registradas</h2>
                                <p class="text-xl mt-5 mb-10 text-center">comienza agregando una patente <span>y
                                        aparecerán
                                        en
                                        este lugar</span></p>
                            @endif

                        </div>
                    </div>
                @endif
            </div>
        </div>


        <div class="container mx-auto mt-20">
            @if ($articuloSelected)
                <h1 class="font-black text-5xl text-center md:w-2/3 mx-auto">Ingresar Artículos de
                    {{ $buscar }}</h1>
                <div class="mt-12 md:flex">
                    <div class="md:w-1/2 lg:w-2/5 mx-5">
                        <h2 class="font-black text-3xl text-center">Ingresar Articulos</h2>
                        <p class="text-lg mt-5 text-center mb-10">Añade Artículos y <span>Administralos</span></p>
                        <form class="bg-white shadow-lg rounded-lg py-10 px-10" wire:submit.prevent='agregarArticulo'>
                            <div class="bg-green-400 text-white my-2 rounded-lg text-sm p2 text-center">
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-4"><label for="patente"
                                    class="block text-gray-700 uppercase font-bold">Titulo de artículo</label>
                                <input type="text" placeholder="Titulo del artículo" wire:model='tituloArt'
                                    class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
                                <div>
                                    @error('tituloArt')
                                        <div class="input-group mb3"> <span
                                                class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="alta" class="block text-gray-700 uppercase font-bold">Autores</label>
                                <input type="text" placeholder="Nombres separador por comas" wire:model='autoresA'
                                    class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
                                <div>
                                    @error('autoresA')
                                        <div class="input-group mb3"> <span
                                                class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="Sintomas" class="block text-gray-700 uppercase font-bold">Año de
                                    publicación</label>
                                <input id="alta" type="number" placeholder="1995" wire:model='fechaArt'
                                    class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
                                <div>
                                    @error('fechaArt')
                                        <div class="input-group mb3"> <span
                                                class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label  class="block text-gray-700 uppercase font-bold">Doi</label>
                                <input  type="text" placeholder="10.1127/g.gphotochem.2022.123453" wire:model='doiArt'
                                    class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
                                <div>
                                    @error('doiArt')
                                        <div class="input-group mb3"> <span
                                                class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="Sintomas" class="block text-gray-700 uppercase font-bold">Título de la
                                    revista</label>
                                <input id="alta" type="text" placeholder="Crystals" wire:model='journalArt'
                                    class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
                                <div>
                                    @error('journalArt')
                                        <div class="input-group mb3"> <span
                                                class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            @if ($editarArticulo)
                                <input type="submit"
                                    class=" bg-[#003B5C] w-full p-3 text-white uppercase font-bold hover:bg-[#236082] cursor-pointer"
                                    value="Editar artículo">
                            @else
                                <input type="submit"
                                    class=" bg-[#003B5C] w-full p-3 text-white uppercase font-bold hover:bg-[#236082] cursor-pointer"
                                    value="Agregar artículo">
                            @endif
                        </form>
                    </div>
                    <div class="md:w-1/2 lg:w-3/5 md:h-screen overflow-y-scroll">
                        @if (count($articulos) > 0)
                            @foreach ($articulos as $articulo)
                                <div class="max-w-3xl rounded overflow-hidden shadow-lg">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-xl mb-2">{{ $articulo->nombre }}</div>

                                        <a class="decoration-solid">Año de publicacion</a>
                                        <a>{{ $articulo->ano_publicacion }}</a>
                                        </br>
                                        <a class="decoration-solid">Doi</a>
                                        <p>{{ $articulo->doi }}</p>
                                        <a class="decoration-solid">Autores</a>
                                        <p>{{ $articulo->autores }}</p>
                                        <a class="decoration-solid">Revista</a>
                                        <p>{{$this->getJournal($articulo->journal_id) }}</p>
                                    </div>
                                    <div class="flex justify-end">

                                        <button type="button" wire:click="eliminarArticulo('{{ $articulo->id }}')"
                                            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#b9372d] rounded-full">Eliminar</button>

                                        <button type="button"
                                            wire:click="editarArticulo('{{$articulo->id}}','{{$articulo->nombre}}','{{$articulo->ano_publicacion}}','{{$articulo->doi}}','{{$articulo->autores}}','{{$articulo->journal_id}}','{{$this->getJournal($articulo->journal_id) }}')"
                                            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#003B5C] rounded-full ">Editar</button>
                                    </div>
                                </div>
                                <div id="relleno"></div>
                            @endforeach
                        @else
                            <h2 class="font-black text-3xl text-center">No hay artículos registrados</h2>
                            <p class="text-xl mt-5 mb-10 text-center">comienza agregando una artículo <span>y
                                    aparecerán
                                    en
                                    este lugar</span></p>
                        @endif


                    </div>
                </div>
            @endif
        </div>
        {{-- codigo de redes institucionales --}}
        @if ($redSelected)
            <div class="container mx-auto mt-20">

                <h1 class="font-black text-5xl text-center md:w-2/3 mx-auto">Ingresar Redes Institucionales de
                    {{ $buscar }}</h1>
                <div class="mt-12 md:flex">
                    <div class="md:w-1/2 lg:w-2/5 mx-5">
                        <h2 class="font-black text-3xl text-center">Ingresar Redes Institucionales</h2>
                        <p class="text-lg mt-5 text-center mb-10">Añade Redes Institucionales y
                            <span>Administralas</span>
                        </p>
                        <form class="bg-white shadow-lg rounded-lg py-10 px-10" wire:submit.prevent='AgregarRedes'>
                            <div class="bg-green-400 text-white my-2 rounded-lg text-sm p2 text-center">
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-4"><label for=""
                                    class="block text-gray-700 uppercase font-bold">Tipo
                                    de red institucional </label>
                                <select id="tipo_red" wire:model='tipoR'
                                    class="bg-white border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
                                    <option selected>Elige el tipo de red</option>
                                    <option value="1">Nacional</option>
                                    <option value="2">Internacional</option>
                                </select>
                                <div>
                                    @error('tipoR')
                                        <div class="input-group mb3"> <span
                                                class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="alta" class="block text-gray-700 uppercase font-bold">Nombre del
                                    centro</label>
                                <input id="alta" type="text" wire:model="nombreR"
                                    placeholder="Facultad de Ciencias Químicas, Benemérita Universidad Autónoma de Puebla (BUAP)"
                                    class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
                                <div>
                                    @error('nombreR')
                                        <div class="input-group mb3"> <span
                                                class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            @if ($editarRed)
                                <input type="submit"
                                    class=" bg-[#003B5C] w-full p-3 text-white uppercase font-bold hover:bg-[#236082] cursor-pointer"
                                    value="Editar Red">
                            @else
                                <input type="submit"
                                    class=" bg-[#003B5C] w-full p-3 text-white uppercase font-bold hover:bg-[#236082] cursor-pointer"
                                    value="Agregar Red">
                            @endif

                        </form>
                    </div>
                    <div class="md:w-1/2 lg:w-3/5 md:h-screen overflow-y-scroll">
                        @if (count($redes) > 0)
                            @foreach ($redes as $red)
                                <div class="max-w-3xl rounded overflow-hidden shadow-lg">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-xl mb-2">{{ $red->nombre }}</div>

                                        <a class="decoration-solid">Tipo de red</a>
                                        @if ($red->tipo_red_institucion_id ==1)
                                            <a>Nacional</a>
                                            @else
                                            <a>Internacional</a>
                                        @endif
                                        
                                        </br>

                                    </div>
                                    <div class="flex justify-end">

                                        <button type="button" wire:click="eliminarRed('{{ $red->id }}')"
                                            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#b9372d] rounded-full">Eliminar</button>

                                        <button type="button"
                                            wire:click="editarRed('{{ $red->id }}','{{ $red->nombre }}','{{ $red->tipo_red_institucion_id }}')"
                                            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#003B5C] rounded-full ">Editar</button>
                                    </div>
                                </div>
                                <div id="relleno"></div>
                            @endforeach
                        @else
                            <h2 class="font-black text-3xl text-center">No hay patentes registradas</h2>
                            <p class="text-xl mt-5 mb-10 text-center">comienza agregando una patente <span>y
                                    aparecerán
                                    en
                                    este lugar</span></p>
                        @endif

                    </div>
                </div>
            </div>
        @endif
    @endif


</div>
