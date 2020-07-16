<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bangtin;
use App\Models\nha;


class TimkiemController extends Controller
{
    public function post_search(Request $rq)
    {
        // dd($house);
        $tukhoa = $rq->tukhoa;
        $city = $rq->city;
        $loainha = $rq->loainha;

        // echo $city;die;

        // dd($bangtin);
        $bangtin = bangtin::where('code_bangtin','like',"%$tukhoa%")->orwhere('ten_bangtin','like',"%$tukhoa%")->get();

        // $city2 = nha::where('province','=',$city)->get();
        
        // dd($city2);
        // $bangtin2 = bangtin::where('ten_sp','like',"%$tukhoa%")->orwhere('ma_sanpham','like',"%$tukhoa%")->count();

        // $collection = collect([$bangtin2]);
        // $banhbao = $collection->sum();

        return view('house.tim-kiem.tim-kiem',['bangtin'=>$bangtin,'tukhoa'=>$tukhoa]);

    }

   
}
