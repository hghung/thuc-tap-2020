<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\db_baotri;

use Toastr;
use Artisan;
class AdminController extends Controller
{
    public function home()
    {
        return view('admin.index');
        
    }
    // bản đồ --- start
    public function map_baotri()
    {
        $map_ad = db_baotri::where('id_trangthai','=',2)->get();
        return view('admin.map.map_baotri',['map_ad' => $map_ad]);
        
    }

    public function ct_map($id)
    {
        $chitiet = db_baotri::find($id);
        return view('admin.map.detail_map',['chitiet' => $chitiet]);
        
    }


    // end bản đồ
    public function lich_baotri()
    {
        return view('admin.lich_baotri');
        
    }

   

}
