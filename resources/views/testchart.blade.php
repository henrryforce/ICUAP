@extends('layouts.app')
@section('contenido')

{{json_encode($patentes)}}
<h1>Highcharts in Laravel Example</h1>
<div id="container"></div>
<div id="containerpatentes"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var patentesChart = <?php echo json_encode($patentes)?>;
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
            text: 'Source: positronx.io'
        },
        xAxis: {
            categories: anios
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
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
            name: 'Numero de patentes',
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
    var articulosChart = <?php echo json_encode($articulos)?>;
    
    totales = [];
    years=[];

    for(let i=0;i<articulosChart.length;i++){
        years.push(articulosChart[i]['ano_publicacion']);
        totales.push(articulosChart[i]['total']);
    }
    
    Highcharts.chart('container', {
        title: {
            text: 'Articulos'
        },
        subtitle: {
            text: 'Source: positronx.io'
        },
        xAxis: {
            categories: years
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
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
            name: 'New Users',
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