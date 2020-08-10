<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_baotri;
use App\Models\db_user;




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

    public function timkiem_baotri(Request $request)
    {
      if($request->ajax())
      {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
          $data = db_baotri::where('tieude', 'like', '%'.$query.'%')
                            ->orwhere('id_khachhang', 'like', '%'.$query.'%')
                            ->orderBy('id', 'asc')
                            ->get();
        }
        else
        {
          $data =db_baotri::orderBy('id', 'asc')->get();
           
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
          foreach($data as $row)
          {
            
            $ngay = date("d-m-Y  ",strtotime($row->ngay));
            $gio = date(" H:i A  ",strtotime($row->gio));
            $ngaytao = date("A H:i || d-m-Y  ",strtotime($row->created_at));

            $output .= '
            <tr class="item-editable">
                <td>
                   '.$row->tieude.'
                </td>
                <td class="media-middle">
                    <span style="color:green">
                        '.$row->baotrikh->ho_ten.'
                    </span>
                </td>
                <td class="media-middle">
                    <span style="color:rgb(32, 46, 248)">
                        '.$row->baotrinv->ho_ten.'
                    </span>
                </td>

                <td class="media-middle">
                    '.$ngay.' 
                    -
                    '.$gio.' 
                </td>


                <td class="media-middle">';
                    if($row->id_trangthai == 2){
                        $output .= '<span style="color:rgb(44, 236, 76)">
                            '.$row->baotristatus->trangthai.'
                        </span>';
                    }
            
                    elseif($row->id_trangthai == 1){
                        $output .= '<span style="color:red">
                            '.$row->baotristatus->trangthai.'
                        </span>';
                    }
    $output .= '</td>
                <td class="media-middle">
                    '.$ngaytao.' 
                </td>
                --  --
                <td align="center">
                    <a href="#"> 
                        <i class="fa fa-cogs"></i>
                    </a>
                </td>
            </tr>
            ';
          }
        }
        else
        {
          $output = '
          <div>
          Không có dữ liệu !
          </div>
          ';
        }
        $data = array(
          'banhbao'  => $output,
          'total_data'  => $total_row
        );

        echo json_encode($data);
      }
    }

    public function timkiem_user(Request $request)
    {
      if($request->ajax())
      {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
          $data = db_user::where('ma_user', 'like', '%'.$query.'%')
                            ->orwhere('ho_ten', 'like', '%'.$query.'%')
                            ->orwhere('sdt', 'like', '%'.$query.'%')
                            ->orwhere('cmnd', 'like', '%'.$query.'%')
                            ->orwhere('email', 'like', '%'.$query.'%')
                            ->orderBy('id', 'asc')
                            ->get();
        }
        else
        {
          $data =db_user::orderBy('id', 'asc')->get();
           
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
          foreach($data as $row)
          {
            $output .= '
            <tr class="item-editable">
                <td>
                    '.$row->ma_user.'
                </td>
                
                <td class="media-middle">
                    '.$row->user2->username.'
                </td>
                
                <td class="media-middle">
                    '.$row->ho_ten.'
                </td>
               
                <td class="media-middle">';
                    if($row->user2->id_vaitro == 1){
                        $output .= '<span style="color:red"> '.$row->user2->vaitro->vt_ten.' </span>';
                    }
            
                    elseif($row->user2->id_vaitro == 2){
                        $output .= '<span style="color:orange"> '.$row->user2->vaitro->vt_ten.' </span>';
                    }
           
                    elseif($row->user2->id_vaitro == 3){
                        $output .= '<span style="color:rgb(32, 46, 248)">'.$row->user2->vaitro->vt_ten. '</span>';
                    }
            
                    elseif($row->user2->id_vaitro == 4){
                        $output .= '<span style="color:green"> '.$row->user2->vaitro->vt_ten.' </span>';

                    }
                    
    $output .= '</td>
               
                <td class="media-middle" align="center">';
                    if($row->user2->trang_thai == 1){
                        $output .= '<span style="color:green">
                            <i class="fa fa-unlock"></i>
                        </span>';
                    }
            
                    elseif($row->user2->trang_thai == 2){
                        $output .= '<span style="color:red">
                            <i class="fa fa-lock"></i>
                        </span>';
                    }
            
    $output .='   </td>
                <td align="center">
                    <a href="#"> 
                        <i class="fa fa-cogs"></i>
                    </a>
                </td>
            </tr>
            ';
          }
        }
        else
        {
          $output = '
          <div>
          Không có dữ liệu !
          </div>
          ';
        }
        $data = array(
          'banhbao'  => $output,
          'total_data'  => $total_row
        );

        echo json_encode($data);
      }
    }

   
}
