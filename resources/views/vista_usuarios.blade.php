@extends('layouts.app')
{{-- vista para listar usuarios y administrar entre capturistas y administradores --}}

@section('contenido')
<div id="relleno"></div>
<div class="flex justify-center ">
    <div class=" rounded overflow-hidden shadow-lg">
        <img class="h-[280px] w-auto ml-0" src="{{ asset('img/logo_cards.png') }}" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Nombre de investigador*</div>
            <p>Correo: correo@correo.com</p>
            <p>Centro de adscripcion: Centro de Investigación en Dispositivos Semiconductores </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>
    </div>
</div>
<div class="container max-w-[50rem]">
<div class="flex justify-center pt-20">
    <div class=" rounded overflow-hidden shadow-lg">
        <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab3"role="tablist">
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
        <div class="mx-5 my-5 bg-white shadow-md px-5 py-3 rounded-xl">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">El Rol de la Detección Asistida por Computadora 
                    en la Nueva Era de la Inteligencia Artificial </div>
                <a class="decoration-solid">Juan Arturo Pérez-Cebreros, Eric Efraín Solano-Uscanga</a>
                <div class="mt-2">
                <a class="decoration-solid">Año de publicación: </a> <a>2015 </a>
                </div>
            </div>
        </div>
        <div class="mx-5 my-5 bg-white shadow-md px-5 py-3 rounded-xl">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Desarrollo de un software para la clasificación de malware y benignware en el sistema operativo Windows 
                    mediante Redes Neuronales Recurrentes (RNR) </div>
                <a class="decoration-solid">Luis Enrique León Hernández, Jesús Enrique Rivera Escovar</a>
                <div class="mt-2">
                <a class="decoration-solid">Año de publicación: </a> <a>2021 </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<div id="relleno"></div>
@endsection