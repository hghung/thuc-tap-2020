@extends('page.master')
@section('tieude','Tin tức')
@section('content')  

    <section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Tin tức</h2>
                    <ol class="breadcrumb highlightlinks">
                        <li>
                            <a href="{{ route('home1') }}">
                                Trang chủ
                            </a>
                        </li>
                        
                        <li class="active">Tin tức</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
                        @foreach($blog as $tintuc)
                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12">

                            <article class="vertical-item content-padding big-padding with_border text-center">
                                <div class="item-media">
                                    <img src="{{ asset('public/upload/tin-tuc') }}/{{ $tintuc->hinhanh }}"  alt="" style="width:360px; height: 240px;">

                                    <div class="media-links">
                                        <a href="blog-single-left.html"  class="abs-link"></a>
                                    </div>

                                </div>
                                <div class="item-content">
                                    <h4 class="entry-title">
                                        <a href="{{ route('blog.detail',['id' => $tintuc->id]) }}" >{{ $tintuc->tieude }}</a>
                                    </h4>
                                </div>
                                <footer class="entry-meta">
                                    <div>
                                        <div>
                                            <i class="fa fa-user highlight" aria-hidden="true"></i>
                                            <span class="small-text grey">{{ $tintuc->tintucuser->ho_ten }}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <i class="fa fa-calendar highlight" aria-hidden="true"></i>
                                            <time class="entry-date small-text grey" datetime="2017-03-13T08:50:40+00:00">
                                                {{ date("d-m-Y",strtotime($tintuc->created_at)) }}

                                            </time>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <i class="rt-icon2-eye" aria-hidden="true" style="color:#2196F3"></i>
                                            <span class="small-text grey">{{ $tintuc->views }}</span>
                                        </div>
                                    </div>
                                </footer>
                            </article>

                        </div>
                        @endforeach

                        

                    </div>
                    <!-- eof .isotope_container.row -->

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <img src="loading.png" tppabs="http://webdesign-finder.com/html/fixit/img/loading.png" alt="" class="fa-spin" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection