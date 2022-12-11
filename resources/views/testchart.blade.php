@extends('layouts.app')
@section('contenido')
{!! $chart->renderHtml() !!}
{!! $chart->renderChartJsLibrary() !!}
{!! $chart->renderJs() !!}
@endsection