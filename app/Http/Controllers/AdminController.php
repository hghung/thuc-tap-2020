<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\db_baotri;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

use Toastr;
use Artisan;
class AdminController extends Controller
{
    public function home()
    {
        $index['customer'] = User::where('id_vaitro','=',4)->count();
        $index['staff'] = User::where('id_vaitro','=',2)->count();
        $index['technical'] = User::where('id_vaitro','=',3)->count();
        $index['baotri'] = db_baotri::where('id_trangthai','=',3)->count();
        // thong ke
        $chart_options = [
            'chart_title' => 'Thông kê khách hàng tham gia', // tiêu đề
            'report_type' => 'group_by_date', //
            'chart_type' => 'line', // dạng biểu đồ
            'group_by_period' => 'day', // lấy ra theo ngay theo tháng

            'model' => 'App\User', // model lấy ra
            
            'group_by_field' => 'created_at',
        ];
        $chart1 = new LaravelChart($chart_options);

        $chart_options2 = [
            'chart_title' => 'Thông kê bảo trì theo ngày',
            'report_type' => 'group_by_date',
            'chart_type' => 'bar',

            'model' => 'App\Models\db_baotri',
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

        return view('admin.index',['chart1' => $chart1, 'chart2' => $chart2, 'chart3' => $chart3],$index);
        
    }
    // bản đồ --- start
    public function map_baotri()
    {

        $map_ad = db_baotri::where('id_trangthai','=',2)->get(); // admin

        $id = Auth::user()->id;
        // echo $id;die;
        $work['nhanvien'] = db_baotri::where('id_nhanvien','=',$id)
                                    ->where('id_trangthai','=',2)
                                    ->get();
        return view('admin.map.map_baotri',['map_ad' => $map_ad],$work);
    }

    public function ct_map($id)
    {
        $chitiet = db_baotri::find($id);
        return view('admin.map.detail_map',['chitiet' => $chitiet]);
    }
<<<<<<< HEAD
    public function work()
    {
        $id = Auth::user()->id;
        // echo $id;die;
        $work['work'] = db_baotri::where('id_nhanvien','=',$id)
                                    ->get();

                                    // dd($work);
        return view('admin.bao-tri.work',$work);
    }
=======
>>>>>>> 9dd692991ce6242c00d7a5b51a28a80d38855ede
    // test /////////////////////////////////
    public function test_map($id)
    {
        $chitiet = db_baotri::find($id);
        return view('admin.map.test',['chitiet' => $chitiet]);
        
    }
    // test ///////////////////////////////

    // end bản đồ
    public function lich_baotri()
    {
        return view('admin.lich_baotri');
        
    }

   

}
