@extends('admin.master')
@section('tieude','Thêm lịch bảo trì')
@section('admin_content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />


    <section class="ls with_bottom_border">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">Bảo trì</li>
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
            <form class="form-horizontal" action="{{ route('baotri.post.add') }}" method="POST"> {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-7">
                        <div class="with_border with_padding">

                            <h4>
                                <b>Form bảo trì</b>
                            </h4>

                            <hr>

                            
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Khách hàng: </label>
                                <div class="col-lg-9">
                                    <select class="selectpicker form-control" name="khachhang" data-show-subtext="true" data-live-search="true">
                                        <option>-----Chọn khách hàng-----</option>
                                        @foreach($khachhang as $khachhang1)
                                        <option  value="{{ $khachhang1->id }}">{{ $khachhang1->username }} - {{ $khachhang1->user->ho_ten }}</option>
                                       @endforeach
                                   </select>
                                    
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Tiêu đề: </label>
                                <div class="col-lg-9">
                                    <input name="tieude" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Nội dung: </label>
                                <div class="col-lg-9">
                                    <textarea name="noidung" rows="8" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="theme_button " style="background-color: #2196F3; border: 0px !important">Lưu</button>
                                    <a href="{{ route('baotri.list') }}"  class="theme_button inverse wide_button">Quay lại</a>
                                </div>
                            </div>
                            <!-- .row  -->

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->

                    <div class="col-md-5">

                        <div class="with_border with_padding bottommargin_10">

                            <h4>Nhân viên bảo trì</h4>

                            <hr>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label" style="padding-left: 0px !important;">Nhân viên: </label>
                                <div class="col-lg-9">
                                    <select name="nhanvien" class="selectpicker form-control" name="khachhang" data-show-subtext="true" data-live-search="true">
                                        <option>-----Chọn nhân viên-----</option>
                                        @foreach($nhanvien as $nhanvien2)
                                       <option  value="{{ $nhanvien2->id }}">{{ $nhanvien2->username }} - {{ $nhanvien2->user->ho_ten }}</option>
                                       @endforeach
                                   </select>
                                </div>
                            </div>

                            

                            

                        </div>
                        

                    </div>

                    <div class="col-md-5">

                        <div class="with_border with_padding bottommargin_10">

                            <h4>Ngày bảo trì</h4>

                            <hr>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Ngày: </label>
                                <div class="col-lg-9">
                                    <input name="ngay" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Giờ: </label>
                                <div class="col-lg-9">
                                    <input name="gio" type="time" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-lg-3 control-label" style="padding-left: 0px !important;">Trạng thái: </label>
                                <div class="col-lg-9">
                                    <select name="trangthai" class="form-control">
                                        <option>-----Chọn trạng thái-----</option>
                                        @foreach($trangthai as $trangthai2)
                                        <option value="{{ $trangthai2->id }}">
                                            {{$trangthai2->trangthai }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        

                    </div>

                    
                    <!-- .col-* -->


                </div>
                <!-- .row  -->


            </form>

        </div>
        <!-- .container -->
    </section>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
@endsection