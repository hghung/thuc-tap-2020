<?php

namespace App\Http\Middleware;

use Closure;
Use Illuminate\Support\Facades\Auth;// phải khai bảo mới hiểu được thư viên Auth


class AdLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       if(Auth::check())
        {
            $user = Auth::user();
            if($user->id_vaitro == 1 )
                return $next($request);
            elseif($user->id_vaitro == 2 )
                return redirect()->route('taikhoan.dashboard');
            elseif($user->id_vaitro == 3 )
                return redirect()->route('get.logout');
            
        }       
        else
        {
            return redirect(''.Route('get.logout').'')->with('thongbao','Tài khoản và mật khẩu không chính xác');

        }
                
            
    }
}
