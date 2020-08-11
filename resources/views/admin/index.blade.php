@extends('admin.master')
@section('tieude','Dashboard')
@section('admin_content')
    <section class="ls with_bottom_border">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="#">Quản lí</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
                <!-- .col-* -->
              
                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
    @if(Auth::user()->id_vaitro == 4)
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4">
                    <h3 class="dashboard-page-title">
                        Dashboard
                    </h3>
                </div>
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">

                    <div class="teaser info_bg_color counter-background-teaser text-center" style="background-image: linear-gradient(315deg, #89d8d3 0%, #03c8a8 74%); ">
                        <span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
                        <h3 class="counter-wrap highlight" data-from="0" data-to="{{ $customer }}" data-speed="1800">
                            
                            <span class="counter" data-from="0" data-to="{{ $customer }}" data-speed="1500">0</span>
                            <small>
                                <i class="rt-icon2-group-outline"></i>
                            </small>
                        </h3>
                        <p>Khách hàng</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="teaser info_bg_color counter-background-teaser text-center" style="background: radial-gradient(circle, rgba(247,150,192,1) 0%, rgba(118,174,241,1) 100%);">
                        <span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
                        <h3 class="counter-wrap highlight" data-from="0" data-to="{{ $staff }}" data-speed="1800">
                            <span class="counter" data-from="0" data-to="{{ $staff }}" data-speed="1500">0</span>
                            <small>
                                <i class="rt-icon2-users2"></i>
                            </small>
                        </h3>
                        <p>Nhân viên</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="teaser info_bg_color counter-background-teaser text-center" style="background-image: linear-gradient(315deg, #eaf818 0%, #f6fc9c 74%);">
                        <span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
                        <h3 class="counter-wrap highlight" data-from="0" data-to="{{ $technical }}" data-speed="1800">
                            <span class="counter" data-from="0" data-to="{{ $technical }}" data-speed="1500">0</span>
                            <small>
                                <i class="rt-icon2-spanner-outline"></i>
                            </small>
                        </h3>
                        <p>Kỷ thuật</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="teaser info_bg_color counter-background-teaser text-center" style="background: linear-gradient(0deg, rgba(96,9,240,1) 0%, rgba(129,5,240,1) 100%);">
                        <span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
                        <h3 class="counter-wrap highlight" data-from="0" data-to="{{ $baotrikh }}" data-speed="1800">
                            
                            <span class="counter" data-from="0" data-to="{{ $baotrikh }}" data-speed="1500">0</span>
                            <small>
                                <i class="rt-icon2-health"></i>
                            </small>
                            
                        </h3>
                        <p>Bảo trì thành công của mình</p>
                    </div>
                </div>
            </div>

                <!-- Monthly Visitors -->
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th width="15%">Tiêu đề</th>
                            <th width="13%">Ngày - giờ hẹn</th>
                            <th width="20%">Nội dung</th>
                            <th width="12%">Trạng thái</th>
                            <th width="12%">Nhân viên</th>
                            <th width="13%">Ngày tạo</th>

                        </tr>
                        @foreach($khachhang2 as $kh)
                        <tbody >
                            {{-- start --}}
                            <td>
                                {{ $kh->tieude }}
                            </td>

                            <td>
                                {{ date("d-m-Y",strtotime($kh->ngay)) }}
                                - 
                                {{ $kh->gio }}
                            </td>

                            <td>
                                {{ $kh->noidung }}
                            </td>

                            <td>
                                @if($kh->id_trangthai == 2)
                                <span style="color: rgb(245, 188, 30)">
                                    {{ $kh->baotristatus->trangthai }}
                                </span>
                                @elseif($kh->id_trangthai == 3)
                                <span style="color: rgb(23, 226, 23)">
                                    {{ $kh->baotristatus->trangthai }}
                                </span>
                                @elseif($kh->id_trangthai == 4)
                                <span style="color: rgb(223, 28, 21)">
                                    {{ $kh->baotristatus->trangthai }}
                                </span>
                                @elseif($kh->id_trangthai == 1)
                                <span style="color: rgb(15, 12, 12)">
                                    {{ $kh->baotristatus->trangthai }}
                                </span>
                                @endif
                                        
                            </td>

                            <td>
                                @if($kh->id_nhanvien)
                                {{ $kh->baotrinv->ho_ten }}
                                @else
                                Đang cập nhật
                                @endif
                            </td>

                            <td>
                                {{ date("d-m-Y",strtotime($kh->created_at)) }}
                            </td>
                            {{-- end --}}
                        </tbody>
                        @endforeach


                    </table>
                </div>
            </div>
        </div>
        <!-- .container -->
    </section>
    @else
    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4">
                    <h3 class="dashboard-page-title">
                        Dashboard
                    </h3>
                </div>
                

            </div>
            <!-- .row -->


            <div class="row">
                <div class="col-lg-3 col-sm-6">

                    <div class="teaser info_bg_color counter-background-teaser text-center" style="background-image: linear-gradient(315deg, #89d8d3 0%, #03c8a8 74%); ">
                        <span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
                        <h3 class="counter-wrap highlight" data-from="0" data-to="{{ $customer }}" data-speed="1800">
                            
                            <span class="counter" data-from="0" data-to="{{ $customer }}" data-speed="1500">0</span>
                            <small>
                                <i class="rt-icon2-group-outline"></i>
                            </small>
                            
                        </h3>
                        <p>Khách hàng</p>
                    </div>


                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="teaser info_bg_color counter-background-teaser text-center" style="background: radial-gradient(circle, rgba(247,150,192,1) 0%, rgba(118,174,241,1) 100%);">
                        <span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
                        <h3 class="counter-wrap highlight" data-from="0" data-to="{{ $staff }}" data-speed="1800">
                            
                            <span class="counter" data-from="0" data-to="{{ $staff }}" data-speed="1500">0</span>
                            <small>
                                <i class="rt-icon2-users2"></i>
                            </small>
                            
                        </h3>
                        <p>Nhân viên</p>
                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="teaser info_bg_color counter-background-teaser text-center" style="background-image: linear-gradient(315deg, #eaf818 0%, #f6fc9c 74%);">
                        <span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
                        <h3 class="counter-wrap highlight" data-from="0" data-to="{{ $technical }}" data-speed="1800">
                            
                            <span class="counter" data-from="0" data-to="{{ $technical }}" data-speed="1500">0</span>
                            <small>
                                <i class="rt-icon2-spanner-outline"></i>
                            </small>
                            
                        </h3>
                        <p>Kỷ thuật</p>
                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="teaser info_bg_color counter-background-teaser text-center" style="background: linear-gradient(0deg, rgba(96,9,240,1) 0%, rgba(129,5,240,1) 100%);">
                        <span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
                        <h3 class="counter-wrap highlight" data-from="0" data-to="{{ $baotri }}" data-speed="1800">
                            
                            <span class="counter" data-from="0" data-to="{{ $baotri }}" data-speed="1500">0</span>
                            <small>
                                <i class="rt-icon2-health"></i>
                            </small>
                            
                        </h3>
                        <p>Bảo trì thành công</p>
                    </div>

                </div>
            </div>


            <div class="row">
                <!-- Monthly Visitors -->
                <div class="col-xs-12 col-md-6">
                    <div class="with_border with_padding">
                        <h4>{{ $chart2->options['chart_title'] }}</h4>
                        <div class="canvas-chart-wrapper">
                            {!! $chart2->renderHtml() !!}
                        </div>
                    </div>
                </div>
                <!-- .col-* -->

                <!-- Monthly Visitors -->
                <div class="col-xs-12 col-md-6" >
                    <div class="with_border with_padding">
                        <h4>{{ $chart1->options['chart_title'] }}</h4>
                        <div style="height: 10%; " >
                            {!! $chart1->renderHtml() !!}
                        </div>
                    </div>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
            


        </div>
        <!-- .container -->
    </section>
    @endif

       


{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
    
{!! $chart2->renderChartJsLibrary() !!}
{!! $chart2->renderJs() !!}
@endsection