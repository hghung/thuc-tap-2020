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
                    <a class="btn btn-primary" style="color:#fff; border-radius:15px; font-size:12px;" href="{{route('admin.map')}}">Quay lại</a>
                </div>
                

            </div>

<!-- map -->
            <div class="row">
                <!-- Map -->
                <div class="col-xs-12 col-md-12 dashboard-map">
                    <style>
                        #map
                        {
                            height: 700px;
                        }
                    </style>
                    <div class="with_border with_padding no_bottom_border">
                        <div id="map"></div>
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
    x = navigator.geolocation; 
    x.getCurrentPosition(success, failure); 
    function success(position) 
    {
        var myLat = position.coords.latitude;
        var myLong = position.coords.longitude;
        var coords = new google.maps.LatLng(myLat,myLong);
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
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var marker = new google.maps.Marker({
            position: coords,
            map:map,
            icon: '{{ asset('public/user.png') }}'
        });
    }
    function failure()
    {

    }
</script>
@endsection