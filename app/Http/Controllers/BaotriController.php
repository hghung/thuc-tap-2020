<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\db_baotri;
use App\Models\db_trangthai;
use Toastr;
use Artisan;
class BaotriController extends Controller
{
    public function list()
    {
        $baotri['baotri'] = db_baotri::all();
        return view('admin.bao-tri.list',$baotri);
        
    }

    public function get_add()
    {
        $user['khachhang']= User::where('id_vaitro','=',4)->get();
        $user['nhanvien']= User::where('id_vaitro','=',3)->get();
        $user['trangthai']= db_trangthai::all();


        return view('admin.bao-tri.add',$user);
        
    }

    public function post_add(Request $baotri2)
    {
        $baotri = new db_baotri;
        $baotri->tieude = $baotri2->tieude;
        $baotri->noidung = $baotri2->noidung;
        $baotri->ngay = $baotri2->ngay;
        $baotri->gio = $baotri2->gio;
        $baotri->id_trangthai = $baotri2->trangthai;
        $baotri->id_khachhang  = $baotri2->khachhang;
        $baotri->id_nhanvien  = $baotri2->nhanvien;

        $baotri->save();

        return redirect()->route('baotri.list');
    }

    

   

}
