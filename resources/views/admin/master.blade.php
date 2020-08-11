<!DOCTYPE html>
<html class="no-js">

<head>
	<title>Quản lý || @yield('tieude')</title>
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

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->

			@include('admin.header_left')

			@include('admin.header')

			@yield('admin_content')

			@include('zalo')


		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

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