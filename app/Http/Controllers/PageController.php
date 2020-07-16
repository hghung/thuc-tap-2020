<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\district;
use App\Models\province;
use App\Models\ward;
use App\Models\bangtin;

use App\Models\taisan;
use App\Models\nha;
use App\Models\loainha;


use App\Models\nha_tienich;

use App\User;
use App\Views;


use Illuminate\Support\collection;



use App\Models\ct_taisan;

use DB;

use Carbon\Carbon;
Use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Arr;


class PageController extends Controller
{
    
    public function login_page()
    {
        if(!Auth::check())
        {
            return view('page.login');
        }
        else
        {
            return redirect()->route('taikhoan.profile');
            /// rediect thay vì route để kiêm tra user đã đăng nhập chưa vào act.home đã có sẳn rùi nên mới route dc
        }
    }
    
    public function home()
    {
        // $city = province::all();
        // $type = loainha::all();
        // // bang do
        // $bangtin3 = bangtin::where('trang_thai','=',1)->orderBy('views','desc')->take(6)->get();
        // $chuaban = bangtin::where('trang_thai','=',1)->count();
        // $daban = bangtin::where('trang_thai','=',2)->count();
        // $nguoidung = User::where('status','=',1)->count();
        // $follow = bangtin::sum('views');
        // $bangtin = bangtin::where('trang_thai','=',1)->get();
        // return view('house.index',['bangtin' => $bangtin, 'city' => $city, 'type' => $type, 'bangtin3' => $bangtin3 , 'chuaban' => $chuaban , 'daban' => $daban , 'nguoidung' => $nguoidung , 'follow' => $follow]);

        return view('page.index');
        
    }


    public function ajax_district($id_province)
    {
        $quanhuyen = district::where('province_id',$id_province)->get();
        foreach($quanhuyen as $dt)
        {
             echo "<option value='".$dt->id."'>".$dt->district_name."</option>"; 
            // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
        }
    }

    public function ajax_ward($id_ward)
    {
        $phuongxa = ward::where('district_id',$id_ward)->get();
        foreach($phuongxa as $wd)
        {
             echo "<option value='".$wd->id."'>".$wd->ward_name."</option>"; 
            // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
        }
    }
    


    // public function list()
    // {
    //     $bangtin = bangtin::where('trang_thai','=','1')->orderBy('id','desc')->paginate(6);


    //     // $bangtin2 = bangtin::all();
    //     Carbon::setLocale('vi'); // sư dụng đây nên giờ nó hiêu là tiên việt
    //     // ->diffForHumans() để so sánh giờ
    // 	return view('house.list',['bangtin' => $bangtin]);
    // }


    // public function single($id)
    // {
        
    //     $bangtin = bangtin::find($id);
    //     $nha = nha::all();

    //     $tienich = nha_tienich::where('id_nha', '=', $bangtin->id_nha )->get();


    //     $taisan = taisan::all();

    //     $taisan = $taisan->toArray();

    //     $ct_taisan = ct_taisan::where('id_nha', '=', $bangtin->id_nha )->get();

    //     foreach($taisan as $key => $value)
    //     {
    //         $taisan[$key] = [
    //             'ten_ts' => $value['ten_ts'],
    //             'so_luong' => 'Không có',
    //             'id' => $value['id']
    //         ];
    //         // $taisan = Arr::add(['name' => 'Desk'], 'price', 100);
    //     }
    //     // dd($taisan);
        
        
    //     foreach($taisan as $key => $value)
    //     {
    //         foreach($ct_taisan as $ts2)
    //         {
    //             if($value['id'] == $ts2->id_taisan)
    //             {
    //                 $taisan[$key] = [
    //                     'ten_ts' => $value['ten_ts'],
    //                     'so_luong' => $ts2->so_luong,
    //                     'id' => $value['id']
    //                 ];
    //             }
                
    //         }
    //     }

    //     // luot xem 
    //     views($bangtin)
    //         ->cooldown(Carbon::now()->addMinutes(1))
    //         ->record();
        
    //     $data = bangtin::where('id',$id)->update(['views'=>views($bangtin)->count()]);

        

        
    // 	return view('house.single',['bangtin' => $bangtin, 'taisan' => $taisan, 'taisan' => $taisan, 'tienich' => $tienich]);
    // }

    

   
}
