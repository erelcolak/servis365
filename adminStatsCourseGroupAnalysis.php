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
								<i class="fa fa-users partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">EĞİTİM GRUPLARI ANALİZİ</span>
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
																<span class="form-group-header-title-text">EĞİTİM GRUPLARI</span>
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

									<!-- form group start -->
									<div id="" class="col-md-12 form-group">
										<div id="" class="row">

											<div id="" class="col-md-12 form-group-header">
												<div id="" class="row">

													<div id="" class="col-md-9 form-group-header-informations">
														<div id="" class="row">

															<div id="" class="col-md-12 form-group-header-title">
																<span class="form-group-header-title-text">GRAFİKLER</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- CourseCountChart start -->
													<div id="" class="col-md-6 form-item chart-container">
														<canvas id="CourseCountChart" width="16" height="12"></canvas>
													</div>
													<!-- CourseCountChart end -->
													<!-- CourseTypesChart start -->
													<div id="" class="col-md-6 form-item chart-container">
														<canvas id="CourseTypesChart" width="16" height="12"></canvas>
													</div>
													<!-- CourseTypesChart end -->

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
<link rel="stylesheet" href="js/plugins/datatables/css/datatables.min.css">
<script src="js/plugins/datatables/js/datatables.min.js"></script>
<script src="js/plugins/chartjs/js/chart.min.js"></script>
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
			Name: 'Genel Eğitimler',
			TotalCourseCount: '5',
			TotalCourseTime: {
				Hours: 2,
				Minutes: 21
			},
			AverageTimePerCourse: {
				Hours: null,
				Minutes: 17,
				Seconds: 24
			}
		},
		{
			Id: 2,
			Name: 'İSG Eğitimleri',
			TotalCourseCount: '5',
			TotalCourseTime: {
				Hours: 2,
				Minutes: 21
			},
			AverageTimePerCourse: {
				Hours: null,
				Minutes: 17,
				Seconds: 24
			}
		},
		{
			Id: 3,
			Name: 'Mekanik Sistemler',
			TotalCourseCount: '5',
			TotalCourseTime: {
				Hours: 2,
				Minutes: 21
			},
			AverageTimePerCourse: {
				Hours: null,
				Minutes: 17,
				Seconds: 24
			}
		},
		{
			Id: 4,
			Name: 'Elektrik Sistemleri',
			TotalCourseCount: '5',
			TotalCourseTime: {
				Hours: 2,
				Minutes: 21
			},
			AverageTimePerCourse: {
				Hours: null,
				Minutes: 17,
				Seconds: 24
			}
		},
		{
			Id: 5,
			Name: 'Yangın Sistemleri',
			TotalCourseCount: '5',
			TotalCourseTime: {
				Hours: 2,
				Minutes: 21
			},
			AverageTimePerCourse: {
				Hours: null,
				Minutes: 17,
				Seconds: 24
			}
		},
		{
			Id: 6,
			Name: 'Özel Sistemler',
			TotalCourseCount: '5',
			TotalCourseTime: {
				Hours: 2,
				Minutes: 21
			},
			AverageTimePerCourse: {
				Hours: null,
				Minutes: 17,
				Seconds: 24
			}
		},
	];

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
					title: '<span class="title">ID</span><span class="subtitle"></span>',
					data: 'Id',
					class: 'column-xs column-center column-center column-Id',
					orderable: true,
					searchable: true
				},
				// 1- Name
				{
					title: '<span class="title">Eğitim Grubu</span><span class="subtitle"> Adı</span>',
					data: 'Name',
					class: 'column-Name',
					orderable: true,
					searchable: true
				},
				// 2- TotalCourseCount
				{
					title: '<span class="title">Toplam Eğitim</span><span class="subtitle"> Sayısı</span>',
					data: 'TotalCourseCount',
					class: 'column-sm column-center column-TotalCourseCount',
					orderable: false,
					searchable: false
				},
				// 3- TotalCourseTime
				{
					title: '<span class="title">Toplam Eğitim</span><span class="subtitle"> Süresi</span>',
					data: 'TotalCourseTime',
					class: 'column-sm column-center column-TotalCourseTime',
					orderable: false,
					searchable: false
				},
				// 4- AverageTimePerCourse
				{
					title: '<span class="title">Eğitim Başına</span><span class="subtitle"> Ortalama Süre</span>',
					data: 'AverageTimePerCourse',
					class: 'column-sm column-center column-AverageTimePerCourse',
					orderable: false,
					searchable: false
				},
			],
			columnDefs: [
				// 2- TotalCourseCount
				{
					targets: 2,
					render: function( data, type, row, meta ){
						var unit = 'adet';
						var value = data;
						var template = value + ' ' + unit;
						return template;
					}
				},
				// 3- TotalCourseTime
				{
					targets: 3,
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
				// 4- AverageTimePerCourse
				{
					targets: 4,
					render: function( data, type, row, meta ){
						var hours = '';
						var minutes = '';
						var seconds = '';
						if( data.Hours != null ){
							hours = data.Hours + ' saat';
						}
						if( data.Minutes != null ){
							minutes = data.Minutes + ' dakika';
						}
						if( data.Seconds != null ){
							seconds = data.Seconds + ' saniye';
						}
						var template = hours + ' ' + minutes + ' ' + seconds;
						return template;
					}
				},
			],
			order: [
				[0, 'asc']
			],
			buttons: [],
			drawCallback: function(){

			},
			initComplete: function(){

			}
		});
	}
	// Doughnut chart
	function DoughnutChart(){
		var ctx = $('#CourseCountChart');
		var chart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: [
					'Genel Eğitimler',
					'İSG Eğitimleri',
					'Yangın Eğitimleri',
				],
				datasets: [
					{
						data: [15, 12, 36],
						backgroundColor: ['rgba(33, 150, 243, 0.5)', 'rgba(255, 193, 7, 0.5)', 'rgba(255, 155, 7, 0.5)'],
					}
				]
			},
			options: {
				title: {
					display: true,
					text: 'Eğitim Sayılarının Dağılımı',

				},
			},
		});
	}
	// Pie chart
	function PieChart(){
		var ctx = $('#CourseTypesChart');
		var chart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: [
					'Genel Eğitimler',
					'İSG Eğitimleri',
					'Yangın Eğitimleri',
				],
				datasets: [
					{
						data: [72, 52, 36],
						backgroundColor: ['rgba(33, 150, 243, 0.5)', 'rgba(255, 193, 7, 0.5)', 'rgba(255, 155, 7, 0.5)'],
					}
				]
			},
			options: {
				title: {
					display: true,
					text: 'Eğitim Tiplerinin Toplam Süreleri',

				},
			},
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
		DoughnutChart()
		PieChart()

		/*
		Event Handlers
		*/
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
