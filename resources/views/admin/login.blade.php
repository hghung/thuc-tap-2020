<!DOCTYPE html>
<html class="no-js">

<head>
	<title>FixIt</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}" >
	<link rel="stylesheet" href="{{asset('public/css/animations.css')}}" >
	<link rel="stylesheet" href="{{asset('public/css/fonts.css')}}" >
	<link rel="stylesheet" href="{{asset('public/css/main.css')}}" >
	<link rel="stylesheet" href="{{asset('public/css/dashboard.css')}}" >
	<script src="{{asset('public/js/modernizr-2.6.2.min.js')}}" ></script>
	

</head>

<body class="admin">
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="javascript:if(confirm(%27http://browsehappy.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://browsehappy.com/%27" tppabs="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/fixit/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="admin_contact_modal">
		<!-- <div class="ls with_padding"> -->
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<form class="with_padding contact-form" method="post" action="http://webdesign-finder.com/html/fixit/">
					<div class="row">
						<div class="col-sm-12">
							<h3>Contact Admin</h3>
							<div class="contact-form-name">
								<label for="name">Full Name
									<span class="required">*</span>
								</label>
								<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="contact-form-subject">
								<label for="subject">Subject
									<span class="required">*</span>
								</label>
								<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
							</div>
						</div>

						<div class="col-sm-12">

							<div class="contact-form-message">
								<label for="message">Message</label>
								<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
							</div>
						</div>

						<div class="col-sm-12 text-center">
							<div class="contact-form-submit">
								<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button wide_button color1">Send Message</button>
								<button type="reset" id="contact_form_reset" name="contact_reset" class="theme_button wide_button">Clear Form</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- eof .modal -->
	
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		
        <div id="box_wrapper">
			
            <!-- template sections -->
            <section class="ls section_padding_top_100 section_padding_bottom_100 section_full_height">
				
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 to_animate">
							@if(session('reg'))
							<div  class="alert alert-success">{{session('reg')}}</div>
							@endif
							@if(session('thongbao'))
								<div    class="alert alert-danger">{{session('thongbao')}}</div>
							@endif
							@if(session('disable'))
								<div    class="alert alert-info">{{session('disable')}}</div>
							@endif
							@if(count($errors) > 0)
								<div    class="alert alert-danger">
									@foreach($errors->all() as $err)
										{{$err}}<br>
									@endforeach
								</div>
							@endif
                            <div class="with_border with_padding">
								
                                <h4 class="text-center">
                                    Đăng nhập tài khoản
                                </h4>
                                <hr class="bottommargin_30">
                                <div class="wrap-forms">
                                    <form method="POST"  action="{{Route('post.login')}}" enctype="multipart/form-data" > 
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="login-email">Username</label>
                                                    <i class="grey fa fa-user"></i>
                                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="login-password">Password</label>
                                                    <i class="grey fa fa-pencil-square-o"></i>
                                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember_me_checkbox">
                                                    <label for="remember_me_checkbox">Rememrber Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="theme_button block_button color1">Log In</button>
                                    </form>
                                </div>

                                <div class="darklinks text-center topmargin_20">

                                    <a role="button" data-toggle="collapse" href="#signin-resend-password" aria-expanded="false" aria-controls="signin-resend-password">
                            Forgot your password?
                        </a>

                                </div>
                                <div class="collapse form-inline-button" id="signin-resend-password">
                                    <form class="form-inline topmargin_20">
                                        <div class="form-group">
                                            <label class="sr-only">Enter your e-mail</label>
                                            <input type="email" class="form-control" placeholder="E-mail">
                                        </div>
                                        <button type="submit" class="theme_button with_icon">
                                            <i class="fa fa-share"></i>
                                        </button>
                                    </form>
                                </div>


                            </div>
                            <!-- .with_border -->

                            <p class="divider_20 text-center">
                    Not registered? <a href="admin_signup.html">Create an account</a>.<br>
                    or go <a href="index.htm" >Home</a>
                </p>

                        </div>
                        <!-- .col-* -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </section>
        </div>
        <!-- eof #box_wrapper -->
    </div>
	<!-- eof #canvas -->


	<!-- chat -->
	<div class="side-dropdown side-chat dropdown">
		<a class="side-button side-chat-button" id="chat-dropdown" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-comments-o"></i>
		</a>

		<ul class="dropdown-menu list-unstyled" aria-labelledby="chat-dropdown">
			<li class="dropdown-title darkgrey_bg_color">
				<h4>
					Small Chat
					<span class="pull-right">14.03.2017</span>
				</h4>
			</li>
			<li>

				<ul class="list-unstyled">
					<li class="side-chat-item item-secondary">
						<h5>
							Michael Anderson
							<time class="pull-right small-chat-date" datetime="2017-03-13T08:50:40+00:00">
								08:50
							</time>
						</h5>
						<div class="danger_bg_color">
							Duis autem veum iriure dolor in hendrerit
						</div>
					</li>
					<li class="side-chat-item item-primary">
						<h5>
							Jane Walker
							<time class="pull-right small-chat-date" datetime="2017-03-13T08:50:40+00:00">
								08:52
							</time>
						</h5>
						<div class="warning_bg_color">
							Vulputate vese molestie consequatl illum
						</div>
					</li>
					<li class="side-chat-item item-secondary">
						<h5>
							Michael Anderson
							<time class="pull-right small-chat-date" datetime="2017-03-13T08:50:40+00:00">
								08:50
							</time>
						</h5>
						<div class="danger_bg_color">
							Duis autem veum iriure dolor in hendrerit
						</div>
					</li>
				</ul>
			</li>


			<li role="separator" class="divider"></li>

			<li>
				<div class="side-chat-answer">
					<form class="form-inline button-on-input">
						<div class="form-group">
							<label for="side-chat-message" class="sr-only">Message</label>
							<input type="text" class="form-control" id="side-chat-message" placeholder="Message">
						</div>
						<button type="submit" class="btn btn-danger">
							<i class="fa fa-paper-plane-o"></i>
						</button>
					</form>
				</div>
			</li>
		</ul>
	</div>
	<!-- .chat-dropdown -->


	<a class="side-button side-contact-button" data-target="#admin_contact_modal" href="#admin_contact_modal" data-toggle="modal" role="button">
		<i class="fa fa-envelope"></i>
	</a>


	<!-- template init -->
	<script src="{{asset('public/js/compressed.js')}}" ></script>
	<script src="{{asset('public/js/main.js')}}" ></script>

	<!-- dashboard libs -->

	<!-- events calendar -->
	<script src="{{asset('public/js/moment.min.js')}}" ></script>
	<script src="{{asset('public/js/fullcalendar.min.js')}}" ></script>
	<!-- range picker -->
	<script src="{{asset('public/js/daterangepicker.js')}}" ></script>

	<!-- charts -->
	<script src="{{asset('public/js/Chart.bundle.min.js')}}" ></script>
	<!-- vector map -->
	<script src="{{asset('public/js/jquery-jvectormap-2.0.3.min.js')}}" ></script>
	<script src="{{asset('public/js/jquery-jvectormap-world-mill.js')}}" ></script>
	<!-- small charts -->
	<script src="{{asset('public/js/jquery.sparkline.min.js')}}" ></script>

	<!-- dashboard init -->
	<script src="{{asset('public/js/admin.js')}}" ></script>

</body>

</html>