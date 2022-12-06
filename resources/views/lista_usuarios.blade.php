@extends('layouts.app')
@section('contenido')
    <div id="root">
        <div class="container mx-auto mt-20">
            <h1 class="font-black text-5xl text-center md:w-2/3 mx-auto">Lista usuarios</h1>
            <livewire:listar-usuarios />
            
        </div>
    </div>
    <div id="relleno"></div>
@endsection
