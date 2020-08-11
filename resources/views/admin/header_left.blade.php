<header class="page_header_side page_header_side_sticked active-slide-side-header ds" style="background-image: linear-gradient(45deg, #ee9ca7 0%, #ffdde1 100%);">
	<div class="side_header_logo ds ms" style="background-image: linear-gradient(45deg, #ee9ca7 0%, #ffdde1 100%);">
 
		<a href="admin_index.html" >
			<span class="logo_text margin_0">
				Fixit
			</span>
		</a>
	</div>
	<span class="toggle_menu_side toggler_light header-slide" style="background-image: linear-gradient(45deg, #ee9ca7 0%, #ffdde1 100%);">
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
									<img src="{{asset('public/upload/avatar')}}/{{ Auth::user()->user->avatar }}"  alt="">
								</div>
								<div class="media-body media-middle">
									<span style="color: #2196F3; font-size: 20px;">{{Auth::user()->user->ho_ten}}</span>
									<br>
									<br>
									@if(Auth::user()->id_vaitro == 1)
										<span style="color:rgb(240, 63, 63)">
											<i class="rt-icon2-diamond3" aria-hidden="true" style="color: #e7a413"></i>
											{{Auth::user()->vaitro->vt_ten}}
										</span>
									@elseif(Auth::user()->id_vaitro == 2)
										<span style="color:rgb(111, 233, 54)">
											<i class="fa fa-laptop" aria-hidden="true" style="color: #e7a413"></i>
											{{Auth::user()->vaitro->vt_ten}}
										</span>

									@elseif(Auth::user()->id_vaitro == 3)
										<span style="color:rgb(37, 80, 223)">
											<i class="rt-icon2-spanner-outline" aria-hidden="true" style="color: #e7a413"></i>
											{{Auth::user()->vaitro->vt_ten}}
										</span>
									@elseif(Auth::user()->id_vaitro == 4)
										<span style="color:rgb(209, 23, 110)">
											<i class="rt-icon2-group-outline" style="color: #e7a413"></i>
											{{Auth::user()->vaitro->vt_ten}}
										</span>
									@endif
								</div>
							</div>
						</a>
						<ul>
							<li>
								<a href="{{ route('users.profile') }}" >
									<i class="fa fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="{{ route('users.get.edit',['id' => Auth::user()->id]) }}" >
									<i class="fa fa-edit"></i>
									Edit Profile
								</a>
							</li>
							<li>
								<a href="{{ route('get.logout') }}" >
									<i class="fa fa-sign-out"></i>
									Đăng xuất
								</a>
							</li>
						</ul>
					</li>
				</ul>

			</div>

			<!-- main side nav start -->
			<nav class="mainmenu_side_wrapper">
				@if(Auth::user()->id_vaitro == 2)
				{{-- ko hiện --}}
				@elseif(Auth::user()->id_vaitro == 1 || Auth::user()->id_vaitro == 3)
				<h3 class="dark_bg_color"
				style="background-image: linear-gradient(to top, #feada6 0%, #f5efef 100%); color: #2196F3">
					Điều khiển
				</h3>
				<ul class="menu-click">
					<li>
						<a href="{{route('admin.dashboard')}}">
							<i class="rt-icon2-chart-line"></i>
							Dashboard
						</a>

					</li>

					<li>
						<a href="{{route('admin.map')}}">
							<i class="rt-icon2-map-pin " aria-hidden="true"></i>
							Điểm bảo trì
						</a>

					</li>

					<li>
						<a href="{{route('admin.lich')}}">
							<i class="fa fa-calendar" aria-hidden="true"></i>
							Lịch làm việc
						</a>

					</li>
				</ul>

				@elseif(Auth::user()->id_vaitro == 4)
				<h3 class="dark_bg_color"
				style="background-image: linear-gradient(to top, #feada6 0%, #f5efef 100%); color: #2196F3">
					Điều khiển
				</h3>
				<ul class="menu-click">
					<li>
						<a href="{{route('admin.dashboard')}}">
							<i class="rt-icon2-chart-line"></i>
							Dashboard
						</a>

					</li>

					<li>
						<a href="{{route('khachhang.yc')}}">
							<i class="rt-icon2-health " aria-hidden="true"></i>
							Gửi y/c bảo trì
						</a>

					</li>

				</ul>

				@endif

				@if(Auth::user()->id_vaitro == 3)

				@elseif(Auth::user()->id_vaitro == 1 || Auth::user()->id_vaitro == 2)
				<h3 class="dark_bg_color" style="background-image: linear-gradient(to top, #feada6 0%, #f5efef 100%); color: #2196F3">Quản lí</h3>
				<ul class="menu-click">
					@if(Auth::user()->id_vaitro == 2)
						<li>
							<a href="{{route('admin.dashboard')}}">
								<i class="rt-icon2-chart-line"></i>
								Dashboard
							</a>

						</li>
					@endif

					<li>
						<a href="{{route('baotri.list')}}">
							<i class="rt-icon2-health"></i>
							Bảo trì
						</a>
					</li>
					<!--  -->
					<li>
						<a href="{{route('users.list')}}">
							<i class="fa fa-users"></i>
							Người dùng
						</a>
					</li>
					<!--  -->

					<li>
						<a href="{{route('users.list')}}">
							<i class="rt-icon2-pictures"></i>
							Banner lớn
						</a>
					</li>

					<li>
						<a href="#">
							<i class="rt-icon2-pencil"></i>
							Tin tức
						</a>
					</li>
					
					<!--  -->
					@if(Auth::user()->id_vaitro == 1)
					<li>
						<a href="#">
							<i class="rt-icon2-download2"></i>
							Backup
						</a>
					</li>
					@endif
				</ul>
				@endif
			</nav>
			<!-- eof main side nav -->
		</div>
	</div>
</header>
<!-- 5366 - 7882 -->