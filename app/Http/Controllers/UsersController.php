<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Toastr;
use Artisan;
class UsersController extends Controller
{
    public function list()
    {
        return view('admin.Users.list');
        
    }

    public function get_add()
    {
        return view('admin.Users.add');
        
    }

    

   

}
