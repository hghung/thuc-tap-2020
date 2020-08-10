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
            if($user->id_vaitro == 1  || $user->id_vaitro == 2 || $user->id_vaitro == 3 )
                return $next($request);
            elseif($user->id_vaitro == 4 )
                return redirect()->route('home1');
            
        }       
        else
        {
            return redirect(''.Route('home1').'')->with('thongbao','Tài khoản và mật khẩu không chính xác');

        }
                
            
    }
}
