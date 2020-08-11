@extends('admin.master')
@section('tieude','Thêm lịch tin tức')
@section('admin_content')

    <section class="ls with_bottom_border">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="active">Tin tức</li>
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
            <form class="form-horizontal" action="{{ route('tintuc.post.add') }}" method="POST" enctype="multipart/form-data"> {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-8">
                        <div class="with_border with_padding">

                            <h4>
                                Tin tức
                            </h4>

                            <hr>


                            <div class="row form-group">
                                <label class="col-lg-3 control-label">
                                    Tiêu đề: 
                                </label>
                                <div class="col-lg-9">
                                    <input type="text" name="tieude" class="form-control">
                                </div>
                            </div>
                            {{--    --}}

                            <div class="row form-group">
                                <label class="col-lg-3 control-label">Nội dung: </label>
                                <div class="col-lg-9">
                                    <textarea rows="8" id="editor" name="noidung" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="theme_button wide_button" style="background: rgb(34, 226, 34);border: #fff">Save</button>
                                    <a href="{{ route('tintuc.list') }}" class="theme_button inverse wide_button">Quay lại</a>
                                </div>
                            </div>
                            <!-- .row  -->

                        </div>
                        <!-- .with_border -->

                    </div>
                    <!-- .col-* -->


                    <div class="col-md-4">
                        <div class="with_border with_padding">

                            <h4>Upload ảnh</h4>

                            <hr>

                            <div class="item-editable bottommargin_20">


                                <input type="file" name="hinhanh" class="form-control">
                            </div>
                            <hr>
                            <div class="row">
                                <label class="col-lg-3 control-label">Trang thái: </label>
                                <div class="col-lg-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="trangthai" id="post-bublished1" value="1" checked="checked"> Chua duyệt
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="2" id="post-bublished2" value="published"> Duyệt
                                    </label>
                                </div>
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


    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    

@endsection