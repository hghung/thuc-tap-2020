<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;


use App\Models\hopdong;

class ContractController extends Controller
{
    public function contract()
    {
        $hopdong = hopdong::where('id_user1','=', Auth::user()->id)->get();
        return view('house.account.contract',['hopdong' => $hopdong]);
    }

    public function detail_contract($id)
    {
        $hopdong['hopdong'] = hopdong::find($id);
        return view('house.account.detail-contract',$hopdong);
    
    }

    public function huy_hopdong($id)
    {   
       // tac_gia::where('id',$id)->update(['phe_duyet'=>1]);
       //  return redirect('/Ntkd@@/danh-sach-tac-gia');
        $data = hopdong::where('id',$id)->update(['trang_thai'=>1]);
        $data2 = bangtin::where('id_bangtin','=',$id)->update(['trang_thai'=>2]);

        //var_dump($data);die;
        // Session::put('msg','')
        Toastr::warning('Hủy hợp đồng', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }
}
