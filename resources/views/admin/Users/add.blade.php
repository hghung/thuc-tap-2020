@extends('admin.master')
@section('tieude','Thêm tài khoản')
@section('admin_content')
    <section class="ls with_bottom_border">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">Tài khoản</li>
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
                <div class="col-xs-12">

                    <form action="{{ route('users.post.add') }}" method="POST" class="form-horizontal"  enctype="multipart/form-data"> {{ csrf_field() }}
                        <div class="row flex-row">
                            <div class="col-md-6">

                                <div class="with_border with_padding">

                                    <h4>
                                        <b>Thông tin khách hàng</b>

                                        </h4>

                                    <hr>

                                    
                                   
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Họ tên:</label>
                                        <div class="col-lg-9">
                                            <input name="name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    {{--    --}}
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Số điện thoại:</label>
                                        <div class="col-lg-9">
                                            <input name="phone" type="text" class="form-control">
                                        </div>
                                    </div>
                                   
                                    {{--    --}}
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label" style="padding-left: 0px!important;">CMND / Căn cước:</label>
                                        <div class="col-lg-9">
                                            <input name="cmnd" type="text" class="form-control">
                                        </div>
                                    </div>

                                     {{--    --}}
                                     <div class="row form-group">
                                        <label class="col-lg-3 control-label">Ngày sinh:</label>
                                        <div class="col-lg-9">
                                            <input name="birthday" type="date" class="form-control">
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
                                            <input type="file" name="avatar" id="user-profile-avatar">
                                            <p class="help-block">Select your 200x200px avatar</p>

                                        </div>
                                    </div>
                                    @if(Auth::user()->id_vaitro == 1)
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Vai trò:</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="vaitro" >
                                                <option selected="">Chọn vai trò</option>
                                                @foreach($vaitro as $vaitro2)
                                                <option value="{{ $vaitro2->id }}">{{ $vaitro2->vt_ten }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    @endif


                                     {{--    --}}
                                     <div class="row form-group">
                                        <label class="col-lg-3 control-label">Email:</label>
                                        <div class="col-lg-9">
                                            <input name="email" type="text" class="form-control">
                                        </div>
                                    </div>

                                    
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label">Mật khẩu:</label>
                                        <div class="col-lg-9">
                                            <input name="password" type="password" class="form-control">
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
                                            <select class="form-control" name="quanhuyen" id="quanhuyen">
                                                <option selected="">Chọn quận/huyện</option>
                                                @foreach($quanhuyen as $district)
                                                <option value="{{ $district->id }}">{{ $district->district_prefix }} {{ $district->district_name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group" id="a"  data="{{route('phuongxa',0)}}">
                                        <label class="col-lg-3 control-label">Phường / Xã:</label>
                                        <div class="col-lg-7">
                                            <select class="form-control" name="phuongxa" id="phuongxa">
                                                <option selected="">Chọn phường/xã</option>
                                                @foreach($phuongxa as $ward)
                                                <option value="{{ $ward->id }}">{{ $ward->ward_prefix }} {{ $ward->ward_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group" >
                                        <label class="col-lg-3 control-label">Địa chỉ đầ đủ:</label>
                                        <div class="col-lg-7">
                                            <input type="text" name="diachi"  id="timkiem" class="form-control" placeholder="Nhập đia chỉ" required>
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

                                    <button type="submit" class="btn btn-success" style="border-radius:10px;">Lưu</button>
                                    <a href="{{ route('users.list') }}"  class="btn btn-danger" style="color: #fff; border-radius:10px;">Cancel</a>

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

    {{--  ajax  --}}
    <script type="text/javascript">
        $(document).ready(function(){
            var y = $('#a').attr('data');
            $("#quanhuyen").change(function(){
                var id_ward = $(this).val();
                // kiểm tra xem có chạy được nhận id option của loaibaiban không
                $.get(y+id_ward,function(data){
                    // alert(data);
                    $("#phuongxa").html(data);
                    //$('#phuongxa').selectpicker('refresh');
                    // phải câu lênh selectpicker('refresh') để ko bị lỗi boostrap-selecet
                });
            });
        });
    </script>
@endsection