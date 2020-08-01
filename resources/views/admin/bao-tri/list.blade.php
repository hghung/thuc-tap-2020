@extends('admin.master')
@section('tieude','DS bảo trì')
@section('admin_content')
	<section class="ls with_bottom_border">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<ol class="breadcrumb darklinks">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li class="active">Products</li>
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
					<h3>Products</h3>
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->

			<div class="row">
				<div class="col-xs-12">
					<div class="with_border with_padding">

						<div class="row admin-table-filters">
							<div class="col-lg-9">

								<form action="http://webdesign-finder.com/html/fixit/" class="form-inline filters-form">
									<span>
										<a class="btn btn-primary" style="color:#fff; border-radius:15px; font-size:12px;" href="{{route('baotri.get.add')}}">Thêm lịch bảo trì</a>
										
									</span>

								</form>

							</div>
							<!-- .col-* -->
							<div class="col-lg-3 text-lg-right">
								<div class="widget widget_search">

									<form method="get" class="searchform" action="http://webdesign-finder.com/html/fixit/">
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
									<th>Tiêu đề</th>
									<th>Khách hàng</th>
									<th>Nhân viên</th>
									<th>Ngày - giờ hẹn</th>
									<th>Trạng thái</th>
									<th>Ngày tạo</th>
									<th>Thao tác</th>

								</tr>
								<tbody>
									{{-- start --}}
									@foreach($baotri as $baotri2)
									<tr class="item-editable">
										<td>
											{{ $baotri2->tieude }}
										</td>
										<td class="media-middle">
											<span style="color:green">
												{{ $baotri2->baotrikh->ho_ten }}
											</span>
										</td>
										<td class="media-middle">
											<span style="color:rgb(32, 46, 248)">
												{{ $baotri2->baotrinv->ho_ten }}
											</span>
										</td>

										<td class="media-middle">
											{{date("d-m-Y  ",strtotime($baotri2->ngay)) }} 
											-
											{{date(" H:i A  ",strtotime($baotri2->gio)) }}
										</td>


										<td class="media-middle">
											Duyệt
										</td>
										<td class="media-middle">
											{{date("A H:i || d-m-Y  ",strtotime($baotri2->created_at)) }}
										</td>
										{{--  --}}
										<td align="center">
											<a href="#"> 
												<i class="fa fa-cogs"></i>
											</a>
										</td>
									</tr>
									@endforeach
									{{-- end --}}
								</tbody>

								

							</table>
						</div>
						<!-- .table-responsive -->
					</div>
					<!-- .with_border -->
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->
			<!-- .row main columns -->
		</div>
		<!-- .container -->
	</section>
@endsection