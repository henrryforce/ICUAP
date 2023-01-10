<?php

namespace App\Http\Controllers;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;



class TestChart extends Controller
{
    //
        
    public function index(){
        $chart_options = [
            'chart_title' => 'Journey by year',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Articulo',
            'group_by_field' => 'ano_publicacion',            
            'chart_type' => 'line',
        ];
        $chart = new LaravelChart($chart_options);
        $chart_options2 = [
            'chart_title' => 'Patentes by year',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Patente',
            'group_by_field' => 'year',   
            
            'chart_type' => 'line',
        ];
        $chart2 = new LaravelChart($chart_options2);
        return view("testchart",['chart'=>$chart,'chart2'=>$chart2]);
    }
}
