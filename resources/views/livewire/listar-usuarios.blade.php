<div>
    @foreach ($usuarios as $usuario)
    <div class="max-w-3xl rounded overflow-hidden shadow-lg">
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
            
                <button type="button" 
                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#b9372d] rounded-full" wire:click="borrarUsuario('{{$usuario->id}}')">Eliminar</button>
          
            <button type="button"
                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#003B5C] rounded-full ">Editar</button>
        </div>
    </div>
    <div id="relleno"></div>
    @endforeach
</div>
