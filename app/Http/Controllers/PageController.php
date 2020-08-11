<?php

namespace App\Http\Controllers;

use App\Models\db_tintuc;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\User;
use App\Views;

use Carbon\Carbon;
Use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Arr;


class PageController extends Controller
{
    
    public function home()
    {
        $home['blog'] = db_tintuc::where('id_trangthai','=',2) // duyet mới hiện thị
                                ->orderBy('views', 'desc') // giảm dần
                                ->take(3) // lấy ra 3
                                ->get();
        return view('page.index',$home);
        
    }

    public function blog()
    {
        $home['blog'] = db_tintuc::where('id_trangthai','=',2) // duyet mới hiện thị
                                ->orderBy('id', 'desc') // giảm dần
                                ->get();
        return view('page.blog.blog',$home);
        
    }

    public function detail_blog($id)
    {
        $tintuc = db_tintuc::find($id);

        // luot xem 
        views($tintuc)
        ->cooldown(Carbon::now()->addMinutes(1))
        ->record();
    
        $data = db_tintuc::where('id',$id)->update(['views'=>views($tintuc)->count()]);

        return view('page.blog.blog-single',['tintuc' => $tintuc]);
        
    }

    

    

   
}
