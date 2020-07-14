<?php
	include '_layout/_doc-start.php';
?>
<!-- partbox start -->
<div id="partboxMain" class="col-md-12 partbox partbox-main">
	<div id="" class="box">
		<div id="" class="row">

			<div id="" class="col-md-12 partbox-header">
				<div id="" class="row">

					<div id="" class="col-md-9 partbox-header-informations">
						<div id="" class="row">

							<div id="" class="col-md-12 partbox-header-title">
								<i class="fa fa-hand-peace-o partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">EĞİTİM BAŞARI ANALİZİ</span>
							</div>
							<div id="" class="col-md-12 partbox-header-subtitle">

							</div>

						</div>
					</div>
					<div id="" class="col-md-3 partbox-header-controls">

					</div>

				</div>
			</div>
			<div id="" class="col-md-12 partbox-body">
				<div id="" class="row">

					<!-- form group container start -->
					<div id="" class="col-md-12 form-group-container">
						<div id="" class="row">

							<div id="" class="col-md-12 form-group-container-body">
								<div id="" class="row">

									<!-- form group start -->
									<div id="" class="col-md-12 form-group">
										<div id="" class="row">

											<div id="" class="col-md-12 form-group-header">
												<div id="" class="row">

													<div id="" class="col-md-9 form-group-header-informations">
														<div id="" class="row">

															<div id="" class="col-md-12 form-group-header-title">
																<span class="form-group-header-title-text">ÖĞRENCİLER</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- table table start -->
													<div id="" class="col-md-12 form-item table-container">
														<table id="table" class="dataTable table table-bordered table-hover" cellspacing="0" width="100%"></table>
													</div>
													<!-- table table end -->

												</div>
											</div>

										</div>
									</div>
									<!-- form group end -->

								</div>
							</div>

						</div>
					</div>
					<!-- form group container end -->

				</div>
			</div>

		</div>
	</div>
</div>
<!-- partbox end -->
<?php
	include '_layout/_body-end.php';
?>
<script src="js/plugins/momentjs/js/moment.js"></script>
<link rel="stylesheet" href="js/plugins/datatables/css/datatables.min.css">
<script src="js/plugins/datatables/js/datatables.min.js"></script>
<!-- internal scripts start -->
<script type="text/javascript">
	/*
	###
	Request URL's & Data Variables
	###
	*/


	/*
	###
	Variables
	###
	*/
	var _Model = [
		{
			Id: 1,
			Name: 'Arif Denizgezen',
			LastCourseDate: '/Date(1530466347310)',
			TotalCourseCount: 12,
			AveragePercent: 96,
			TotalCourseTime: {
				Hours: 5,
				Minutes: 24
			},
			CourseTimePerCourse: 42,
			AverageCourseRate: 3.3
		},
		{
			Id: 2,
			Name: 'Arif Denizgezen',
			LastCourseDate: '/Date(1530466347310)',
			TotalCourseCount: 12,
			AveragePercent: 96,
			TotalCourseTime: {
				Hours: 5,
				Minutes: 24
			},
			CourseTimePerCourse: 42,
			AverageCourseRate: 3.3
		},
	]


	/*
	###
	Functions
	###
	*/
	function DataTables(data){
		var table = $('#table').DataTable({
			data: data,
			columns: [
				// 0- Id
				{
					title: '<span class="title">Id</span><span class="subtitle"></span>',
					data: 'Id',
					class: 'column-xs column-Id',
					orderable: false,
					searchable: false
				},
				// 1- Name
				{
					title: '<span class="title">Öğrenci</span><span class="subtitle"></span>',
					data: 'Name',
					class: ' column-Name',
					orderable: true,
					searchable: true
				},
				// 2- LastCourseDate
				{
					title: '<span class="title">Son Aldığı</span><span class="subtitle">  Eğitim Tarihi</span>',
					data: 'LastCourseDate',
					class: 'column-sm column-center column-LastCourseDate',
					orderable: true,
					searchable: true
				},
				// 3- TotalCourseCount
				{
					title: '<span class="title">Toplam</span><span class="subtitle"> Eğitim</span>',
					data: 'TotalCourseCount',
					class: 'column-sm column-center column-TotalCourseCount',
					orderable: true,
					searchable: true
				},
				// 4- AveragePercent
				{
					title: '<span class="title">Başarı</span><span class="subtitle"> Ortalaması</span>',
					data: 'AveragePercent',
					class: 'column-sm column-center column-AveragePercent',
					orderable: true,
					searchable: true
				},
				// 5- TotalCourseTime
				{
					title: '<span class="title">Toplam Eğitim</span><span class="subtitle"> Süresi</span>',
					data: 'TotalCourseTime',
					class: 'column-md column-center column-TotalCourseTime',
					orderable: true,
					searchable: true
				},
				// 6- CourseTimePerCourse
				{
					title: '<span class="title">Eğitim Başına</span><span class="subtitle"> Süre</span>',
					data: 'CourseTimePerCourse',
					class: 'column-sm column-center column-CourseTimePerCourse',
					orderable: true,
					searchable: true
				},
				// 7- AverageCourseRate
				{
					title: '<span class="title">Değerlendirme</span><span class="subtitle"> Ortalaması</span>',
					data: 'AverageCourseRate',
					class: 'column-sm column-center column-AverageCourseRate',
					orderable: true,
					searchable: true
				},
			],
			columnDefs: [
				// 2- LastCourseDate
				{
					targets: 2,
					render: function( data, type, row, meta ){
						var template = moment(data).format('DD.MM.YYYY');
						return template;
					}
				},
				// 4- AveragePercent
				{
					targets: 4,
					render: function( data, type, row, meta ){
						var template = data + ' %';
						return template;
					}
				},
				// 5- TotalCourseTime
				{
					targets: 5,
					render: function( data, type, row, meta ){
						var hours = '';
						var minutes = '';
						if( data.Hours != null ){
							hours = data.Hours + ' saat';
						}
						if( data.Minutes != null ){
							minutes = data.Minutes + ' dakika';
						}
						var template = hours + ' ' + minutes;
						return template;
					}
				},
				// 6- CourseTimePerCourse
				{
					targets: 6,
					render: function( data, type, row, meta ){
						var template = data + ' dakika';
						return template;
					}
				},
			],
			order: [
				[1, 'asc']
			],
			buttons: [],
			drawCallback: function(){

			},
			initComplete: function(){

			}
		});
	}

	/*
	###
	Handlebars Functions & Helpers
	###
	*/

	/*
	###
	Document on Ready
	###
	*/
	$(document).ready(function(){
		/*
		AJAX Requests when Page Loading
		*/

		/*
		Functions
		*/
		DataTables(_Model)

		/*
		Event Handlers
		*/
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
