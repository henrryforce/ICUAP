@extends('layouts.app')
{{-- vista para listar usuarios y administrar entre capturistas y administradores --}}

@php
                $data= session()->get('data');
                $inves= $data[0];
                $correo= $data[1];
                $centro=$data[2];
                $areas=$data[3];
                $patentes=$data[4];
                $articulos=$data[5];
                $journals = $data[6];
                
                
            @endphp
            
@section('contenido')
<div id="relleno"></div>
<div class="flex justify-center ">
    <div class=" rounded overflow-hidden shadow-lg">
        <img class="h-[280px] w-auto ml-0" src="{{ asset('img/logo_cards.png') }}" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Nombre de investigador:{{$inves->nombres}} {{$inves->apellido_paterno}} {{$inves->apellido_materno}}</div>
            <p>Correo: {{$correo->nombre}}</p>
            <p>Centro de adscripcion: {{$centro->nombre}} </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            @foreach ($areas as $area)
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$area->nombre}}</span>
            @endforeach
            
        </div>
    </div>
</div>
<div class="container max-w-[50rem]">
    <div class="flex justify-center pt-20">
        <div class=" rounded overflow-hidden shadow-lg">
            <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab3" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="#tabs-home3" class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent active " id="tabs-home-tab3" data-bs-toggle="pill" data-bs-target="#tabs-home3" role="tab" aria-controls="tabs-home3"
                        aria-selected="true">Articulos</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tabs-profile3" class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent
                        px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-profile-tab3" data-bs-toggle="pill" data-bs-target="#tabs-profile3" role="tab"
                        aria-controls="tabs-profile3" aria-selected="false">Patentes</a>
                </li>
            </ul>
            {{-- Bloque de codigo para desplegar todas las patentes --}}
            <div class="tab-content" id="tabs-tabContent3">
                <div class="tab-pane fade" id="tabs-profile3" role="tabpanel" aria-labelledby="tabs-profile-tab3">
                    @foreach ($patentes as $patente)
                        <div class="mx-5 my-5 bg-white shadow-md px-5 py-3 rounded-xl">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{$patente->titulo}}</div>
                                <div class="mt-2">
                                <a class="decoration-solid">Año de publicación: </a> <a>{{$patente->year}} </a>
                                </div>
                                <a class="decoration-solid">{{$patente->resumen}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- bloque de codigo para desplegar los articulos de los Investigadores --}}
                <div class="tab-pane fade show active" id="tabs-home3" role="tabpanel" aria-labelledby="tabs-home-tab3">
                    @foreach ($articulos as $articulo)
                        <div class="mx-5 my-5 bg-white shadow-md px-5 py-3 rounded-xl">
                            <div class="px-6 py-4">
                                @foreach ($journals as $journal)
                                    @if ($journal->id ==$articulo->journal_id)
                                    <div class="font-bold text-xl mb-2">{{$journal->nombre}} </div>
                                    @endif
                                @endforeach                
                                <a class="decoration-solid">Autores:{{$articulo->autores}}</a>
                                <div class="mt-2">
                                    <a class="decoration-solid">Año de publicación: </a> <a>{{$articulo->ano_publicacion}} </a>
                                </div>
                                <div class="mt-2">
                                    <a class="decoration-solid">Doi: </a> <a>{{$articulo->doi}} </a>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div>     
            </div>    
        </div>
    </div>
</div>

<div id="relleno"></div>
@endsection


<!-- <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab3"
  role="tablist">
  <li class="nav-item" role="presentation">
    <a href="#tabs-home3" class=" " id="tabs-home-tab3" data-bs-toggle="pill" data-bs-target="#tabs-home3" role="tab" aria-controls="tabs-home3"
      aria-selected="true">Home</a>
  </li>
  <li class="nav-item" role="presentation">
    <a href="#tabs-profile3" class=" " id="tabs-profile-tab3" data-bs-toggle="pill" data-bs-target="#tabs-profile3" role="tab"
      aria-controls="tabs-profile3" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item" role="presentation">
    <a href="#tabs-messages3" class=" " id="tabs-messages-tab3" data-bs-toggle="pill" data-bs-target="#tabs-messages3" role="tab"
      aria-controls="tabs-messages3" aria-selected="false">Messages</a>
  </li>
</ul>


<div class="tab-content" id="tabs-tabContent3">
  <div class="tab-pane fade show active" id="tabs-home3" role="tabpanel" aria-labelledby="tabs-home-tab3">
    Tab 1 content button version
  </div>
  <div class="tab-pane fade" id="tabs-profile3" role="tabpanel" aria-labelledby="tabs-profile-tab3">
    Tab 2 content button version
  </div>
  <div class="tab-pane fade" id="tabs-messages3" role="tabpanel" aria-labelledby="tabs-profile-tab3">
    Tab 3 content button version
  </div>
</div> -->
