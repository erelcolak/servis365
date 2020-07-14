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
								<i class="fa fa-tencent-weibo partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">EĞİTMEN ANALİZİ</span>
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
																<span class="form-group-header-title-text">EĞİTMENLER</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- tableTeachers table start -->
													<div id="" class="col-md-12 form-item table-container">
														<table id="tableTeachers" class="dataTable table table-bordered table-hover" cellspacing="0" width="100%"></table>
													</div>
													<!-- tableTeachers table end -->

												</div>
											</div>

										</div>
									</div>
									<!-- form group end -->
									<!-- form group start -->
									<div id="PreparedCourses" class="col-md-12 form-group hidden">
										<div id="" class="row">

											<div id="" class="col-md-12 form-group-header">
												<div id="" class="row">

													<div id="" class="col-md-9 form-group-header-informations">
														<div id="" class="row">

															<div id="" class="col-md-12 form-group-header-title">
																<span class="form-group-header-title-text">HAZIRLANMIŞ EĞİTİMLER</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- tablePreparedCourses table start -->
													<div id="" class="col-md-12 form-item table-container">
														<table id="tablePreparedCourses" class="dataTable table table-bordered table-hover" cellspacing="0" width="100%"></table>
													</div>
													<!-- tablePreparedCourses table end -->

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
			Name: 'Songül Balcı',
			TotalCourseCount: '5',
			TotalCourseTime: {
				Hours: 2,
				Minutes: 21
			},
			AveragePerformanceOfStudents: '90'
		},
		{
			Id: 2,
			Name: 'Dilan Serhan',
			TotalCourseCount: '6',
			TotalCourseTime: {
				Hours: 2,
				Minutes: 21
			},
			AveragePerformanceOfStudents: '90'
		},
		{
			Id: 3,
			Name: 'Anıl Özalp',
			TotalCourseCount: '10',
			TotalCourseTime: {
				Hours: 2,
				Minutes: 21
			},
			AveragePerformanceOfStudents: '98'
		},
		{
			Id: 4,
			Name: 'Erdem Deniz',
			TotalCourseCount: '12',
			TotalCourseTime: {
				Hours: 2,
				Minutes: 21
			},
			AveragePerformanceOfStudents: '74'
		},
	];

	var _ModelPreparedCourse = [
		{
			Id: 1,
			CourseGroup: 'Genel Eğitimler',
			CourseTopic: 'Genel davranış ve çalışma prensipleri',
			CourseTime: {
				Hours: 2,
				Minutes: 21
			},
			Rating: '3.5',
			AveragePercent: '84',
			AddDate: '/Date(1530466347310)',
		},
		{
			Id: 2,
			CourseGroup: 'Genel Eğitimler',
			CourseTopic: 'Müşteri ile iletişim',
			CourseTime: {
				Hours: 2,
				Minutes: 21
			},
			Rating: '4.5',
			AveragePercent: '53',
			AddDate: '/Date(1530466347310)',
		},
		{
			Id: 3,
			CourseGroup: 'Genel Eğitimler',
			CourseTopic: 'Genel davranış ve çalışma prensipleri',
			CourseTime: {
				Hours: 2,
				Minutes: 21
			},
			Rating: '3.2',
			AveragePercent: '77',
			AddDate: '/Date(1530466347310)',
		},
	];

	/*
	###
	Functions
	###
	*/
	function DataTables(data){
		var table = $('#tableTeachers').DataTable({
			data: data,
			columns: [
				// 0- Id
				{
					title: '<span class="title">Id</span><span class="subtitle"></span>',
					data: 'Id',
					class: 'column-xs column-center column-Id',
					orderable: true,
					searchable: true
				},
				// 1- Name
				{
					title: '<span class="title">Eğitmen</span><span class="subtitle"> Adı Soyadı</span>',
					data: 'Name',
					class: 'column-Name',
					orderable: true,
					searchable: true
				},
				// 2- TotalCourseCount
				{
					title: '<span class="title">Eğitmen</span><span class="subtitle"> Adı Soyadı</span>',
					data: 'TotalCourseCount',
					class: 'column-sm column-center column-TotalCourseCount',
					orderable: false,
					searchable: false
				},
				// 3- TotalCourseTime
				{
					title: '<span class="title">Eğitmen</span><span class="subtitle"> Adı Soyadı</span>',
					data: 'TotalCourseTime',
					class: 'column-sm column-center column-TotalCourseTime',
					orderable: false,
					searchable: false
				},
				// 4- AveragePerformanceOfStudents
				{
					title: '<span class="title">Eğitmen</span><span class="subtitle"> Adı Soyadı</span>',
					data: 'AveragePerformanceOfStudents',
					class: 'column-sm column-center column-AveragePerformanceOfStudents',
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
				// 4- AveragePerformanceOfStudents
				{
					targets: 4,
					render: function( data, type, row, meta ){
						var unit = '%';
						var value = data;
						var template = value + ' ' + unit;
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

	function PreparedCoursesDataTables(data){
		var table = $('#tablePreparedCourses').DataTable({
			data: data,
			columns: [
				// 0- Id
				{
					title: '<span class="title">Id</span><span class="subtitle"></span>',
					data: 'Id',
					class: 'column-xs column-center column-Id',
					orderable: true,
					searchable: true
				},
				// 1- CourseGroup
				{
					title: '<span class="title">Eğitim</span><span class="subtitle"> Grubu</span>',
					data: 'CourseGroup',
					class: 'column-lg column-CourseGroup',
					orderable: true,
					searchable: true
				},
				// 2- CourseTopic
				{
					title: '<span class="title">Eğitim</span><span class="subtitle"> Konusu</span>',
					data: 'CourseTopic',
					class: 'column-CourseTopic',
					orderable: true,
					searchable: true
				},
				// 3- CourseTime
				{
					title: '<span class="title">Eğitim</span><span class="subtitle"> Süresi</span>',
					data: 'CourseTime',
					class: 'column-sm column-center column-CourseTime',
					orderable: false,
					searchable: false
				},
				// 4- Rating
				{
					title: '<span class="title">Kullanıcı</span><span class="subtitle"> Notu</span>',
					data: 'Rating',
					class: 'column-sm column-center column-Rating',
					orderable: false,
					searchable: false
				},
				// 5- AveragePercent
				{
					title: '<span class="title">Öğrenci Başarı</span><span class="subtitle"> Ortalaması</span>',
					data: 'AveragePercent',
					class: 'column-sm column-center column-AveragePercent',
					orderable: false,
					searchable: false
				},
				// 6- AddDate
				{
					title: '<span class="title">Öğrenci Başarı</span><span class="subtitle"> Ortalaması</span>',
					data: 'AddDate',
					class: 'column-sm column-center column-AddDate',
					orderable: false,
					searchable: false
				},
			],
			columnDefs: [
				// 3- CourseTime
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
				// 5- AveragePercent
				{
					targets: 5,
					render: function( data, type, row, meta ){
						var unit = '%';
						var value = data;
						var template = value + ' ' + unit;
						return template;
					}
				},
				// 6- AddDate
				{
					targets: 6,
					render: function( data, type, row, meta ){
						var template = moment(data).format('DD.MM.YYYY');
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
		$('#tableTeachers').on('click', 'tbody tr', function(){
			// Ajax Query - Get Teachers Lesson
			$.ajax({
				// url: ,
				type: 'POST',
				// data: JSON.stringify(queryData),
				contentType: 'application/json',
				beforeSend: function(xhr){
					Loading()
				},
				success: function(data){
					if( data.IsSuccess == false ){
						SystemAjaxAlert(data)
					}
					else{

					}
				},
				error: function(data){
					Alert(alertText.ajax.error)
				},
				complete: function(){
					if ( ! $.fn.DataTable.isDataTable( '#tablePreparedCourses' ) ) {
						$('#PreparedCourses').removeClass('hidden');
						PreparedCoursesDataTables(_ModelPreparedCourse)
					}
					else{
						var table = $('#tablePreparedCourses').DataTable();
						table.destroy();
						$('#tablePreparedCourses').empty();
						PreparedCoursesDataTables(_ModelPreparedCourse)
					}
					Loading(false);
				}
			});
		});
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
