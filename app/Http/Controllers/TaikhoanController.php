<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\thanhvien;

Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;
use Toastr;
use App\Models\loainha;
use App\Models\taisan;
use App\Models\bangtin;
use App\Models\tienich;




use App\Models\district;
use App\Models\province;
use App\Models\ward;


class TaikhoanController extends Controller
{	
	public function dashboard()
    {
        
        return view('house.account.dashboard');
    }

    public function dangtin()
    {
        $loainha = loainha::all();
        $taisan = taisan::all();
        $province = Province::all();
        $tienich = tienich::all();

       
        return view('house.account.dangtin',['loainha' => $loainha, 'taisan' =>$taisan,'tienich' =>$tienich,'province' =>$province]);
    }

    public function profile()
    {
    $province = province::all();
        $district = district::all();
        $ward = ward::all();
        return view('house.account.profile',['province' => $province, 'district' => $district, 'ward' => $ward]);
    }

    public function ds_bangtin()
    {
        $dsbangtin = bangtin::where('id_thanhvien','=', Auth::user()->id)->get();
        return view('house.account.ds_bangtin',['dsbangtin' => $dsbangtin]);
    }

    public function ds_yeutich()
    {
        $dsyeutich = bangtin::where('id_thanhvien','=', Auth::user()->id);
        
        return view('house.account.dsbangtin',['dsbangtin' => $dsbangtin]);
    }


    public function update_profile($id, Request $update)
    {
        // $this->validate($tk,[
        //     'hoten' => 'required|min:2|max:32',
        //     'email' => 'required|email',
        //     'phone' => 'required|min:10|max:10',

        // ],[
        //     'email.required' => 'Bạn chưa nhập Email !',
        //     'email.email' => 'Định dạng Email chưa đúng vd: @gmail.com !',
        //     'email.max' => 'Email không được vượt hơn 50 ký tự !',
        //     // 'email.unique' => 'Email đã được đăng ký !',

        //     'phone.required' => 'Số điện thoại chưa nhập !',
        //     'phone.min' => 'Số điện thoại phải đủ 10 số !',
        //     'phone.max' => 'Số điện thoại không quá 10 số !',

        //     'hoten.required' => 'Bạn chưa nhập tên !',
        //     'hoten.min' => 'Tên tối thiểu 2 ký tự trở lên !',
        //     'hoten.max' => 'Tên không được vượt hơn 32 ký tự !',

            $id = Auth::user()->id;


            $user = thanhvien::find($id);

            


            $user->kh_ho = $update->ho;
            $user->kh_ten = $update->ten;
            $user->kh_email = $update->email;
            $user->kh_gioitinh = $update->gioitinh;
            $user->kh_birthday = $update->birthday;
            $user->kh_cmnd = $update->cmnd;
            $user->kh_phone = $update->phone;
            // dia chi
            $user->kh_address = $update->diachi;
            $user->kh_province = $update->tinhthanh;
            $user->kh_district = $update->quanhuyen;
            $user->kh_ward = $update->phuongxa;

            // avatar

            if($update->hasFile('avatar'))
            {
                $file = $update->file('avatar');
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
                while(file_exists('public/upload/avatar'.$hinh_anh))
                {
                    $hinh_anh = str_random(4)."_".$name;
                }
                // echo $name; die; 
                $file->move('public/upload/avatar',$hinh_anh);
                if($user->kh_avatar){
                    unlink('public/upload/avatar/'.$user->kh_avatar);
                    $user->kh_avatar = $hinh_anh;
                }
                else
                {   
                    $user->kh_avatar = $hinh_anh;
                }
            
            }
            else
            {
                $user->kh_avatar = "";
            }

            // dd($user);
             
             $user->save();
             return redirect()->bacK();
    }


    // update password
    public function password()
    {
        return view('house.account.change_password');
    }
    
    public function update_password($id, Request $passwd)

    {
        $user = User::find($id);
        $oldPassword = $passwd->oldpassword;

        $newPassword = $passwd->password;
        // <!-- sư dụng Auth thay vì $user vì Auth mạnh hơn -->
        //nhớ phải !, hàm 

        // echo $oldPassword;die;

        if(!Hash::check($oldPassword, Auth::user()->password))
        {
            echo "banhbao";die;
            Toastr::warning('Mật khẩu cũ không đúng ', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->back();

        }
        else
        {
            $this->validate($passwd,[
                'password' => 'required|min:3|max:32',
                'passwordAgain' => 'required|same:password'
            ],[
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu phải có it nhât 3 ký tự',
                'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
                'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
            ]);

            $user->password= bcrypt($newPassword);

            $user->save();
            Toastr::success('Cập nhật mật khẩu thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->back();

        }
        
    }

  



/////////////////////////////////////////////////////////
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
             echo "<option value='".$wd->id."'>".$wd->ward_prefix." ".$wd->ward_name."</option>"; 
            // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
        }
    }
// ////////////////////////////////////////////////////////////////////////////


    

  

}
