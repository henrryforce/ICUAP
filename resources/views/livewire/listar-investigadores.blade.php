<div>
    @foreach ($investigadores as $investigador)
        <div class="max-w-3xl rounded overflow-hidden shadow-lg">
            <img class="w-full" src="{{ asset('img/escudo_logotipo_buap_page-0002.jpg') }}" alt="Inserte una imagen">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $investigador->nombres }} {{ $investigador->apellido_paterno }}
                    {{ $investigador->apellido_materno }}</div>
                    
                    @foreach ($correos as $correo)
                    @if ($correo->id == $investigador->correo_id)
                         <a class="decoration-solid">Correo</a>
                        <a>{{$correo->nombre}}</a>
                    @endif                       
                    @endforeach    
                    @foreach ($centros as $centro)
                    @if ($centro->id == $investigador->centro_adscripcion_id)
                         <a class="decoration-solid">Centro de adscripcion</a>
                        <a>{{$centro->nombre}}</a>
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
            </div>
            <div class="flex justify-end">
                <form method="POST" action="{{route('investigadoresDelete')}}" >
                    @method('DELETE')
                    @csrf
                    <input name="investigador" type="text" hidden value="{{$investigador->id}}"/>
                    <button type="submit"
                    class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#b9372d] rounded-full" >Eliminar</button>
                    
                </form>
                
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#003B5C] rounded-full ">Editar</button>
            </div>
        </div>
        <div id="relleno"></div>
    @endforeach
</div>
