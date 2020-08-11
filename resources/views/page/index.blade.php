@extends('page.master')
@section('tieude','Admin')
@section('content')  
    <section class="intro_section page_mainslider ds">
        <div class="flexslider" data-nav="false">
            <ul class="slides">

                <li>
                    <img src="{{ asset('public/img/slide01.jpg')}}"  alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h3>
                                                Any Computer Problems?
                                            </h3>
                                            <h2>
                                                We Will Help
                                            </h2>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <a href="about.html"  class="theme_button color1 inverse">All Services</a>
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
                    <img src="{{ asset('public/img/slide02.jpg')}}"  alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h3>
                                                The Same Day
                                            </h3>
                                            <h2>
                                                Phone Repair
                                            </h2>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <a href="about.html" class="theme_button color1 inverse">Advantages</a>
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
                    <img src="{{ asset('public/img/slide03.jpg')}}"  alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h3>
                                                Multi-Brand
                                            </h3>
                                            <h2>
                                                Device Service
                                            </h2>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <a href="about.html" class="theme_button color1 inverse">About us</a>
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

    <section  id="about" class="ls section_padding_25 columns_margin_top_30 columns_margin_bottom_30 with_bottom_border" style="padding-top: 0px !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 text-center">
                    <h5 class="text-uppercase bottommargin_5" style="color:rgb(62, 233, 77)">
                        <i class="rt-icon2-phone4" aria-hidden="true"></i>
                        Liên hệ 24 / 7
                    </h5>
                    <p class="fontsize_28 thin grey">
                        (0292) 3 690 888
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
                    <h5 class="text-uppercase bottommargin_5" style="color:rgb(62, 233, 77)">
                        <i class="rt-icon2-mail" aria-hidden="true"></i>
                        Email Address
                    </h5>
                    <p class="fontsize_28 thin grey">
                        ctict@cantho.gov.vn
                    </p>
                </div>
                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 text-center">
                    <h5 class="text-uppercase bottommargin_5" style="color:rgb(62, 233, 77)">
                        <i class="rt-icon2-microwave" aria-hidden="true"></i>
                        Fax
                    </h5>
                    <p class="fontsize_28 thin grey">
                        080 72123
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="ls  section_padding_bottom_150 columns_margin_bottom_30 table_section table_section_md" style="padding-top: 50px !important;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="inline-block">
                        <div class="row columns_padding_25">
                            <div class="col-lg-6 col-md-7">
                                <!-- <div class="inline-block"> -->
                                <div id="container1">
                                    <!-- The after image is first -->
                                    <img src="{{ asset('public/img/after.jpg')}}" alt="" />
                                   
                                </div>
                                <!-- </div> -->
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <h4 class="fontsize_28 thin bottommargin_0">
                                   Về chúng tôi !
                                </h4>
                                <p>
                                    Trung tâm Công nghệ thông tin và Truyền thông là đơn vị sự nghiệp trực thuộc Sở Thông tin và Truyền thông, có chức năng giúp Giám đốc Sở thực hiện các nhiệm vụ sự nghiệp phục vụ cho công tác quản lý nhà nước về công nghệ thông tin và truyền thông trên địa bàn thành phố; trực tiếp quản lý, vận hành trung tâm dữ liệu, hạ tầng kỹ thuật công nghệ thông tin các ứng dụng và cơ sở dữ liệu dùng chung của Ủy ban nhân dân thành phố thành phố phục vụ cho việc xây dựng Chính quyền điện tử thành phố và phát triển đô thị thông minh; thực hiện các nhiệm vụ về đảm bảo an toàn và an ninh thông tin mạng, ứng cứu sự cố máy tính trong các cơ quan nhà nước; tổ chức nghiên cứu, thiết kế, xây dựng chương trình, đề án, dự án và ứng dụng các tiến bộ khoa học, kỹ thuật, công nghệ về lĩnh vực thông tin, truyền thông, xuất bản và báo chí theo đúng mục tiêu, nhiệm vụ, tiến độ đã được cơ quan thẩm quyền phê duyệt; tổ chức đào tạo, bồi dưỡng kiến thức, kỹ năng về lĩnh vực công nghệ thông tin và truyền thông; cung cấp các dịch vụ trong lĩnh vực thông tin và truyền thông cho các tổ chức, cá nhân có nhu cầu.

                                    Trung tâm Công nghệ thông tin và Truyền thông (sau đây gọi tắt là Trung tâm) là đơn vị sự nghiệp có thu, được ngân sách đảm bảo một phần chi phí hoạt động thường xuyên, có tư cách pháp nhân, được phép sử dụng con dấu và tài khoản riêng.
                                    
                                    Tên giao dịch: Trung tâm Công nghệ thông tin và Truyền thông Cần Thơ
                                </p>
                                <p>  -Tên giao dịch quốc tế: Cantho Information and Communication Technology Center.</p>
                                <p> -Tên viết tắt: CTICT.</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="ds parallax page_services  section_padding_bottom_100 columns_padding_25" style="padding-top: 50px !important;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header" >TRUNG TÂM CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG THÀNH PHỐ CẦN THƠ</h2>
                </div>
            </div>
            <div class="row columns_margin_bottom_30">
                <div class="col-md-4 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="rt-icon2-diamond3" aria-hidden="true" ></i>
                        </div>
                        <h4 class="thin">
                            <a href="#" >Ban Giám đốc</a>
                        </h4>
                        <p style="color: #f3bb21">
                            <i class="rt-icon2-phone4" aria-hidden="true" style="color: rgb(57, 230, 42)"></i>
                            02923 690 699
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="rt-icon2-chart-line" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="#" >Phòng Hành chính - Tổng hợp</a>
                        </h4>
                        <p style="color: #f3bb21">
                            <i class="rt-icon2-phone4" aria-hidden="true" style="color: rgb(57, 230, 42)"></i>
                            02923 690 888
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 clear-sm">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="rt-icon2-spanner-outline" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="#" >Phòng Hạ tầng kỹ thuật</a>
                        </h4>
                        <p style="color: #f3bb21">
                            <i class="rt-icon2-phone4" aria-hidden="true" style="color: rgb(57, 230, 42)"></i>
                            08 07 12 14
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 clear-md">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="#" >Phòng Ứng dụng CNTT</a>
                        </h4>
                        <p style="color: #f3bb21">
                            <i class="rt-icon2-phone4" aria-hidden="true" style="color: rgb(57, 230, 42)"></i>
                            02923 690 887
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 clear-sm">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="#" >Phòng Biên tập Cổng thông tin</a>
                        </h4>
                        <p style="color: #f3bb21">
                            <i class="rt-icon2-phone4" aria-hidden="true" style="color: rgb(57, 230, 42)"></i>
                            02923 690 090
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="teaser text-center">
                        <div class="teaser_icon highlight size_normal">
                            <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        </div>
                        <h4 class="thin">
                            <a href="#" >Phòng Đào tạo và dịch vụ</a>
                        </h4>
                        <p style="color: #f3bb21">
                            <i class="rt-icon2-phone4" aria-hidden="true" style="color: rgb(57, 230, 42)"></i>
                            02923 690 888
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <section id="about" class="ls  section_padding_bottom_150 columns_margin_bottom_30 table_section table_section_md" style="padding-top: 50px !important;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="inline-block">
                        <div class="row columns_padding_25">
                            <div class="col-lg-6 col-md-7">
                                <!-- <div class="inline-block"> -->
                                    <!-- The before image is last -->
                                    <img src="{{ asset('public/img/text.png')}}" alt="" />
                                <!-- </div> -->
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <h3  style="font-size: 30px !important" class="section_header ">
                                    Lĩnh vực hoạt động
                                </h3>
                    
                                <h4> Các hoạt động dịch vụ sự nghiệp: </h4>
                                 
                                <p> - Tư vấn, thiết kế, giám sát và thi công các dự án CNTT-TT </p>
                                    
                                <p> - Thiết kế phần mềm, website, quản trị Website </p>
                                    
                                <p> - Bảo trì, nâng cấp hệ thống CNTT-TT </p>
                                    
                                <p> - Tư vấn, thi công, vận hành hệ thống hội nghị truyền hình </p>
                                    
                                <p> - Đào tạo, liên kết đào tạo nguồn nhân lực CNTT-TT cho CBCC,VC thành phố </p>
                                    
                                <p> - Tổ chức các sự kiện thông tin truyền thông </p>
                                    
                                <p> - Hợp tác quốc tế, trong nước trong lĩnh vực ứng dụng và phát triển CNTT - TT </p>
                               
                            
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="ds page_appointment parallax  section_padding_bottom_150" style="padding-top: 50px !important;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center to_animate animated fadeInUp" data-animation="fadeInUp">
                    <h2 class="section_header">Liên hệ</h2>

                    <form class="contact-form row columns_margin_bottom_20" method="post" action="#"> {{ csrf_field() }}

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="appointment-name">Họ tên
                                    <span class="required">*</span>
                                </label>

                                <input type="text" aria-required="true" size="30" value="" name="name" id="appointment-name" class="form-control" placeholder="Họ tên">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="appointment-phone">Số điện thoại
                                    <span class="required">*</span>
                                </label>

                                <input type="text" aria-required="true" size="30" value="" name="appointment-phone" id="appointment-phone" class="form-control" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="appointment-phone">Số điện thoại
                                    <span class="required">*</span>
                                </label>

                                <input type="date"  class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group select-group">
                                <label for="appointment-time">Time
                                    <span class="required">*</span>
                                </label>

                                <select aria-required="true" id="appointment-time" name="appointment-time" class="choice empty form-control">
                                    <option value="" disabled="" selected="" data-default="">Thời gian</option>
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
                                <label for="appointment-message">Message</label>

                                <textarea aria-required="true" rows="3" cols="45" name="appointment-message" id="appointment-message" class="form-control" placeholder="Nội dung"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 bottommargin_0">

                            <div class="contact-form-submit topmargin_30">
                                <button type="submit" id="appointment-_submit" name="contact_submit" class="theme_button color1 inverse two_lines">Gửi</button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </section>

     {{-- tin tức --}}
     <section id="blog" class="ls  section_padding_bottom_130" style="padding-top: 50px !important;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottommargin_0">
                    <h2 class="section_header">Tin tức</h2>
                    <p class="fontsize_20 grey">Đọc tin tức gần đây của chúng tôi để luôn được cập nhật tin tức của chúng tôi 
                    </p>
                </div>
            </div>
            <div class="row columns_margin_bottom_20">
                @foreach($blog as $tintuc)
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
                                <a href="blog-single-left.html" >A Note About Windows 10 Upgrades</a>
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
                @endforeach
                
                <a href="{{ route('get.login') }}"  style="margin-left: 45%" class="theme_button color1 two_lines bottommargin_0">Xem nhiều</a>

            </div>
        </div>
    </section>

    {{--  <section id="faq" class="ls  section_padding_bottom_150" style="padding-top: 50px !important;">
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
                            <a href="faq.html"  class="read-more"></a>
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
                <a href="faq.html"  class="read-more"></a>
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
                <a href="faq.html"  class="read-more"></a>
            </p>
                    </div>
                </div>
            </div>
            <div class="row topmargin_40">
                <div class="col-sm-12 text-center">
                    <a href="faq.html"  class="theme_button color1">View all faqs</a>
                </div>
            </div>
        </div>
    </section>  --}}
@endsection