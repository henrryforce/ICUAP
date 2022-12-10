<div>
    <form class="flex items-center mx-auto mt-4">
        <div class="grid gap-6 mb-6 w-full">
            <input type="text" wire:model="buscar" id="apellido" wire:keydown.backspace="reoverInvestigadorSeleccionado"
                class="border w-full p-2 rounded-lg"
                placeholder="Ingresa el Apellido">
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
