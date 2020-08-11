@extends('admin.master')
@section('tieude','DS tin tức')
@section('admin_content')
	<section class="ls with_bottom_border">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<ol class="breadcrumb darklinks">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li class="active">tin tức</li>
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
					<h3>Tin tức</h3>
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
										<a class="btn btn-primary" style="color:#fff; border-radius:15px; font-size:12px;" href="{{route('tintuc.get.add')}}">Thêm tin tức</a>
										
									</span>

								</form>

							</div>
							<!-- .col-* -->
							<div class="col-lg-3 text-lg-right">
								<div class="widget widget_search">

									<form method="get" class="searchform" action="#">
										<!-- <div class="form-group-wrap"> -->
										<div class="form-group">
											<label class="sr-only" for="widget-search">Search for:</label>
											<input id="timkiem" type="text" value="" name="search" class="form-control" placeholder="Tìm kiếm">
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
									<th>người đăng</th>
									<th>Trạng thái</th>
									<th>Ngày tạo</th>
									<th>Thao tác</th>

								</tr>
								<tbody id="tintuc">
									{{-- start --}}
									
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
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-md-6">
							
						</div>
						<div style="margin-left: 5%;" class="col-md-5 text-md-right">
							Hiện thị có <b style="color:blue" id="total_records"></b> tin tức
						</div>
					</div>
				</div>
			</div>
			<!-- .row main columns -->
		</div>
		<!-- .container -->
	</section>

	<script src="{{asset('public/jquery2.0.3.min.js')}}" type="text/javascript"></script>

	<script type="text/javascript">

		$(document).ready(function(){
	
		 fetch_customer_data();
	
		 function fetch_customer_data(query = '')
		 {
		  $.ajax({
		   url:"{{ route('timkiem.tintuc') }}",
		   method:'GET',
		   data:{query:query},
		   dataType:'json',
		   success:function(data)
		   {
			$('#tintuc').html(data.banhbao);
			$('#total_records').text(data.total_data);
		   }
		  })
		 }
	
		 $(document).on('keyup', '#timkiem', function(){
		  var query = $(this).val();
		  fetch_customer_data(query);
		 });
		});
	</script>

@endsection