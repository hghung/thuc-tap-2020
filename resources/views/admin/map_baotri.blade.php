@extends('admin.master')
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
                            <tr>
                                <th>
                                    Country
                                </th>
                                <th>
                                    Visits
                                </th>
                                <th>
                                    User Activity
                                </th>
                                <th>
                                    Online
                                </th>
                                <th>
                                    Demographic
                                </th>
                                <th></th>
                            </tr>

                            <tr>
                                <td>
                                    USA
                                </td>
                                <td>
                                    4,583
                                </td>
                                <td>
                                    <span class="sparklines" data-values="170,450,135,-170,-324,-386,-168,-10,55,375,520,270,490" data-type="bar" data-line-color="#007ebd" data-height="20">
                                    </span>
                                </td>
                                <td>
                                    235
                                </td>
                                <td>
                                    <span class="sparklines" data-values="170,450,135" data-type="pie" data-line-color="#007ebd" data-height="20">
                                    </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="settings-button" id="map-data-1" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </a>

                                        <ul class="dropdown-menu greylinks" aria-labelledby="map-data-1">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-print"></i> PDF
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-remove"></i> Cancel
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>


                            <tr>
                                <td>
                                    Canada
                                </td>
                                <td>
                                    7,934
                                </td>
                                <td>
                                    <span class="sparklines" data-values="200,150,735,70,158,386,68,130,155,475,520,370,490" data-type="bar" data-line-color="#007ebd" data-height="20">
                                    </span>
                                </td>
                                <td>
                                    235
                                </td>
                                <td>
                                    <span class="sparklines" data-values="170,135" data-type="pie" data-line-color="#007ebd" data-height="20">
                                    </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="settings-button" id="map-data-2" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </a>

                                        <ul class="dropdown-menu greylinks" aria-labelledby="map-data-2">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-print"></i> PDF
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-remove"></i> Cancel
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>


                            <tr>
                                <td>
                                    Australia
                                </td>
                                <td>
                                    3,656
                                </td>
                                <td>
                                    <span class="sparklines" data-values="170,450,135,870,824,386,868,810,55,375,520,270,490" data-type="bar" data-line-color="#007ebd" data-height="20">
                                    </span>
                                </td>
                                <td>
                                    235
                                </td>
                                <td>
                                    <span class="sparklines" data-values="770,250,135" data-type="pie" data-line-color="#007ebd" data-height="20">
                                    </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="settings-button" id="map-data-3" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </a>

                                        <ul class="dropdown-menu greylinks" aria-labelledby="map-data-3">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-print"></i> PDF
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-remove"></i> Cancel
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>


                            <tr>
                                <td>
                                    France
                                </td>
                                <td>
                                    1,516
                                </td>
                                <td>
                                    <span class="sparklines" data-values="670,350,135,-170,-324,-386,-468,-10,55,375,520,270,790" data-type="bar" data-line-color="#007ebd" data-height="20">
                                    </span>
                                </td>
                                <td>
                                    235
                                </td>
                                <td>
                                    <span class="sparklines" data-values="170,450" data-type="pie" data-line-color="#007ebd" data-height="20">
                                    </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="settings-button" id="map-data-4" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </a>

                                        <ul class="dropdown-menu greylinks" aria-labelledby="map-data-4">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-print"></i> PDF
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-remove"></i> Cancel
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Great Britain
                                </td>
                                <td>
                                    2,018
                                </td>
                                <td>
                                    <span class="sparklines" data-values="170,450,135,870,824,386,418,510,55,375,520,270,190" data-type="bar" data-line-color="#007ebd" data-height="20">
                                    </span>
                                </td>
                                <td>
                                    235
                                </td>
                                <td>
                                    <span class="sparklines" data-values="170,450,135" data-type="pie" data-line-color="#007ebd" data-height="20">
                                    </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="settings-button" id="map-data-5" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-cog"></i>
                                        </a>

                                        <ul class="dropdown-menu greylinks" aria-labelledby="map-data-5">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-print"></i> PDF
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-remove"></i> Cancel
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <ul class="pagination highlightlinks">
                                        <li class="disabled">
                                            <span>
                                                <i class="fa fa-angle-left"></i>
                                            </span>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <!-- .col-* -->
                
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
                zoom: 11,
                minZoom: 6,
                maxZoom: 17,
                zoomControl:true,
                zoomControlOptions: {
                      style:google.maps.ZoomControlStyle.DEFAULT
                },
                center: new google.maps.LatLng(10.00493, 105.711495),
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
           
            // @php 
            // foreach($bangtin as $nha)
            // {
            //     $nha2 = $nha->house;
            //     $user = $nha->user->member->kh_ten;
            //     $link = route('deatil.bangtin',['id' => $nha->id]);
            //     $giathue = number_format($nha->gia_thue,0,',','.');
            //    echo'addMarker({banhbao: {lat: '.$nha2->lat.',lng: '.$nha2->lng.'},';
            //    echo "content: ' <div style=width:233px><div><img style=width:233px;height:151px; src=./public/upload/$nha2->hinh_anh ></div> <div style=margin-top:5px;margin-bottom:5px;>Tiêu đề: <a href=$link style=color:blue> $nha->ten_bangtin </a> - Người bán: <a href=# style=color:#90c923>$user</a></div><div style=margin-top:5px;margin-bottom:5px;>Giá: <span style=color:red>$giathue</span> đ/tháng</div><div>Địa chỉ: $nha2->dia_chi</div> </div> '});";
            //    //muốn viêt dc model trong day phải khai bảng ở ngoài trước không nó sẽ lỗi
            //    // style phải viet xác nhau mới nhận được
            //     // viet lòng php không cần mở dây nhây kep nó tự hiệu
            //     // muốn nhận đươc dấu nhây đơn '' tài phải echo dấu nhây kép ""
            // }
         
            
            // @endphp
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