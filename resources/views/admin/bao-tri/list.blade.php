@extends('admin.master')
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
									<span>
										<label class="grey" for="orderby">Sắp xếp:</label>
										<select class="form-control orderby" name="orderby" id="orderby">
											<option value="date" selected>Date</option>
											<option value="price">Price</option>
											<option value="title">Title</option>
											<option value="status">Status</option>
										</select>
									</span>

									<span>
										<label class="grey" for="showcount">Hiển thị:</label>
										<select class="form-control showcount" name="showcount" id="showcount">
											<option value="10" selected>10</option>
											<option value="20">20</option>
											<option value="30">30</option>
											<option value="50">50</option>
											<option value="100">100</option>
										</select>
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
									<th>Title:</th>
									<th>Price:</th>
									<th>Date:</th>
									<th>Categories:</th>
									<th>Status:</th>
								</tr>
								<tr class="item-editable">
									<td>
										<div class="media">
											<div class="media-left media-middle">
												<img src="01.png" tppabs="http://webdesign-finder.com/html/fixit/images/shop/01.png" alt="...">
											</div>
											<div class="media-body media-middle">
												<h5>
													<a href="admin_product.html" tppabs="http://webdesign-finder.com/html/fixit/admin_product.html">Consectetur adipisicing elit</a>
												</h5>
											</div>
										</div>
									</td>
									<td class="media-middle">
										<strong>
											$55.00
										</strong>
									</td>
									<td class="media-middle">
										<time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
									</td>
									<td class="media-middle">
										uncategorized, category1
									</td>
									<td class="media-middle">
										Published
									</td>
								</tr>

								

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
							<ul class="pagination">
								<li class="disabled">
									<a href="#">
										<span class="sr-only">Prev</span>
										<i class="fa fa-angle-left" aria-hidden="true"></i>
									</a>
								</li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li>
									<a href="#">
										<span class="sr-only">Next</span>
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 text-md-right">
							Showing 1 to 6 of 12 items
						</div>
					</div>
				</div>
			</div>
			<!-- .row main columns -->
		</div>
		<!-- .container -->
	</section>
@endsection