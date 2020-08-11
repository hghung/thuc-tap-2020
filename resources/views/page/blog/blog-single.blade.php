@extends('page.master')
@section('tieude','Tin tức')
@section('content') 

    <section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>{{ $tintuc->tieude }}</h2>
                    <ol class="breadcrumb highlightlinks">
                        <li>
                            <a href="index.htm">
                                Trang chủ
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog.detail',['id' => $tintuc->id]) }}">Tin tức</a>
                        </li>
                        <li class="active">Tin tức - {{ $tintuc->id }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
        <div class="container">
            <div class="row">

                <div class="col-sm-10 col-sm-push-1">

                    <article class="single-post vertical-item content-padding big-padding post with_border">
                        <div class="entry-thumbnail item-media">
                            <img src="{{ asset('public/upload/tin-tuc') }}/{{ $tintuc->hinhanh }}" all=""
                            style="width:942px; height: 550px;">
                        </div>
                        <div class="item-content">


                            <header class="entry-header">

                                <h1 class="entry-title topmargin_0">
                                    {{ $tintuc->tieude }}
                                </h1>

                            </header>
                            <!-- .entry-header -->

                            <div class="entry-content">

                                <p>
                                    {!! $tintuc->noidung !!}
                                </p>

                                <div class="inline-content item-meta">
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
                                </div>

                            </div>
                            <!-- .entry-content -->

                        </div>
                        <!-- .item-content -->

                    </article>


                    <div class="author-meta side-item content-padding with_border overflow-hidden">

                        <div class="row">

                            <div class="col-md-4">
                                <div class="item-media">
                                    <img src="{{ asset('public/upload/avatar') }}/{{ $tintuc->tintucuser->avatar }}" alt=""
                                    style="width:220px; height: 220px;">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="item-content">
                                    <h3 class="margin_0 weight-black">{{ $tintuc->tintucuser->ho_ten }}</h3>
                                    @if(Auth::user()->id_vaitro == 1)
                                    <p class="small-text highlight bottommargin_10" style="color:red">
                                        {{ $tintuc->tintucuser->user2->vaitro->vt_ten }}
                                    </p>
                                    @elseif(Auth::user()->id_vaitro == 2)
                                    <p class="small-text highlight bottommargin_10" style="color: rgb(29, 218, 29)">
                                        {{ $tintuc->tintucuser->user2->vaitro->vt_ten }}
                                    </p>
                                    @endif
                                    

                                    <p>Cám ơn bạn đã đọc tin tức này.</p>

                                    <!-- <div class="author-social"> -->
                                    <div class="greylinks">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!--eof .col-sm-8 (main content)-->

            </div>
        </div>
    </section>

@endsection