<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Trang Chủ</title>
	<meta charset="utf-8">
	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}" >
	<link rel="stylesheet" href="{{asset('public/css/animations.css')}}" >
	<link rel="stylesheet" href="{{asset('public/css/fonts.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/main.css')}}"  class="color-switcher-link">
	<script src="{{asset('public/js/modernizr-2.6.2.min.js')}}" ></script>
	{{--  <script src="{{asset('public/js/html5shiv.min.js')}}"></script>
	<script src="{{asset('public/js/respond.min.js')}}"></script>
	<script src="{{asset('public/js/jquery-1.12.4.min.js')}}"></script>  --}}
</head>

<body>
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
			<form method="get" class="searchform search-form form-inline" action="#">
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

			@include('page.header')

            @yield('content')
            
			@include('page.footer')

			@include('zalo')
			

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="{{asset('public/js/compressed.js')}}" ></script>
	<script src="{{asset('public/js/main.js')}}"></script>

	
</body>

</html>