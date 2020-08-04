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
                <div class="col-md-1">
                    <a class="btn btn-primary" style="color:#fff; border-radius:15px; font-size:12px;" href="{{route('admin.map')}}">Quay lại</a>
                </div>
                <div class="col-md-1">
                    <button id="get" style="border-radius:15px;" class="btn btn-success">Xem tọa độ</button>
                </div>

            </div>

<!-- map -->
            <div class="row">
                <!-- Map -->
                <div class="col-xs-12 col-md-12 dashboard-map">
                    <style>
                        #map
                        {
                            height: 480px;
                        }
                    </style>
                    <div class="with_border with_padding no_bottom_border">
                        <div id="map"></div>
                    </div>

                    <div class="with_border no_top_border table-responsive">
                        <table class="table-striped">
                            <thead>
                            <tr>
                                <th width="20%">Khách hàng</th>
                                <th width="15%">Ngày - giờ hẹn</th>
                                <th width="15%">Điện thoại</th>
                                <th width="15%">Khoảng cách</th>
                                <th width="15%">Khoảng thời gian</th>
                            </tr>

                            

                            <tr>
                                <td>
                                    <span style="color:green">
                                        {{ $chitiet->baotrikh->ho_ten  }}
                                    </span>
                                </td>
                                {{--  --}}
                                <td>
                                    {{date("d-m-Y  ",strtotime($chitiet->ngay)) }} 
                                    -
                                    {{date(" H:i A  ",strtotime($chitiet->gio)) }}
                                </td>
                                {{--  --}}
                                <td>
                                    {{ $chitiet->baotrikh->sdt  }}

                                </td>
                                {{--  --}}
                                <td id="khoangcach">
                                    
                                </td>
                                {{--  --}}
                                <td id="thoigian">

                                </td>
                                {{--  --}}

                                
                                
                            </tr>

                            {{-- end --}}

                        </table>
                    </div>
                </div>
            </div>
            <!-- .row -->

        </div>
        <!-- .container -->
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script async defer 
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize">
    </script>

    <script>
        var lat = {{ $chitiet->baotrikh->diachi->lat }};
        var lng = {{ $chitiet->baotrikh->diachi->lng }};
    
        x = navigator.geolocation; // khai bao để lấy ra vị trí
        x.getCurrentPosition(success, failure);
         // lấy ra vị trí hiện tại
        function success(position)
        {
            var myLat = position.coords.latitude;
            console.log(myLat); // lấy ra vị trí lat
            var myLong = position.coords.longitude;
            console.log(myLong); // lấy ra vị trí long
            
            // gôm lat va long lại
            var coords = new google.maps.LatLng(myLat,myLong);
            
            //khai báo
            var directionsDisplay = new google.maps.DirectionsRenderer(); 
            var directionsService = new google.maps.DirectionsService(); 
            var map;
            
            // lấy ra vị trí hiện tại
            var a = new google.maps.LatLng(myLat, myLong);
            // lấy vị trí của địa điểm trên csdl
            var b = new google.maps.LatLng(lat, lng);
    
            var mapOptions = {
                zoom: 13.7,
                minZoom: 6,
                maxZoom: 17,
                zoomControl:true,
                zoomControlOptions: {
                      style:google.maps.ZoomControlStyle.DEFAULT
                },
                // hiện thị ở giưa vị trí hiện tại
                center: coords,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                panControl:false,
                mapTypeControl:false,
                scaleControl:false,
                overviewMapControl:false,
                rotateControl:false
    
            };
            // hiện bản đồ
            map = new google.maps.Map(document.getElementById('map'),mapOptions);
            // hiện thị đường đi tới 2 điểm trong bản đồ
            directionsDisplay.setMap(map);
            // khai báo đường đi từ a -> b phương tiện xe
            function calculateRoute(){
                var request = {
                    origin: a,
                    destination: b,
                    travelMode: 'DRIVING'
                };
    
                directionsService.route(request, function(result, status){
                    // console.log(result, status);
                    if(status == "OK"){
                        // lấy ra khoảng cách và thời gian
                        $("#khoangcach").html("<div class='result-table'>" + result.routes[0].legs[0].distance.text + "</div>");
                        $("#thoigian").html("<div class='result-table'>" + result.routes[0].legs[0].duration.text + "</div>");
                        // hiện thị kết quả trên bảng đồ 2 điểm và khoang cách & time
                        directionsDisplay.setDirections(result);
                    }
                });
            }
            // click vào nút button để chạy
            document.getElementById('get').onclick= function(){
                calculateRoute();
            }
    
    
        }
        function failure()
        {
    
        }
        
    
        
    
    </script>
   
@endsection

