<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bangtin;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ChartController extends Controller
{
    public function chart()
    {
        $chart_options = [
            'chart_title' => 'Người dùng theo tháng', // tiêu đề
            'report_type' => 'group_by_date', //
            'chart_type' => 'pie', // dạng biểu đồ
            'group_by_period' => 'week', // lấy ra theo ngay theo tháng

            'model' => 'App\User', // model lấy ra
            'conditions'            => [
                ['name' => 'Transport', 'condition' => 'category_id = 2', 'color' => 'blue'],
            ],
            'group_by_field' => 'created_at',
        ];
        $chart1 = new LaravelChart($chart_options);

        $chart_options2 = [
            'chart_title' => 'Bảng tin được đăng lên',
            'report_type' => 'group_by_date',
            'chart_type' => 'bar',

            'model' => 'App\Models\bangtin',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
        ];
        $chart2 = new LaravelChart($chart_options2);

        $chart_options = [
            'chart_title' => 'Nhà đã được thuê',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\hopdong',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
        ];
    
        $chart3 = new LaravelChart($chart_options);

    	return view('admin.chart.chart',['chart1' => $chart1, 'chart2' => $chart2, 'chart3' => $chart3]);
    }
}
