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
                    <h3 class="dashboard-page-title">Lịch bảo trì   
                    </h3>
                </div>
                

            </div>

<!-- map -->
            <div class="row">
                <!-- Calendar -->
                <div class="col-xs-12 col-md-12">

                    <h3 class="module-title darkgrey_bg_color">Events</h3>
                    <div class="events_calendar"></div>

                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->

        </div>
        <!-- .container -->
    </section>
@endsection