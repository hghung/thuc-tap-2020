<?php

namespace App\Http\Controllers;

use App\Models\db_tintuc;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\district;
use App\Models\province;
use App\Models\ward;
use App\User;
use App\Views;


use Illuminate\Support\collection;




use DB;

use Carbon\Carbon;
Use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Arr;


class PageController extends Controller
{
    
    public function home()
    {
        $home['blog'] = db_tintuc::where('id_trangthai','=',2)
                                ->orderBy('id', 'desc')
                                ->get()
        return view('page.index');
        
    }

    

    

   
}
