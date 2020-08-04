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
    
        x = navigator.geolocation;
        x.getCurrentPosition(success, failure);
        function success(position)
        {
            var myLat = position.coords.latitude;
            console.log(myLat);
            var myLong = position.coords.longitude;
            console.log(myLong);
    
            var coords = new google.maps.LatLng(myLat,myLong);
    
            var directionsDisplay = new google.maps.DirectionsRenderer(); 
            var directionsService = new google.maps.DirectionsService(); 
            var map;
            
            var a = new google.maps.LatLng(myLat, myLong);
            var b = new google.maps.LatLng(lat, lng);
    
            var mapOptions = {
                zoom: 13.7,
                minZoom: 6,
                maxZoom: 17,
                zoomControl:true,
                zoomControlOptions: {
                      style:google.maps.ZoomControlStyle.DEFAULT
                },
                center: coords,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                panControl:false,
                mapTypeControl:false,
                scaleControl:false,
                overviewMapControl:false,
                rotateControl:false
    
            };
            map = new google.maps.Map(document.getElementById('map'),mapOptions);
            directionsDisplay.setMap(map);
    
            function calculateRoute(){
                var request = {
                    origin: a,
                    destination: b,
                    travelMode: 'DRIVING'
                };
    
                directionsService.route(request, function(result, status){
                    // console.log(result, status);
                    if(status == "OK"){
                        $("#khoangcach").html("<div class='result-table'>" + result.routes[0].legs[0].distance.text + "</div>");
                        $("#thoigian").html("<div class='result-table'>" + result.routes[0].legs[0].duration.text + "</div>");
                        
                        directionsDisplay.setDirections(result);
                    }
                });
            }
            document.getElementById('get').onclick= function(){
                calculateRoute();
            }
    
    
        }
        function failure()
        {
    
        }
        
    
        
    
    </script>
   
@endsection

