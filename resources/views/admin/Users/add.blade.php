@extends('admin.master')
@section('admin_content')
    <section class="ls with_bottom_border">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">Edit Profile</li>
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

    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h3>Thêm tài khoản
                        <small>profile</small>
                    </h3>
                </div>
            </div>
            <!-- .row -->


            <div class="row">
                <div class="col-xs-12">

                    <form class="form-horizontal">
                        <div class="row flex-row">
                            <div class="col-md-6">

                                <div class="with_border with_padding">

                                    <h4>Thông tin khách hàng</h4>

                                    <hr>

                                    
                                   
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Họ tên:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    {{--    --}}
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Số điện thoại:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    {{--    --}}
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Email:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    {{--    --}}
                                    <div class="row form-group">
                                        <label class="col-lg-4 control-label">CMND / Căn cước:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <!-- .with_border -->

                            </div>
                            <!-- .col-* -->

                            <div class="col-md-6">
                                <div class="with_border with_padding">

                                    <h4>Bảo mật</h4>

                                    <hr>

                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label" for="user-profile-avatar">Select Avatar</label>
                                        <div class="col-lg-9">
                                            <input type="file" id="user-profile-avatar">
                                            <p class="help-block">Select your 200x200px avatar</p>

                                        </div>
                                    </div>

                                    
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">New password:</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Repeat New password:</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>


                                </div>
                                <!-- .with_border -->

                            </div>
                            <!-- .col-* -->

                        </div>
                        <!-- .row -->

                        <div class="row flex-row">
                            <!-- .col-* -->
                            <div class="col-md-12">
                                <div class="with_border with_padding">

                                    <h4>Địa chỉ </h4>

                                    <hr>

                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Quận / Huyện:</label>
                                        <div class="col-lg-7">
                                            <select class="form-control">
                                                <option selected="">Select Country</option>
                                                <option>USA</option>
                                                <option>United Kingdom</option>
                                                <option>Australia</option>
                                                <option>Germany</option>
                                                <option>France</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Phường / Xã:</label>
                                        <div class="col-lg-7">
                                            <select class="form-control">
                                                <option selected="">Select Country</option>
                                                <option>USA</option>
                                                <option>United Kingdom</option>
                                                <option>Australia</option>
                                                <option>Germany</option>
                                                <option>France</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Địa chỉ đầ đủ:</label>
                                        <div class="col-lg-7">
                                            <input type="text"  id="timkiem" class="form-control" placeholder="Nhập đia chỉ" required>
                                        </div>
                                    </div>

                                    {{-- lat --}}
                                    <input type="hidden" class="form-control" name="lat" id="lat">
                                    {{-- lng --}}
                                    <input type="hidden" class="form-control" name="lng" id="lng">

                                    <style>
                                        #map
                                        {
                                            width: 1130px;
                                            height: 400px;
                                        }
                                    </style>
                                    <div class="row form-group">
                                        <div id="map"  class="col-md-12 " > 
                                            {{--  ban do  --}}
                                        </div>
                                    </div>


                                </div>
                                <!-- .with_border -->

                            </div>
                            <!-- .col-* -->
                        </div>
                        <!-- .row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div>

                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="admin_profile.html"  class="btn btn-danger" style="color: #fff">Cancel</a>

                                </div>

                            </div>

                        </div>
                        <!-- .row -->
                    </form>
                </div>
                <!-- .col-* main column -->

            </div>
            <!-- .row main columns -->
        </div>
        <!-- .container -->
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    
        <script async defer 
            src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&&amp;libraries=places%2Cgeometry&amp;callback=initMap&amp;ver=1">
        </script>
        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {   lat: 10.0299337, 
                                lng: 105.7706153
                            },
                    zoom: 15
                });
                var marker = new google.maps.Marker({
                    position:{
                        lat: 10.0299337, 
                        lng: 105.7706153
                    },
                    map : map,
                    draggable: true
                });
                var searchBox = new google.maps.places.SearchBox(document.getElementById('timkiem'));
                google.maps.event.addListener(searchBox,'places_changed',function(){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i, place;
                    for(i = 0; place=places[i]; i++)
                    {
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                    }
                    map.fitBounds(bounds);
                    map.setZoom(15);
                });
                google.maps.event.addListener(marker,'position_changed',function(){
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();
                    $('#lat').val(lat);
                    $('#lng').val(lng);
                });
            }
        </script>

@endsection