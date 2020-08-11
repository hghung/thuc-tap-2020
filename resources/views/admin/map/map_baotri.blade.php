@extends('admin.master')
@section('tieude','Điểm bảo trì')
@section('admin_content')
    <section class="ls with_bottom_border">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="#">Homepage</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
                <!-- .col-* -->
                <div class="col-md-6 text-md-right">
                    <span class="dashboard-daterangepicker">
                        <i class="fa fa-calendar"></i>
                        <span></span>
                        <i class="caret"></i>
                    </span>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
    <!--  -->
    <section class="ls section_padding_top_5 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4">
                    <h3 class="dashboard-page-title">Địa điểm bảo trì   
                    </h3>
                </div>
                

            </div>

<!-- map -->
            <div class="row">
                <!-- Map -->
                <div class="col-xs-12 col-md-12 dashboard-map">

                    <div class="with_border with_padding no_bottom_border">
                        <div id="map"></div>
                    </div>
                    <div class="with_border no_top_border table-responsive">
                        <table class="table-striped">
                            <thead>
                            <tr>
                                <th width="13%">Khách hàng</th>
                                <th width="15%">Ngày - giờ hẹn</th>
                                <th width="12%">Trạng thái</th>
                                @if(Auth::user()->id_vaitro == 3)

                                @else
                                <th width="15%">Hỗ trợ</th>
                                @endif
                                <th width="10%">Điện thoại</th>
                                <th width="25%">Địa chỉ</th>
                                <th width="10%">Bản đồ</th>


                            </tr>

                            
                            @if(Auth::user()->id_vaitro == 1)
                                @foreach($map_ad as $ad)
                                <tr>
                                    <td>
                                        <span style="color:green">
                                            {{ $ad->baotrikh->ho_ten  }}
                                        </span>
                                    </td>
                                    {{--  --}}
                                    <td>
                                        {{date("d-m-Y  ",strtotime($ad->ngay)) }} 
                                        -
                                        {{date(" H:i A  ",strtotime($ad->gio)) }}
                                    </td>
                                    {{--  --}}
                                    <td>
                                        {{ $ad->baotristatus->trangthai  }}
                                    </td>
                                    {{--  --}}
                                    <td>
                                        <span style="color:rgb(32, 46, 248)">
                                            {{ $ad->baotrinv->ho_ten  }}
                                        </span>
                                    </td>
                                    {{--  --}}
                                    <td>
                                        {{ $ad->baotrikh->sdt  }}


                                    </td>
                                    {{--  --}}

                                    <td>
                                        {{ $ad->baotrikh->diachi->dia_chi  }}
                                    </td>
                                    {{--  --}}
                                    <td>
                                        <a href="{{ route('baotri.get.edit',['id' =>$ad->id]) }}" style="margin-left: 10px;"> 
                                            <i class="fa fa-cogs"></i>
                                        </a>

                                        <a href="{{ route('admin.ct.map',['id' => $ad->id]) }}" style="margin-left: 20px;"> 
                                            <i class="rt-icon2-map2"></i>
                                        </a>

                                    </td>
                                </tr>
                                @endforeach
                            @elseif(Auth::user()->id_vaitro == 3)
                                @foreach($nhanvien as $ad)
                                <tr>
                                    <td>
                                        <span style="color:green">
                                            {{ $ad->baotrikh->ho_ten  }}
                                        </span>
                                    </td>
                                    {{--  --}}
                                    <td>
                                        {{date("d-m-Y  ",strtotime($ad->ngay)) }} 
                                        -
                                        {{date(" H:i A  ",strtotime($ad->gio)) }}
                                    </td>
                                    {{--  --}}
                                    
                                    <td>
                                        <div class="dropdown" >
                                            
                                            <a data-toggle="dropdown" href="#" style="top: auto !important; bottom: 100% !important; color: rgb(245, 188, 30)">
                                                {{ $ad->baotristatus->trangthai }}
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route('baotri.success',['id' => $ad->id]) }}">
                                                    Hoàn thành
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('baotri.cancel',['id' => $ad->id]) }}">
                                                        Hủy
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    {{--  --}}
                                    <td>
                                        {{ $ad->baotrikh->sdt  }}


                                    </td>
                                    {{--  --}}

                                    <td>
                                        {{ $ad->baotrikh->diachi->dia_chi  }}
                                    </td>
                                    {{--  --}}
                                    <td>
                                        <a href="{{ route('admin.ct.map',['id' => $ad->id]) }}" style="margin-left: 20px;"> 
                                            <i class="rt-icon2-map2"></i>
                                        </a>

                                    </td>
                                </tr>
                                @endforeach
                            @endif

                            {{-- end --}}

                        </table>
                    </div>
                </div>
                <!-- .col-* -->
                <div >

                </div>
                
            </div>
            <!-- .row -->

        </div>
        <!-- .container -->
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script async defer 
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize">
    </script>

    <script defer>
        function initialize() {
            var mapOptions = {
                zoom: 13.7,
                minZoom: 6,
                maxZoom: 17,
                zoomControl:true,
                zoomControlOptions: {
                      style:google.maps.ZoomControlStyle.DEFAULT
                },
                center: new google.maps.LatLng(10.039904, 105.776280),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                panControl:false,
                mapTypeControl:false,
                scaleControl:false,
                overviewMapControl:false,
                rotateControl:false
              }

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            //addMarker({banhbao: {lat: 10.0266048,lng: 105.7767294}});
            //addMarker({banhbao: {lat: 10.0453833,lng: 105.7796137}});
            var y = $('#img').attr('data');
           
            @php
            if(Auth::user()->id_vaitro == 1)
            {
                foreach($map_ad as $baotri)
                {
                    $user = $baotri->baotrikh; // khach hang
                    $nhanvien = $baotri->baotrinv; // khach hang

                    $diachi = $user->diachi; // đia chi khach hang
                    
                
                
                echo'addMarker({banhbao: {lat: '.$diachi->lat.',lng: '.$diachi->lng.'},';
                echo "content: '<div style=width:200px><div class=row><div class=col-md-4 ><img style=width:80px;height:80px;border-radius:50%; src=../public/upload/avatar/$user->avatar ></div><div class=col-md-8 ><div style=margin-left:15px;>Khách hàng: <a style=color:green;margin-left:16px;><b>$user->ho_ten</b></a></div></br><div style=margin-left:15px;>Số điện thoại: <a style=margin-left:16px;><b>$user->sdt</b></a></div></div></div><div style=margin-top:5px;margin-bottom:5px;>Tiêu đề: <a href=# style=color:red> $baotri->tieude </a></div><div>Địa chỉ: $diachi->dia_chi</div> </div> '});";
                //muốn viêt dc model trong day phải khai bảng ở ngoài trước không nó sẽ lỗi
                // style phải viet xác nhau mới nhận được
                    // viet lòng php không cần mở dây nhây kep nó tự hiệu
                    // muốn nhận đươc dấu nhây đơn '' tài phải echo dấu nhây kép ""
                }
            }
            elseif(Auth::user()->id_vaitro == 3){
                foreach($nhanvien as $baotri)
                {
                    $user = $baotri->baotrikh; // khach hang
                    $nhanvien = $baotri->baotrinv; // khach hang

                    $diachi = $user->diachi; // đia chi khach hang
                    
                
                
                echo'addMarker({banhbao: {lat: '.$diachi->lat.',lng: '.$diachi->lng.'},';
                echo "content: '<div style=width:200px><div class=row><div class=col-md-4 ><img style=width:80px;height:80px;border-radius:50%; src=../public/upload/avatar/$user->avatar ></div><div class=col-md-8 ><div style=margin-left:15px;>Khách hàng: <a style=color:green;margin-left:16px;><b>$user->ho_ten</b></a></div></br><div style=margin-left:15px;>Số điện thoại: <a style=margin-left:16px;><b>$user->sdt</b></a></div></div></div><div style=margin-top:5px;margin-bottom:5px;>Tiêu đề: <a href=# style=color:red> $baotri->tieude </a></div><div>Địa chỉ: $diachi->dia_chi</div> </div> '});";
                //muốn viêt dc model trong day phải khai bảng ở ngoài trước không nó sẽ lỗi
                // style phải viet xác nhau mới nhận được
                    // viet lòng php không cần mở dây nhây kep nó tự hiệu
                    // muốn nhận đươc dấu nhây đơn '' tài phải echo dấu nhây kép ""
                }
            }
            
            @endphp
            
            function addMarker(props)
            {
                var marker = new google.maps.Marker({
                    position: props.banhbao,
                    map:map,
                    icon: '{{ asset('public/map.png') }}'
                });
                if(props.content){
                    var infoWindow = new google.maps.InfoWindow({
                        content:props.content
                    });
                    marker.addListener('click',function(){
                        infoWindow.open(map, marker);
                    });
                }
            }
            
                
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        
    </script>
@endsection