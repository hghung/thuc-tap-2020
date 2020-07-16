<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Toastr;
use App\User;

use App\Models\thanhvien;


class LoginController extends Controller
{   
    public function login()
    {
    	return view('admin.login');
    }

    public function post_login(Request $lg)
    {
    	$this->validate($lg,[
            'username' => 'required',
            'password' =>'required|min:3|max:32',
            
        ],[
            'username.required' => 'Bạn chưa nhập tài khoản !',
            'password.required' => 'Bạn chưa nhập mật khẩu !',
        ]);
        $username =  $lg->username;
        $password = $lg->password;
        // echo $lg->username;
        // echo $lg->password;/
        // die;
        if(Auth::attempt(['username'=>$username,'password'=>$password]))
            if(Auth::user()->trang_thai == 1)
            {
                    Toastr::success('Hi '.Auth::user()->user->ho_ten.'', 'Welcome', ["positionClass" => "toast-top-right"]);

                    // echo "Thanh Cong";die;
                    return redirect(''.route('admin.dashboard').'');

               
            }
            else
            {
                echo "tai khoan bi khoa";die;

                return redirect()->back()->with('disable','Tài khoản bạn đã bị khóa !');
            }
        else
            Toastr::error('Mật khẩu không đúng vui lòng thử lại !', 'Thông báo', ["positionClass" => "toast-top-right"]);

            return redirect()->back()->with('thongbao','Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('get.login');
    }

    // 
    public function post_reg(Request $reg)
    {
        // $this->validate($reg,[
        //     'phone' =>'required|max:10',
        //     'name' =>'required|min:2|max:15',
        //     'lastname' =>'required|min:2|max:8',
        //     'username' =>'required|min:4|max:15|unique:account,username',
        //     'email' => 'required|email|max:32|unique:info,info_email',
        //     'password' => 'required|min:3|max:50',
        //     'confirmpassword' => 'required|same:password',
            
        // ],[

        //     'phone.required' => 'Bạn chưa nhập số điện thoại !',
        //     'phone.max' => 'Số điện thoại không được hơn 10 số !',

        //     'name.required' => 'Bạn chưa nhập tên !',
        //     'name.min' => 'Tên tối thiếu 2 ký tự !',
        //     'name.max' => 'Tên tối đa 15 ký tự !',

        //     'lastname.required' => 'Bạn chưa nhập Họ !',
        //     'lastname.min' => 'Họ tối thiếu 2 ký tự !',
        //     'lastname.max' => 'Họ tối đa 10 ký tự !',

        //     'username.required' => 'Bạn chưa nhập tên đăng nhập !',
        //     'username.min' => 'Tên đăng nhập tối thiểu 4 ký tự trở lên !',
        //     'username.max' => 'Tên đăng nhập không được vượt hơn 15 ký tự !',
        //     'username.unique' => 'Tên đăng nhập đã tồn tại !',


        //     'email.required' => 'Bạn chưa nhập Email !',
        //     'email.email' => 'Định dạng Email chưa đúng vd: @gmail.com !',
        //     'email.max' => 'Email không được vượt hơn 32 ký tự !',
        //     'email.unique' => 'Email đã tồn tại !',


        //     'password.required' => 'Bạn chưa nhập mật khẩu !',
        //     'password.min' => 'Mật khẩu phải có it nhât 6 ký tự !',
        //     'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự !',
        //     'confirmpassword.required' => 'Bạn chưa nhập lại mật khẩu !',
        //     'confirmpassword.same' => 'Nhập lại mật khẩu không trùng khớp !'
        // ]);

        $account = new User;
        
            $account->username = $reg->username;
            $account->password = bcrypt($reg->password);
            $account->vai_tro = '2';
            $account->status = '1';

            // echo $account; die;
            $account->save();

        if($account)
        {
            // info
            $user = new thanhvien;
            $user->kh_ten = $reg->name;
            $user->kh_ho = $reg->lastname;

            $user->kh_email = $reg->email;
            $user->kh_gioitinh = $reg->gioi_tinh;


            $user->kh_cmnd = $reg->cmnd;
            $user->kh_phone = $reg->phone;
            $user->id_user = $account->id;

            $user->id_user = $account->id;
            // echo $user; die;   
            $user->save();
        }
            $user->kh_ma = "USER-000".$user->id;
            $user->save();

         
            

            
        Toastr::success('Đăng ký thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect(''.route('page.login').'')->with('reg','Chúc mừng bạn đã đăng ký thành công');
    }
}
