<header class="page_header_side page_header_side_sticked active-slide-side-header ds">
	<div class="side_header_logo ds ms">
		<a href="admin_index.html" >
			<span class="logo_text margin_0">
				Fixit
			</span>
		</a>
	</div>
	<span class="toggle_menu_side toggler_light header-slide">
		<span></span>
	</span>
	<div class="scrollbar-macosx">
		<div class="side_header_inner">
			<!-- user -->
			<div class="user-menu">
				<ul class="menu-click">
					<li>
						<a href="#">
							<div class="media">
								<div class="media-left media-middle">
									<img src="{{asset('public/img/01-2.jpg')}}"  alt="">
								</div>
								<div class="media-body media-middle">
									<h4></h4>
									{{Auth::user()->vaitro->vt_ten}}
								</div>
							</div>
						</a>
						<ul>
							<li>
								<a href="admin_profile.html" >
									<i class="fa fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="admin_profile_edit.html" >
									<i class="fa fa-edit"></i>
									Edit Profile
								</a>
							</li>
							<li>
								<a href="admin_inbox.html" >
									<i class="fa fa-envelope-o"></i>
									Inbox
								</a>
							</li>
							<li>
								<a href="route('get.logout')" >
									<i class="fa fa-sign-out"></i>
									Log Out
								</a>
							</li>
						</ul>
					</li>
				</ul>

			</div>

			<!-- main side nav start -->
			<nav class="mainmenu_side_wrapper">
				<h3 class="dark_bg_color">Dashboard</h3>
				<ul class="menu-click">
					<li>
						<a href="{{route('admin.dashboard')}}">
							<i class="fa fa-th-large"></i>
							Dashboard
						</a>

					</li>

					<li>
						<a href="{{route('admin.map')}}">
							<i class="rt-icon2-map-pin " aria-hidden="true"></i>
							Điểm bảo trì
						</a>

					</li>

					<li>
						<a href="{{route('admin.lich')}}">
							<i class="fa fa-calendar  " aria-hidden="true"></i>
							Lịch công tác
						</a>

					</li>
				</ul>

				<h3 class="dark_bg_color">Quản lí</h3>
				<ul class="menu-click">
					<li>
						<a href="{{route('baotri.list')}}">
							<i class="rt-icon2-health"></i>
							Danh sách bảo trì
						</a>
					</li>
					<!--  -->
					<li>
						<a href="{{route('users.list')}}">
							<i class="fa fa-users"></i>
							Users
						</a>
					</li>
					<!--  -->
					
					<!--  -->
					<li>
						<a href="#">
							<i class="rt-icon2-chart-line"></i>
							Thống kê
						</a>
					</li>
					<!--  -->
					<li>
						<a href="#">
							<i class="rt-icon2-download2"></i>
							Backup
						</a>
					</li>

					
					
				</ul>

				<h3 class="dark_bg_color">Hỗ trợ</h3>
				<ul class="menu-click">
					<li>
						<a href="admin_tables.html" >
							<i class="fa fa-comment"></i>
							FAQ
						</a>
					</li>
					
				</ul>
			</nav>
			<!-- eof main side nav -->

			<div class="with_padding grey text-center">
				10GB of
				<strong>250GB</strong> Free
			</div>

		</div>
	</div>
</header>
<!-- 5366 - 7882 -->