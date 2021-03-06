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
        if(Auth::user()->id_vaitro == 4)
        {
            $baotri->id_khachhang  = Auth::user()->user->id;
            $baotri->id_trangthai = 1;

        }
        else
        {
            $baotri->id_trangthai = $baotri2->trangthai;
            $baotri->id_khachhang  = $baotri2->khachhang;
            $baotri->id_nhanvien  = $baotri2->nhanvien;
        }
        

        $baotri->save();
        if(Auth::user()->id_vaitro == 4)
        {
            return redirect()->route('admin.dashboard');

        }
        else
        {
            return redirect()->route('baotri.list');
        }
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
        $baotri= db_baotri::find($id);
        $baotri->tieude = $post->tieude;
        $baotri->noidung = $post->noidung;
        $baotri->ngay = $post->ngay;
        $baotri->gio = $post->gio;
        $baotri->id_trangthai = $post->trangthai;
        $baotri->id_khachhang  = $post->khachhang;
        $baotri->id_nhanvien  = $post->nhanvien;
        $baotri->save();

        return redirect()->route('baotri.list');
        
    }

    public function delete($id){
        $baotri = db_baotri::find($id);

        $delete = $baotri->delete();

        Toastr::warning('Đã xóa danh mục', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    public function list_restore()
    {   
        // lấy ra nhưng soft đã bị xóa
        $baotri2 = db_baotri::onlyTrashed()->get();


        return view('admin.bao-tri.khoi-phuc',['baotri2' =>$baotri2]);
        
    }

    public function restore($id)
    {   
        //withTrashed mới hiêu dc hàng trong delete_at bị xóa và khôi phục
        $baotri = db_baotri::withTrashed()->find($id);

        $restore = $baotri->restore();
        Toastr::success('Khôi phục thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
    	return  redirect()->route('baotri.list');
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
