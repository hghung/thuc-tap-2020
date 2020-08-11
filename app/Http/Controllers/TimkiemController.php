<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_baotri;
use App\Models\db_user;
use App\Models\db_tintuc;

use DB;

Use Illuminate\Support\Facades\Auth;


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
                $user1 = db_user::all();
                foreach($user1 as $user2);
                {
                    // dd($user2);
                }
                $data = db_baotri::where('tieude', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
                    
                    // dd($data);
            }
            else
            {
            $data =db_baotri::orderBy('id', 'desc')->get();
            
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
                    <td class="media-middle">';
                        if($row->id_nhanvien)
                        {
                            $output .='<span style="color:rgb(32, 46, 248)">
                                        '.$row->baotrinv->ho_ten.'
                                        </span>';
                        }
                        else
                        {
                            $output .= ' Chưa cập nhật';
                        }

                        
                $output .= '</td>

                    <td class="media-middle">
                        '.$ngay.' 
                        -
                        '.$gio.' 
                    </td>


                    <td class="media-middle">';
                        if($row->id_trangthai == 2){
                            $output .= '<span style="color:blue">
                                '.$row->baotristatus->trangthai.'
                            </span>';
                        }
                
                        elseif($row->id_trangthai == 1){
                            $output .= '<span style="color:#f3aa21">
                                '.$row->baotristatus->trangthai.'
                            </span>';
                        }

                        elseif($row->id_trangthai == 3){
                            $output .= '<span style="color:rgb(44, 236, 76)">
                                '.$row->baotristatus->trangthai.'
                            </span>';
                        }

                        elseif($row->id_trangthai == 4){
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
                        
                        <a href="'.route('baotri.get.edit',['id' => $row->id]).'" > 
                            <i class="fa fa-cogs" style="margin-right:20px;"></i>
                        </a>
                        <a href="'.route('baotri.delete',['id' => $row->id]).'" > 
                            <i class="rt-icon2-trash" style="color:red"></i>
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

    public function timkiem_baotri_kp(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $user1 = db_user::all();
                foreach($user1 as $user2);
                {
                    // dd($user2);
                }
                $data = db_baotri::onlyTrashed()
                                ->where('tieude', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
                    
            }
            else
            {
            $data =db_baotri::onlyTrashed()
                            ->orderBy('id', 'desc')
                            ->get();
            
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
                    <td class="media-middle">';
                        if($row->id_nhanvien)
                        {
                            $output .='<span style="color:rgb(32, 46, 248)">
                                        '.$row->baotrinv->ho_ten.'
                                        </span>';
                        }
                        else
                        {
                            $output .= ' Chưa cập nhật';
                        }

                        
                $output .= '</td>

                    <td class="media-middle">
                        '.$ngay.' 
                        -
                        '.$gio.' 
                    </td>


                    <td class="media-middle">';
                        if($row->id_trangthai == 2){
                            $output .= '<span style="color:blue">
                                '.$row->baotristatus->trangthai.'
                            </span>';
                        }
                
                        elseif($row->id_trangthai == 1){
                            $output .= '<span style="color:#f3aa21">
                                '.$row->baotristatus->trangthai.'
                            </span>';
                        }

                        elseif($row->id_trangthai == 3){
                            $output .= '<span style="color:rgb(44, 236, 76)">
                                '.$row->baotristatus->trangthai.'
                            </span>';
                        }

                        elseif($row->id_trangthai == 4){
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
                        <a href="'.route('baotri.post.kp',['id' => $row->id]).'" > 
                            <i class="rt-icon2-tools-2"></i>
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
                <td align="center">';
                    if(Auth::user()->id_vaitro == 2)
                    {
                        if($row->id == 1)
                        {
                            $output .='Của admin';
                        }
                        else
                        {
                            $output .='<a href="'.route('users.get.edit',['id' => $row->id]).'"> 
                                <i class="fa fa-cogs"></i>
                            </a>';
                        }
                    }
                    elseif(Auth::user()->id_vaitro == 1)
                    {
                        $output .='<a href="'.route('users.get.edit',['id' => $row->id]).'"> 
                            <i class="fa fa-cogs"></i>
                        </a>';
                    }

                    
            $output .='    </td>
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

    public function timkiem_tintuc(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $user1 = db_user::all();
                foreach($user1 as $user2);
                {
                    // dd($user2);
                }
                $data = db_tintuc::where('tieude', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
                    
                    // dd($data);
            }
            else
            {
            $data =db_tintuc::orderBy('id', 'desc')->get();
            
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
            foreach($data as $row)
            {
                
                $ngaytao = date("A H:i || d-m-Y  ",strtotime($row->created_at));

                $output .= '
                <tr class="item-editable">
                    <td>
                        '.$row->tieude.'
                    </td>
                    <td class="media-middle">
                        <span style="color:green">
                            '.$row->tintucuser->ho_ten.'
                        </span>
                    </td>

                    <td class="media-middle">';
                        if($row->id_trangthai == 2){
                            $output .= '<span style="color:blue">
                                '.$row->tintucstatus->trangthai.'
                            </span>';
                        }
                
                        elseif($row->id_trangthai == 1){
                            $output .= '<span style="color:#f3aa21">
                                '.$row->tintucstatus->trangthai.'
                            </span>';
                        }

                    $output .=' 
                    </td>
                    <td class="media-middle">
                        '.$ngaytao.' 
                    </td>
                    --  --
                    <td align="center">
                        <a href="'.route('tintuc.get.edit',['id' => $row->id]).'" > 
                            <i class="fa fa-cogs" style="margin-right:20px;"></i>
                        </a>
                        <a href="'.route('tintuc.delete',['id' => $row->id]).'" > 
                            <i class="rt-icon2-trash" style="color:red"></i>
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

    public function timkiem_tintuc_kp(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $user1 = db_user::all();
                foreach($user1 as $user2);
                {
                    // dd($user2);
                }
                $data = db_tintuc::onlyTrashed()
                                ->where('tieude', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
                    
            }
            else
            {
            $data =db_tintuc::onlyTrashed()
                            ->orderBy('id', 'desc')
                            ->get();
            
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
            foreach($data as $row)
            {
                
                $ngaytao = date("A H:i || d-m-Y  ",strtotime($row->created_at));

                $output .= '
                <tr class="item-editable">
                    <td>
                        '.$row->tieude.'
                    </td>
                    <td class="media-middle">
                        <span style="color:green">
                            '.$row->tintucuser->ho_ten.'
                        </span>
                    </td>

                    <td class="media-middle">';
                        if($row->id_trangthai == 2){
                            $output .= '<span style="color:blue">
                                '.$row->tintucstatus->trangthai.'
                            </span>';
                        }
                
                        elseif($row->id_trangthai == 1){
                            $output .= '<span style="color:#f3aa21">
                                '.$row->tintucstatus->trangthai.'
                            </span>';
                        }

                    $output .=' 
                    </td>
                    <td class="media-middle">
                        '.$ngaytao.' 
                    </td>
                    --  --
                    <td align="center">
                        <a href="'.route('tintuc.post.kp',['id' => $row->id]).'" > 
                            <i class="rt-icon2-tools-2"></i>
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
