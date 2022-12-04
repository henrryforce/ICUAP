@extends('layouts.app')
{{-- vista para listar usuarios y administrar entre capturistas y administradores --}}

@section('contenido')
<div id="relleno"></div>
<div class="flex justify-center ">
    <livewire:listar-usuarios />
</div>

{{-- <div class="contenedor flex justify-between">
    <div style="width: 600px; margin: auto;">
        <canvas id="myChart"></canvas>
    </div>
    <div style="width: 600px; margin: auto;">
        <canvas id="myChart2"></canvas>
    </div>
</div> --}}
<div id="relleno"></div>
@endsection