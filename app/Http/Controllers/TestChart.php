<?php

namespace App\Http\Controllers;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;



class TestChart extends Controller
{
    //
        
    public function index(){
        $chart_options = [
            'chart_title' => 'Users by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Login',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'line',
        ];
        $chart = new LaravelChart($chart_options);
        
        return view("testchart")->with('chart',$chart);
    }
}
