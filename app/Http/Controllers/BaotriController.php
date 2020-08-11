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

    public function get_edit($id)
    {
        $user['baotri']= db_baotri::find($id);
        $user['khachhang']= User::where('id_vaitro','=',4)->get();
        $user['nhanvien']= User::where('id_vaitro','=',3)->get();
        $user['trangthai']= db_trangthai::all();

        return view('admin.bao-tri.edit',$user);
        
    }
    public function post_edit($id, Request $post)
    {
        $user['baotri']= db_trangthai::find($id);
        
    }





    public function success($id)
    {
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = db_baotri::where('id',$id)->update(['id_trangthai'=>3]);
        //var_dump($data);die;
        // Session::put('msg','')
        Toastr::success('Hoàn thành', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function cancel($id)
    {
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = db_baotri::where('id',$id)->update(['id_trangthai'=>4]);
        //var_dump($data);die;
        // Session::put('msg','')
        Toastr::error('Đã hủy', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.lich');
    }



    

   

}
