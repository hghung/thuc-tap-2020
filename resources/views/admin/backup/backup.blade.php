@extends('admin.master')
@section('tieude','Backup')
@section('admin_content')

    <section class="ls with_bottom_border">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">Backup</li>
                    </ol>
                </div>
                <!-- .col-* -->
                
                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>

    {{-- thong bao backup --}}
    @if(session('backup'))
    <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">Thông báo</h4>
        <p></p>
        <p class="mb-0">
            <span style="color:green">{{session('backup')}}</span>
        </p>
    </div>
    @endif

    @if(session('delete'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Thông báo</h4>
            <p></p>
            <p class="mb-0">
                <span style="color:blue">{{session('delete')}}</span>
            </p>
        </div>
    @endif


    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">
            <form class="form-horizontal" action="{{ route('tintuc.post.add') }}" method="POST" enctype="multipart/form-data"> {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="with_border with_padding">

                            <h4>Backup</h4>

                            <hr>

                            <div class="item-editable bottommargin_20">


                                <a name="backup" href="{{ route('backup.run') }}" class="btn btn-primary" style="color:#fff; border-radius:15px; font-size:12px;" > 
                                    Backup dữ liệu
                                </a>
                                
                            </div>
                            <hr>
                            <div class="row">
                                <p>Backup dữ liệu thương xuyên để tốt cho hệ thống !</p>
                            </div>
                            

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->


                    <div class="col-md-4">
                        <div class="with_border with_padding">

                            <h4>Xóa backup</h4>

                            <hr>

                            <div class="item-editable bottommargin_20">


                                <a name="backup" href="{{ route('delete.run') }}" class="btn btn-danger" style="color:#fff; border-radius:15px; font-size:12px;" > 
                                    Xóa backup 
                                </a>
                            </div>
                            <hr>
                            <div class="row">
                                <p>Xóa backup cũ để làm sạch bộ nhớ</p>
                            </div>

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->


                </div>


            </form>

        </div>
        <!-- .container -->
    </section>


    <


        

@endsection