<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Toastr;
use Artisan;
class BaotriController extends Controller
{
    public function list()
    {
        return view('admin.bao-tri.list');
        
    }

    public function get_add()
    {
        return view('admin.bao-tri.add');
        
    }

    

   

}
