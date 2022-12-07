<div>
    <form class="flex items-center md:w-1/2 mx-auto mt-4">
        <div class="relative w-full">
            <input type="text" wire:model="buscar" id="apellido" wire:keydown.backspace="reoverInvestigadorSeleccionado"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full pl-10 p-2.5 dark:border-gray-600 dark:placeholder-gray-400"
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
                                wire:click="verInvestigador('{{ $inves->id }}')">
                                {{ $inves->nombres }} {{ $inves->apellido_paterno }} {{ $inves->apellido_materno }}
                            </a>
                        </div>
                        </br>
                    @endforeach
                @endif
            </div>
        </div>
    </form>
</div>
