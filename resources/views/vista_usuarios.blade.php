@extends('layouts.app')
{{-- vista para listar usuarios y administrar entre capturistas y administradores --}}

@php
    $data = session()->get('data');
    $inves = $data[0];
    $correo = $data[1];
    $centro = $data[2];
    $areas = $data[3];
    $patentes = $data[4];
    $articulos = $data[5];
    $journals = $data[6];
    
@endphp

@section('contenido')
<script src="https://code.highcharts.com/highcharts.js"></script>
<div id="relleno"></div>
<div class="flex justify-center ">
    <div class=" rounded overflow-hidden shadow-lg">
        <img class="h-[280px] w-auto ml-0" src="{{ asset('img/logo_cards.png') }}" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Nombre de investigador:{{$inves->nombres}} {{$inves->apellido_paterno}} {{$inves->apellido_materno}}</div>
            <p>Correo: {{$correo->nombre}}</p>
            <p>Ubicación: {{$centro->nombre}} </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            @foreach ($areas as $area)
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$area->nombre}}</span>
            @endforeach
            
        </div>
        <div id="container"></div>
<div id="containerpatentes"></div>
    </div>
</div>

<div class="container max-w-[50rem]">
    <div class="flex justify-center pt-20">
        <div class=" rounded overflow-hidden shadow-lg">
            <ul 
            class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" 
            id="tabs-tab3"
            role="tablist"
            data-te-nav-ref>
                <li role="presentation">
                    <a 
                        href="#myPatente" 
                        class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent active " 
                        id="tabs-myPatente-tab3" 
                        data-te-toggle="pill" 
                        data-te-target="#myPatente" 
                        role="tab" 
                        aria-controls="myPatente"
                        aria-selected="true">Patente
                    </a>
                </li>
                <li role="presentation">
                    <a 
                        href="#myArticle" 
                        class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" 
                        id="tabs-myArticle-tab3" 
                        data-te-toggle="pill" 
                        data-te-target="#myArticle" 
                        role="tab"
                        aria-controls="myArticle" 
                        aria-selected="false">Artículos
                    </a>
                </li>
                
                {{-- Bloque de codigo para desplegar todas las patentes --}}
                <div id="myTabContent">
                    <div 
                        id="myPatente"
                        role="tabpanel"
                        data-te-tab-active
                        aria-labelledby="tabs-myPatente-tab3">
                        @foreach ($patentes as $patente)
                        <div class="mx-5 my-5 bg-white shadow-md px-5 py-3 rounded-xl">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">{{$patente->titulo}}</div>
                                <div class="mt-2">
                                <a class="decoration-solid">Año de publicación: </a> <a>{{$patente->anio_publicacion}} </a>
                                </div>
                                <a class="decoration-solid">{{$patente->resumen}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
        </div>
    </div>
</div>
<div class="container max-w-[50rem]">
    <div class="flex justify-center pt-20">
        <div class=" rounded overflow-hidden shadow-lg">
                    {{-- bloque de codigo para desplegar los articulos de los Investigadores --}}
                    <div 
                        id="myArticle"
                        role="tabpanel"
                        data-te-tab-active
                        aria-labelledby="tabs-myArticle-tab3">
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
                                    <a class="decoration-solid">DOI: </a> <a>{{$articulo->doi}} </a>
                                    </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>



    <div id="relleno"></div>
    <script type="text/javascript">
        var patentesChart = <?php echo json_encode($patentesChart)?>;
        anios=[];
        totalP=[];
        for(let i=0;i<patentesChart.length;i++){
            anios.push(patentesChart[i]['anio_publicacion']);
            totalP.push(patentesChart[i]['total']);
        }
        Highcharts.chart('containerpatentes', {
            title: {
                text: 'Patentes'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: anios
            },
            yAxis: {
                title: {
                    text: 'Número'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Patentes',
                color:"#FF00FF",
                data: totalP //aqui se necesitan los count de los articulos o patentes por año o algo para que se grafique 
                
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
    <script type="text/javascript">
        var articulosChart = <?php echo json_encode($articulosChart)?>;
        
        totales = [];
        years=[];
    
        for(let i=0;i<articulosChart.length;i++){
            years.push(articulosChart[i]['ano_publicacion']);
            totales.push(articulosChart[i]['total']);
        }
        
        Highcharts.chart('container', {
            title: {
                text: 'Artículos'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: years
            },
            yAxis: {
                title: {
                    text: 'Número'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Artículos',
                color:"#77dd77",
                data: totales //aqui se necesitan los count de los articulos o patentes por año o algo para que se grafique 
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
        
    </script>
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
