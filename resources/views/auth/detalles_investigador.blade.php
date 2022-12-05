@extends('layouts.app')

@section('contenido')

<livewire:buscador-agregar-items />

<div id="root">
    <div class="border-b border-gray-200 dark:border-gray-700 md:w-1/2 mx-auto mt-9">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
            <li class="mr-2">
                <a href="#" class="inline-flex p-4 rounded-t-lg border-b-2 border-transparent"><i class="mr-2 w-5 h-5 bi bi-patch-check-fill"></i> Patente</a>
            </li>
            <li class="mr-2">
                <a href="#" class="inline-flex p-4" aria-current="page"><i class="mr-2 w-5 h-5 bi bi-file-text-fill"></i>Articulos </a>
            </li>
            <li class="mr-2">
                <a href="#" class="inline-flex p-4"><i class="mr-2 w-5 h-5 bi bi-globe2"></i>Redes Institucionales </a>
            </li>
        </ul>
    </div>
        <div class="container mx-auto mt-20">
            <h1 class="font-black text-5xl text-center md:w-2/3 mx-auto">Ingresar Patentes</h1>
            <div class="mt-12 md:flex">
                <div class="md:w-1/2 lg:w-2/5 mx-5">
                    <h2 class="font-black text-3xl text-center">Ingresar Patentes</h2>
                    <p class="text-lg mt-5 text-center mb-10">Añade Patentes y  <span>Administrarlos</span></p>
                    <form class="bg-white shadow-lg rounded-lg py-10 px-10">
                        <div class="mb-5"><label for="patente" class="block text-gray-700 uppercase font-bold">Nombre Patente </label>
                            <input id="patente" type="text" placeholder="Nombre de la patente" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="">
                        </div>
                        <div class="mb-5">
                            <label for="alta" class="block text-gray-700 uppercase font-bold">Alta</label>
                            <input id="alta" type="date" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" value="">
                        </div>
                        <div class="mb-5">
                            <label for="Sintomas" class="block text-gray-700 uppercase font-bold">Resumen de la patente</label>
                            <textarea id="resumen" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md" placeholder="Resumen de patente"></textarea>
                        </div>
                        <input type="submit" class=" bg-[#003B5C] w-full p-3 text-white uppercase font-bold hover:bg-[#236082] cursor-pointer" value="Agregar paciente"></form>
                    </div>
                    <div class="md:w-1/2 lg:w-3/5 md:h-screen overflow-y-scroll">
                        <h2 class="font-black text-3xl text-center">No hay patentes registradas</h2>
                        <p class="text-xl mt-5 mb-10 text-center">comienza agregando una patente <span>y aparecerán en este lugar</span></p>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
