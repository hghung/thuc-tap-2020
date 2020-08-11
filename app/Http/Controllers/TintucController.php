<?php

namespace App\Http\Controllers;

use App\Models\db_tintuc;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

class TintucController extends Controller
{
    public function list()
    {
        return view('admin.tin-tuc.list');
    }

    public function get_add()
    {
        return view('admin.tin-tuc.add');
    }

    public function post_add(Request $tintuc2)
    {
        $blog = new db_tintuc;
        $blog->tieude = $tintuc2->tieude;
        $blog->noidung = $tintuc2->noidung;
        $blog->id_trangthai = $tintuc2->trangthai;
        $blog->id_user = Auth::user()->user->id;

        //hinh anh
        if($tintuc2->hasFile('hinhanh'))
        {
            $file = $tintuc2->file('hinhanh');
            // echo $file;die;
            // kiểm tra  size
            $size = $file->getsize();
            if($size > 1024*1024)
            {
                // echo "size quá lớn chọn lại";
                return redirect()->back()->with('size','size quá lớn chọn lại');
            }
            // echo "banhbao";die;

            //kiểm tra đuôi, lấy ra đuôi file getClientOriginalExtension()
            $duoi_file = $file->getClientOriginalExtension();
            //tạo 1 mang arr để sử dụng in_array so sanh
            $arr_duoifile = ['png','jpg','jpeg','PNG','JPG','JPEG'];

            if(!in_array($duoi_file, $arr_duoifile))
            {
                // echo "Đuôi file size xin mời định dạng lại";
                return redirect()->back()->with('duoi_file','Bạn chỉ được thêm file có đuôi là JPG, PNG, JPEG');
            }
            // echo "banhbao";die;

            // radom tên hinh ảnh, để lấy ra không bị trùng
            //,... getClientOriginalName() lấy ra tên
            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(5)."_".$name;

            // echo $hinh_anh;die;
            while(file_exists('public/upload/tin-tuc'.$hinh_anh))
            {
                $hinh_anh = str_random(4)."_".$name;
            }
            // echo $name; die; 
            $file->move('public/upload/tin-tuc',$hinh_anh);
            $blog->hinhanh = $hinh_anh;

            // if($user->kh_avatar){
            //     unlink('public/upload/avatar/'.$user->kh_avatar);
            //     $user->kh_avatar = $hinh_anh;
            // }
            // else
            // {   
            //     $user->kh_avatar = $hinh_anh;
            // }
        
        }
        $blog->save();
        return redirect()->route('tintuc.list');


    }

    public function get_edit($id)
    {
        $tintuc['tintuc'] = db_tintuc::find($id);
        return view('admin.tin-tuc.edit',$tintuc);
    }

    public function post_edit($id,Request $tintuc2)
    {
        $blog = db_tintuc::find($id);
        $blog->tieude = $tintuc2->tieude;
        $blog->noidung = $tintuc2->noidung;
        $blog->id_trangthai = $tintuc2->trangthai;
        $blog->id_user = Auth::user()->user->id;

        //hinh anh
        if($tintuc2->hasFile('hinhanh'))
        {
            $file = $tintuc2->file('hinhanh');
            // echo $file;die;
            // kiểm tra  size
            $size = $file->getsize();
            if($size > 1024*1024)
            {
                // echo "size quá lớn chọn lại";
                return redirect()->back()->with('size','size quá lớn chọn lại');
            }
            // echo "banhbao";die;

            //kiểm tra đuôi, lấy ra đuôi file getClientOriginalExtension()
            $duoi_file = $file->getClientOriginalExtension();
            //tạo 1 mang arr để sử dụng in_array so sanh
            $arr_duoifile = ['png','jpg','jpeg','PNG','JPG','JPEG'];

            if(!in_array($duoi_file, $arr_duoifile))
            {
                // echo "Đuôi file size xin mời định dạng lại";
                return redirect()->back()->with('duoi_file','Bạn chỉ được thêm file có đuôi là JPG, PNG, JPEG');
            }
            // echo "banhbao";die;

            // radom tên hinh ảnh, để lấy ra không bị trùng
            //,... getClientOriginalName() lấy ra tên
            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(5)."_".$name;

            // echo $hinh_anh;die;
            while(file_exists('public/upload/tin-tuc'.$hinh_anh))
            {
                $hinh_anh = str_random(4)."_".$name;
            }
            $file->move('public/upload/tin-tuc',$hinh_anh);
            // echo $name; die; 
            if($blog->hinhanh){
                unlink('public/upload/tin-tuc'.$blog->hinhanh);
                $blog->hinhanh = $hinh_anh;

            }
            else
            {   
                $blog->hinhanh = $hinh_anh;

            }
        
        }
        $blog->save();
        return redirect()->route('tintuc.list');


    }

}
