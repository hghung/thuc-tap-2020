<header class="page_header header_white toggler_xs_right section_padding_40">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 display_table">
				<div class="header_left_logo display_table_cell">
					<a href="{{ route('home1') }}" class="logo top_logo text-left">
						<img src="{{ asset('public/img/logo.png') }}"alt="">
					</a>
				</div>

				<div class="header_mainmenu display_table_cell text-center">
					<!-- main nav start -->
					<nav class="mainmenu_wrapper">
						<ul class="mainmenu nav sf-menu">
							<li class="active">
								<a href="#box_wrapper">Trang chủ</a>
							</li>


							<li>
								<a href="#about">Giới thiệu</a>
							</li>

							<li>
								<a href="#services">Dịch vụ</a>
							</li>

							<li>
								<a href="#faq">Liên hệ</a>
							</li>
							

							<li>
								<a href="{{ route('blog') }}">Tin tức</a>
							</li>


							

						</ul>
					</nav>
					<!-- eof main nav -->
					<!-- header toggler -->
					<span class="toggle_menu">
						<span></span>
					</span>
				</div>

				<div class="header_right_buttons display_table_cell text-right hidden-xs">
					@if(Auth::check())
					<a href="{{ route('admin.dashboard') }}"  class="theme_button color1 two_lines bottommargin_0">Tài khoản</a>
					@else
					<a href="{{ route('get.login') }}"  class="theme_button color1 two_lines bottommargin_0">Đăng nhập</a>
					@endif
				</div>
			</div>
		</div>
	</div>
</header>