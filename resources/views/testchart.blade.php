@extends('layouts.app')
@section('contenido')
<div style="width: 600px; heigh:800px">
    <h1>{{ $chart->options['chart_title'] }}</h1>
    {!! $chart->renderHtml() !!}
</div>
<div style="width: 600px; heigh:800px">
    <h1>{{ $chart2->options['chart_title'] }}</h1>
    {!! $chart2->renderHtml() !!}
</div>
{!! $chart->renderChartJsLibrary() !!}
{!! $chart->renderJs() !!}
{!! $chart2->renderJs() !!}
@endsection