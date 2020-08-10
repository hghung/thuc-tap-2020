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
						<li class="active">Lịch làm việc</li>
					</ol>
				</div>
				<!-- .col-* -->
				
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
					<h3>Lịch làm việc</h3>
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->

			<div class="row">
				<div class="col-xs-12">
					<div class="with_border with_padding">

						<div class="row admin-table-filters">
							<div class="col-lg-9">

								
							</div>
							<!-- .col-* -->
							<div class="col-lg-3 text-lg-right">
							</div>
							<!-- .col-* -->
						</div>
						<!-- .row -->

						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<tr >
									<th align="center">Khách hàng</th>
									<th align="center">Trạng thái</th>
									<th align="center">Ngày</th>
                                    <th align="center">Giờ</th>
									<th align="center">Bản đồ</th>
                                    

								</tr>
								<tbody >
                                    @foreach($work as $work2)
                                    <td>
                                        {{ $work2->baotrikh->ho_ten }}
                                    </td>
                                    <td>
                                        {{ $work2->baotristatus->trangthai }}
                                    </td>
                                    <td>
                                        {{ $work2->ngay }}
                                    </td>
                                    <td>
                                        {{ $work2->gio }}
                                    </td>
                                    <td >
                                        <a href="{{ route('admin.ct.map',['id' => $work2->id]) }}" style="margin-left: 20px;"> 
                                            <b>
                                                <i class="rt-icon2-map2"></i>
                                            </b>
                                        </a>
                                    </td>
                                    @endforeach
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