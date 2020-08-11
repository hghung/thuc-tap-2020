@extends('admin.master')
@section('tieude','Profile')
@section('admin_content')
    <section class="ls with_bottom_border">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">Profile</li>
                    </ol>
                </div>
                <!-- .col-* -->
                
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
                    <h3>Profile
                    </h3>
                </div>
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <!-- User Bio -->
                        <div class="col-xs-12 col-sm-12">

                            <div class="with_border with_padding">
                                <div class="media big-left-media">
                                    <div class="media-left">
                                        <img src="{{ asset('public/upload/avatar') }}/{{ $profile->user->avatar }}"  alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h4>{{  $profile->user->ho_ten  }}
                                           - 
                                            @if($profile->id_vaitro == 1)
                                                <small style="color:rgb(240, 63, 63)">
                                                    <i class="rt-icon2-diamond3" aria-hidden="true" style="color: #e7a413"></i>
                                                    {{$profile->vaitro->vt_ten}}
                                                </small>
                                            @elseif($profile->id_vaitro == 2)
                                                <small style="color:rgb(111, 233, 54)">
                                                    <i class="fa fa-laptop" aria-hidden="true" style="color: #e7a413"></i>
                                                    {{$profile->vaitro->vt_ten}}
                                                </small>

                                            @elseif($profile->id_vaitro == 3)
                                                <small style="color:rgb(37, 80, 223)">
                                                    <i class="rt-icon2-spanner-outline" aria-hidden="true" style="color: #e7a413"></i>
                                                    {{$profile->vaitro->vt_ten}}
                                                </small>
                                            @elseif($profile->id_vaitro == 4)
                                                <small style="color:rgb(221, 240, 54)">
                                                    {{$profile->vaitro->vt_ten}}
                                                </small>
                                            @endif
                                    
                                        </h4>
                                        <p>
                                            Chào mừng bạn đến Profile.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- .with_border -->
                        </div>
                        <!-- .col-* -->

                    </div>
                    <!-- .row -->

                    <div class="row">
                        <!-- User Info -->
                        <div class="col-xs-12 col-md-6">
                            <div class="with_border with_padding">
                                <h4>
                                    Thông tin
                                </h4>

                                <ul class="list1 no-bullets">
                                    {{--  taikhoan  --}}
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div style="background: #54ee4f" class="teaser_icon label-warning round fontsize_16">
                                                    <i class="rt-icon2-key2" ></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
                                                <strong class="grey">
                                                    Tài khoản:
                                                </strong>
                                                {{ $profile->username }}
                                            </div>
                                        </div>
                                    </li>

                                    {{--  vaitro  --}}
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div class="teaser_icon label-info  fontsize_16" style="background: #ec5555" >
                                                    <i class="rt-icon2-medal"></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
                                                <strong class="grey">
                                                    Vai trò:
                                                </strong>
                                                @if($profile->id_vaitro == 1)
                                                <span style="color:rgb(240, 63, 63)">
                                                    <i class="rt-icon2-diamond3" aria-hidden="true" style="color: #e7a413"></i>
                                                    {{$profile->vaitro->vt_ten}}
                                                </span>
                                            @elseif($profile->id_vaitro == 2)
                                                <span style="color:rgb(111, 233, 54)">
                                                    <i class="fa fa-laptop" aria-hidden="true" style="color: #e7a413"></i>
                                                    {{$profile->vaitro->vt_ten}}
                                                </span>

                                            @elseif($profile->id_vaitro == 3)
                                                <span style="color:rgb(37, 80, 223)">
                                                    <i class="rt-icon2-spanner-outline" aria-hidden="true" style="color: #e7a413"></i>
                                                    {{$profile->vaitro->vt_ten}}
                                                </span>
                                            @elseif($profile->id_vaitro == 4)
                                                <span style="color:rgb(221, 240, 54)">
                                                    {{$profile->vaitro->vt_ten}}
                                                </span>
                                            @endif
                                            </div>
                                        </div>
                                    </li>
                                    {{--  cmnd  --}}
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div class="teaser_icon label-warning round fontsize_16" style="background: #e024d1">
                                                    <i class="rt-icon2-ticket"></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
                                                <strong class="grey">
                                                    CMND / Căn Cước:
                                                </strong>
                                                {{ number_format($profile->user->cmnd,0,',',' ')  }}

                                            </div>
                                        </div>
                                    </li>
                                    

                                    
                                    
                                    
                                </ul>

                            </div>
                            <!-- .with_border -->
                        </div>
                        <!-- col-* -->

                        <!-- User Statistics -->
                        <div class="col-xs-12 col-md-6">
                            <div class="with_border with_padding">
                                <h4>
                                    &nbsp
                                </h4>

                                <ul class="list1 no-bullets">
                                    {{--  baotri  --}}
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div class="teaser_icon label-success fontsize_16" style="background: #f59820">
                                                    <i class="rt-icon2-health"></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
                                                <strong class="grey">
                                                    Bảo trì:
                                                </strong>
                                                {{ $baotri }} lần
                                            </div>
                                        </div>
                                    </li>
                                    {{--  birthday  --}} 
                                    {{--  round là hinh tròn trong class  --}}
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div style="background: #face77" class="teaser_icon label-warning round fontsize_16">
                                                    <i class="rt-icon2-birthday-cake" ></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
                                                <strong class="grey">
                                                    Birthday:
                                                </strong>
                                                
                                                {{ date("d-m-Y",strtotime($profile->user->nam_sinh)) }}
                                            </div>
                                        </div>
                                    </li>
                                    
                                    {{--  thamgia  --}}
                                    <li>
                                        <div class="media small-teaser">
                                            <div class="media-left media-middle">
                                                <div class="teaser_icon label-info fontsize_16">
                                                    <i class="rt-icon2-calendar3"></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-middle">
                                                <strong class="grey">
                                                    Tham gia vào:
                                                </strong>
                                                {{ date("d-m-Y",strtotime($profile->created_at)) }}
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                            <!-- .with_border -->
                        </div>
                        <!-- col-* -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-* left column -->

                <div class="col-xs-12 col-md-3">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-group bottommargin_0" id="contact-info-accordion">
                                {{--  sdt  --}}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse2">
                                                <i class="highlight fontsize_16 fa fa-mobile"></i>
                                                Số điện thoại
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="user-info-collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                <strong> 
                                                   0{{ number_format($profile->user->sdt,0,',',' ')  }}
                                                </strong> 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .panel -->
                                {{--  Email  --}}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse3">
                                                <i class="highlight fontsize_16 fa fa-envelope"></i>
                                                E-mail address
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="user-info-collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <p class="greylinks">
                                                <a href="#">
                                                    {{ $profile->user->email }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .panel -->
                                {{--  vitri  --}}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse4">
                                                <i class="highlight fontsize_16 fa fa-map-marker"></i>
                                                Địa chỉ
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="user-info-collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <p>
                                                @if($profile->id_vaitro == 1)
                                                    Admin Pro VIP :))
                                                @else
                                                {{ $profile->user->diachi->dia_chi }}
                                                @endif

                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- .panel -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse5">
                                                <i class="highlight fontsize_16 fa fa-users"></i>
                                                Social Networks
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="user-info-collapse5" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <p>
                                    <a href="#" class="social-icon soc-facebook"></a>
                                    <a href="#" class="social-icon soc-twitter"></a>
                                    <a href="#" class="social-icon soc-google"></a>
                                </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- .panel -->

                            </div>
                            <!-- .panel-group -->
                        </div>
                     
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-* right column -->
            </div>
            <!-- .row main columns -->
        </div>
        <!-- .container -->
    </section>

@endsection