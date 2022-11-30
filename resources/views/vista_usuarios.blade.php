@extends('layouts.app')


@section('contenido')
<div id="relleno"></div>
<div class="flex justify-center ">
    <div class="max-w-3xl rounded overflow-hidden shadow-lg">
        <img class="w-full" src="{{asset('img/escudo_logotipo_buap_page-0002.png')}}" alt="Inserte una imagen">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Titulo random</div>
            <p class="text-gray-700 text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#BUAP</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#MachineLearning</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#MicroElectronica</span>
        </div>
    </div>
</div>
<div id="relleno"></div>
<div class="contenedor flex justify-between">
    <div style="width: 600px; margin: auto;">
        <canvas id="myChart"></canvas>
    </div>
    <div style="width: 600px; margin: auto;">
        <canvas id="myChart2"></canvas>
    </div>
</div>
<div id="relleno"></div>
@endsection