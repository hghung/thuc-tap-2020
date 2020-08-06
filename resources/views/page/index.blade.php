@extends('page.master')
@section('tieude','Admin')
@section('content')
    <section class="intro_section page_mainslider ds">
        <div class="flexslider" data-nav="false">
            <ul class="slides">
                <li>
                    <img src="{{asset('public/img/slide01.jpg')}}"  alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h2>
                                             Bảo Hành Máy Tính
                                            </h2>
                                           
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <a href="about.html" tppabs="http://webdesign-finder.com/html/fixit/about.html" class="theme_button color1 inverse"> Tất cả dịch vụ </a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

                <li>
                    <img src="{{asset('public/img/slide02.jpg')}}" " alt="">
                    <div class="container">
                       
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h2>
                                                CHO THUÊ HOSTING
                                            </h2>
                                            
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <a href="about.html" tppabs="http://webdesign-finder.com/html/fixit/about.html" class="theme_button color1 inverse">DỊCH VỤ</a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

                <li>
                    <img src="{{asset('public/img/slide03.jpg')}}"  alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h2>
                                               THIẾT KẾ, QUẢN TRỊ WEBSITE
                                            </h2>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <a href="about.html" class="theme_button color1 inverse">DỊCH VỤ</a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

            </ul>
        </div>
        <!-- eof flexslider -->
    </section>

    <section class="ls section_padding_25 columns_margin_top_30 columns_margin_bottom_30 with_bottom_border">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 text-center">
                    <h5 class="text-uppercase bottommargin_5">
                        Liên hệ 24 / 7
                    </h5>
                    <p class="fontsize_30 thin grey">
            (0292) 3 690 888
        </p>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                    <h5 class="text-uppercase bottommargin_5">
                        Email Address
                    </h5>
                    <p class="fontsize_30 thin grey">
                        ctict@cantho.gov.vn
        </p>
                </div>
                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 text-center">
                    <h5 class="text-uppercase bottommargin_5">
                        Fax
                    </h5>
                    <p class="fontsize_30 thin grey">
                        080 72123
        </p>
                </div>
            </div>
        </div>
    </section>
                <!-- gioi thieu -->
    <section id="about" class="ls section_padding_top_150 section_padding_bottom_150 columns_margin_bottom_30 table_section table_section_md">
                      
                            <div class="col-lg-5 col-md-5">
                                <span style="color: blue"> TRUNG TÂM CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG THÀNH PHỐ CẦN THƠ</span>
                               
                                <h3 style="font-size: 15px">ĐIỆN THOẠI TỪNG BỘ PHẬN</h3>
                                <p> 1. Ban Giám đốc: 02923 690 699</p>
                                <p> 2. Phòng Hành chính - Tổng hợp: 02923 690 888</p>
                                <p> 3. Phòng Hạ tầng kỹ thuật: 08 07 12 14</p>
                                <p> 4. Phòng Ứng dụng CNTT: 02923 690 887</p>
                                <p> 5. Phòng Biên tập Cổng thông tin: 02923 690 090</p>
                                <p> 6. Phòng Đào tạo và dịch vụ: 02923 690 888</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                                        <!-- dich vu -->
   <!-- <section id="services" class="ds parallax page_services section_padding_top_150 section_padding_bottom_100 columns_padding_25">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">Dịch vụ</h2>
                </div>
            </div>
            <div class="row columns_margin_bottom_30">
                <div class="col-md-4 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="fa fa-desktop highlight" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="service-single.html" tppabs="http://webdesign-finder.com/html/fixit/service-single.html">Desctop Repair</a>
                        </h4>
                        <p>With our Laptop Repair, you’ll be thrilled you came to us for your repair. Bring us whatever you need us to fix.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="fa fa-tablet" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="service-single.html" tppabs="http://webdesign-finder.com/html/fixit/service-single.html">Tablet Repair</a>
                        </h4>
                        <p>Since 2007, we’ve provided customers with convenient and comprehensive services for all their repair needs.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 clear-sm">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="service-single.html" tppabs="http://webdesign-finder.com/html/fixit/service-single.html">Smartphone Repair</a>
                        </h4>
                        <p>We’ll be sure to do everything in our power to get the job done right. Get in touch to find out more about this service.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 clear-md">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="service-single.html" tppabs="http://webdesign-finder.com/html/fixit/service-single.html">Laptop Repair</a>
                        </h4>
                        <p>Our Laptop Repair are available to all of our clients, when they need them most. Call us today and find out more.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 clear-sm">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="fa fa-sliders" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="service-single.html" tppabs="http://webdesign-finder.com/html/fixit/service-single.html">Hardware Repair</a>
                        </h4>
                        <p>Our fantastic Hardware Repair are among our most popular services. Our team members are happy to answer any of your questions.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="service-single.html" tppabs="http://webdesign-finder.com/html/fixit/service-single.html">Apps Installation</a>
                        </h4>
                        <p>We committed to your happiness, which is why our expert repair technicians provide all the services you need.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
                                        <!-- blog -->
    <section id="blog" class="ls section_padding_top_150 section_padding_bottom_130">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottommargin_0">
                    <h2 class="section_header">Tin tức</h2>
                    <p class="fontsize_20 grey">Đăng ký nhận tin của chúng tôi để luôn cập nhật thông tin mới nhất</p>
                </div>
            </div>
            <div class="row columns_margin_bottom_20">
                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding big-padding with_border text-center">
                        <div class="item-media">
                            <img src="{{asset('public/img/01.jpg')}}"  alt="">

                            <div class="media-links">
                                <a href="blog-single-left.html"  class="abs-link"></a>
                            </div>

                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">
                                <a href="blog-single-left.html" tppabs="http://webdesign-finder.com/html/fixit/blog-single-left.html">A Note About Windows 10 Upgrades</a>
                            </h4>
                            <p>You would find our team super-fast and active, who put work first, to deliver to you on time.</p>
                        </div>
                        <footer class="entry-meta">
                            <div>
                                <div>
                                    <i class="fa fa-user highlight" aria-hidden="true"></i>
                                    <span class="small-text grey">Admin</span>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-calendar highlight" aria-hidden="true"></i>
                                    <time class="entry-date small-text grey" datetime="2017-03-13T08:50:40+00:00">
                                        June 1
                                    </time>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-tag highlight" aria-hidden="true"></i>
                                    <span class="small-text grey">Admin</span>
                                </div>
                            </div>
                        </footer>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding big-padding with_border text-center">
                        <div class="item-media">
                            <img src="{{asset('public/img/02.jpg')}}"  alt="">

                            <div class="media-links">
                                <a href="blog-single-left.html"  class="abs-link"></a>
                            </div>

                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">
                                <a href="blog-single-left.html" >Protect yourself from the WannaCrypt</a>
                            </h4>
                            <p>Our professional team of movers is trained to provide you with awesome services.</p>
                        </div>
                        <footer class="entry-meta">
                            <div>
                                <div>
                                    <i class="fa fa-user highlight" aria-hidden="true"></i>
                                    <span class="small-text grey">Admin</span>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-calendar highlight" aria-hidden="true"></i>
                                    <time class="entry-date small-text grey" datetime="2017-03-13T08:50:40+00:00">
                                        June 11
                                    </time>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-tag highlight" aria-hidden="true"></i>
                                    <span class="small-text grey">Admin</span>
                                </div>
                            </div>
                        </footer>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                    <article class="vertical-item content-padding big-padding with_border text-center">
                        <div class="item-media">
                            <img src="{{asset('public/img/03.jpg')}}"  alt="">

                            <div class="media-links">
                                <a href="blog-single-left.html"  class="abs-link"></a>
                            </div>

                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">
                                <a href="blog-single-left.html" >Google Takeout!…And possibly photos</a>
                            </h4>
                            <p>Often when the price is less, the quality goes down, but that’s not the case with us.</p>
                        </div>
                        <footer class="entry-meta">
                            <div>
                                <div>
                                    <i class="fa fa-user highlight" aria-hidden="true"></i>
                                    <span class="small-text grey">Admin</span>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-calendar highlight" aria-hidden="true"></i>
                                    <time class="entry-date small-text grey" datetime="2017-03-13T08:50:40+00:00">
                                        June 8
                                    </time>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <i class="fa fa-tag highlight" aria-hidden="true"></i>
                                    <span class="small-text grey">Admin</span>
                                </div>
                            </div>
                        </footer>
                    </article>
                </div>

            </div>
        </div>
    </section>
                                        <!-- gioi thieu thanh vien -->
 <!--   <section id="reviews" class="ls parallax page_testimonials section_padding_top_150 section_padding_bottom_130">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">

                    <div class="owl-carousel testimonials-owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true" data-nav="false">

                        <blockquote class="with_single_quote text-center">
                            <img src="{{asset('public/img/01-1.jpg')}}" alt="">
                            <div class="item-meta topmargin_25">
                                <h3 class="bottommargin_0">Karl Greaves</h3>
                                <p class="small-text grey">Client</p>
                            </div>
                            Randy came out to my house. He was on time, extremely pleasant, and got the job done. My dog liked him too…… I would definitely hire this company again. Price was fair, service was great, and tech – well I could adopt him!
                        </blockquote>

                        <blockquote class="with_single_quote text-center">
                            <img src="{{asset('public/img/02-1.jpg')}}"  alt="">
                            <div class="item-meta topmargin_25">
                                <h3 class="bottommargin_0">Scott Maxwell</h3>
                                <p class="small-text grey">Client</p>
                            </div>
                            FixIt was super helpful in addressing all our office needs when we upgraded our company server. They also assisted us is finding new equipment that fit our office best. We did not have to wait around for services.
                        </blockquote>

                        <blockquote class="with_single_quote text-center">
                            <img src="{{asset('public/img/03-1.jpg')}}"  alt="">
                            <div class="item-meta topmargin_25">
                                <h3 class="bottommargin_0">Deanna Stewart</h3>
                                <p class="small-text grey">Client</p>
                            </div>
                            Super friendly and helpful. Even though I was arriving right at closing time they stayed open for me. They were able to instantly replace my hard drive while I waited and for a reasonable price.
                        </blockquote>

                    </div>

                </div>
            </div>
        </div>
    </section> -->
                                        <!-- ho tro -->
    <section id="appointment" class="ds page_appointment parallax section_padding_top_150 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center to_animate animated fadeInUp" data-animation="fadeInUp">
                    <h2 class="section_header">Gửi yêu cầu</h2>

                    <form class="contact-form row columns_margin_bottom_20" method="post" action="http://webdesign-finder.com/html/fixit/">


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="appointment-name">Họ tên
                                    <span class="required">*</span>
                                </label>

                                <input type="text" aria-required="true" size="30" value="" name="name" id="appointment-name" class="form-control" placeholder="Họ tên">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="appointment-phone">Số điện thoại
                                    <span class="required">*</span>
                                </label>

                                <input type="text" aria-required="true" size="30" value="" name="appointment-phone" id="appointment-phone" class="form-control" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group select-group">
                                <label for="appointment-date">Ngày
                                    <span class="required">*</span>
                                </label>

                                <select aria-required="true" id="appointment-date" name="appointment-date" class="choice empty form-control">
                                    <option value="" disabled="" selected="" data-default="">Ngày</option>
                                    <option value="1306">13.06</option>
                                    <option value="1406">14.06</option>
                                    <option value="1506">15.06</option>
                                    <option value="1606">16.06</option>
                                    <option value="1706">17.06</option>
                                    <option value="1806">18.06</option>
                                    <option value="1906">19.06</option>
                                    <option value="2006">20.06</option>
                                </select>
                                <i class="fa fa-angle-down theme_button" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group select-group">
                                <label for="appointment-time">Thời gian
                                    <span class="required">*</span>
                                </label>

                                <select aria-required="true" id="appointment-time" name="appointment-time" class="choice empty form-control">
                                    <option value="" disabled="" selected="" data-default="">Thời gian</option>
                                    <option value="08am">8:00 AM</option>
                                    <option value="09am">9:00 AM</option>
                                    <option value="10am">10:00 AM</option>
                                    <option value="11am">11:00 AM</option>
                                    <option value="12am">12:00 PM</option>
                                    <option value="13pm">13:00 PM</option>
                                    <option value="14pm">14:00 PM</option>
                                    <option value="15pm">15:00 PM</option>
                                    <option value="16pm">16:00 PM</option>
                                    <option value="17pm">17:00 PM</option>
                                </select>
                                <i class="fa fa-angle-down theme_button" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-12">

                            <div class="form-group">
                                <label for="appointment-message">Nội dung</label>

                                <textarea aria-required="true" rows="3" cols="45" name="appointment-message" id="appointment-message" class="form-control" placeholder="Nội dung"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 bottommargin_0">

                            <div class="contact-form-submit topmargin_30">
                                <button type="submit" id="appointment-_submit" name="contact_submit" class="theme_button color1 inverse two_lines">Gửi
                                    </button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </section>
                                        <!-- cau hoi -->
    <section id="faq" class="ls section_padding_top_150 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">FAQ</h2>
                </div>
            </div>
            <div class="row columns_margin_top_30">
                <div class="col-md-4">
                    <div class="teaser with_border big_padding text-center">
                        <div class="teaser_icon main_bg_color big_icon round offset_icon size_xsmall">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </div>
                        <h4 class="demibold">
                            Do you offer onsite repairs?
                        </h4>
                        <p>
                Yes. We offer a onsite or in home service for repair. Extra charges may apply.
            </p>
                        <p class="highlightlinks">
                <a href="faq.html" tppabs="http://webdesign-finder.com/html/fixit/faq.html" class="read-more"></a>
            </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teaser with_border big_padding text-center">
                        <div class="teaser_icon main_bg_color big_icon round offset_icon size_xsmall">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </div>
                        <h4 class="demibold">
                            Do you recycle old computers and parts?
                        </h4>
                        <p>
                Yes. Please feel free to bring your old electronic in so they will be recycled properly.
            </p>
                        <p class="highlightlinks">
                <a href="faq.html" tppabs="http://webdesign-finder.com/html/fixit/faq.html" class="read-more"></a>
            </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teaser with_border big_padding text-center">
                        <div class="teaser_icon main_bg_color big_icon round offset_icon size_xsmall">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </div>
                        <h4 class="demibold">
                            What if I live out of the San Diego region?
                        </h4>
                        <p>
                Feel free to ship us your laptop. There will be a small charge for return shipping.
            </p>
                        <p class="highlightlinks">
                <a href="faq.html" tppabs="http://webdesign-finder.com/html/fixit/faq.html" class="read-more"></a>
            </p>
                    </div>
                </div>
            </div>
            <div class="row topmargin_40">
                <div class="col-sm-12 text-center">
                    <a href="faq.html" tppabs="http://webdesign-finder.com/html/fixit/faq.html" class="theme_button color1">View all faqs</a>
                </div>
            </div>
        </div>
    </section>

@endsection