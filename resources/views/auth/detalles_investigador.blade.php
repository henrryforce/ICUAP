@extends('layouts.app')

@section('contenido')
<h1 class="font-black text-3xl text-center pt-9">Completar la información del investigador</h1>
<p class="text-center text-lg mt-4">Ingresa el apellido del investigador <br> y selecciona una opción</p>
<livewire:buscador-agregar-items />
<div class="container mx-auto flex flex-col items-center">
    <img class="object-fill h-[487px] w-[1050px] " src="{{ asset('img/logo_marca_registrada_page-0001.jpg') }}" alt="">
</div>

@endsection
