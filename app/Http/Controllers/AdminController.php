<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Toastr;
use Artisan;
class AdminController extends Controller
{
    public function home()
    {
        return view('admin.index');
        
    }

    public function map_baotri()
    {
        return view('admin.map_baotri');
        
    }

    public function lich_baotri()
    {
        return view('admin.lich_baotri');
        
    }

   

}
