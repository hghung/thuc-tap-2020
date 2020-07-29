@extends('admin.master')
@section('tieude','Tài khoản')
@section('admin_content')
	<section class="ls with_bottom_border">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<ol class="breadcrumb darklinks">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li class="active">Tài khoản người dùng</li>
					</ol>
				</div>
				<!-- .col-* -->
				<div class="col-md-6 text-md-right">
					<span class="dashboard-daterangepicker">
						<i class="fa fa-calendar"></i>
						<span></span>
						<i class="caret"></i>
					</span>
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->
		</div>
		<!-- .container -->
	</section>

	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<h3>Tài khoản người dùng</h3>
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->

			<div class="row">
				<div class="col-xs-12">
					<div class="with_border with_padding">

						<div class="row admin-table-filters">
							<div class="col-lg-9">

								<form action="#" class="form-inline filters-form">
									<span>
										{{--  thêm  --}}
										<a class="btn btn-primary" style="color:#fff; border-radius:15px; font-size:12px;" href="{{route('users.get.add')}}">Thêm thành viên</a>
										
									</span>
								</form>

							</div>
							<!-- .col-* -->
							<div class="col-lg-3 text-lg-right">
								<div class="widget widget_search">
									{{--  tìm kiếm  --}}
									<form method="get" class="searchform" action="#">
										<!-- <div class="form-group-wrap"> -->
										<div class="form-group">
											<label class="sr-only" for="widget-search">Search for:</label>
											<input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Tìm kiếm">
										</div>
										<button type="submit" class="theme_button color1 no_bg_button">Search</button>
										<!-- </div> -->
									</form>
								</div>

							</div>
							<!-- .col-* -->
						</div>
						<!-- .row -->

						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<tr>
									<th  width="15%">ID User</th>
									<th  width="20%">Tài khoản</th>
									<th  width="20%">Họ tên</th>
									<th  width="15%">Vai trò</th>
									<th  width="15%">Trạng thái</th>
									<th  width="10%">Thao tác</th>

								</tr>
								@foreach($user as $user1)
								{{--  start  --}}
								<tr class="item-editable">
									{{--  1  --}}
									<td>
										{{ $user1->user->ma_user }}
									</td>
									{{--  2  --}}
									<td class="media-middle">
										{{ $user1->username }}

									</td>
									{{--  3  --}}
									<td class="media-middle">
										{{ $user1->user->ho_ten }}

									</td>
									{{--  4  --}}
									<td class="media-middle">
										@if($user1->id_vaitro == 1)
											<span style="color:red">{{ $user1->vaitro->vt_ten }}</span>
										@elseif($user1->id_vaitro == 2)
											<span style="color:yellow">{{ $user1->vaitro->vt_ten }}</span>
										@elseif($user1->id_vaitro == 3)
											<span style="color:green">{{ $user1->vaitro->vt_ten }}</span>
										@endif
									</td>
									{{--  5  --}}
									<td class="media-middle" align="center">
										@if($user1->trang_thai == 1)
											<span style="color:green">
												<i class="fa fa-unlock"></i>
											</span>
										@elseif($user1->trang_thai == 2)
											<span style="color:red">
												<i class="fa fa-lock"></i>
											</span>
										@endif
									</td>
									<td align="center">
										<a href="#"> 
											<i class="fa fa-cogs"></i>
										</a>
									</td>
								</tr>
								{{--  end  --}}
								@endforeach

								

							</table>
						</div>
						<!-- .table-responsive -->
					</div>
					<!-- .with_border -->
				</div>
				<!-- .col-* -->
			</div>
			
			<!-- .row main columns -->
		</div>
		<!-- .container -->
	</section>
@endsection