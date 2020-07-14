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
								<i class="fa fa-user-circle-o partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">KULLANICI PROFİLİ</span>
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
																<span class="form-group-header-title-text">BİLGİLER</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>

											<!-- templateUserInformations handlebars template start -->
											<script id="templateUserInformations" type="text/x-handlebars-template">

												<div id="" class="col-md-12 form-group-body">
													<div id="" class="row">

														<!-- form group start -->
														<div id="" class="col-md-9 form-group form-group-inner">
															<div id="" class="box-border">
																<div id="" class="row">

																	<div id="" class="col-md-12 form-group-body">
																		<div id="" class="row">

																			<!-- form item start -->
																			<div id="Name" class="col-md-12 form-item">
																				<div id="" class="row">

																					<div id="" class="col-md-4 form-item-informations">
																						<div for="" class="form-item-title">AD SOYAD</div>
																						<div id="" class="form-item-description"></div>
																					</div>
																					<div id="" class="col-md-8 form-item-inputs">
																						{{Name}}
																					</div>

																				</div>
																			</div>
																			<!-- form item end -->
																			<!-- form item start -->
																			<div id="{{Email}}" class="col-md-12 form-item">
																				<div id="" class="row">

																					<div id="" class="col-md-4 form-item-informations">
																						<div for="" class="form-item-title">E-POSTA</div>
																						<div id="" class="form-item-description"></div>
																					</div>
																					<div id="" class="col-md-8 form-item-inputs">
																						{{Email}}
																					</div>

																				</div>
																			</div>
																			<!-- form item end -->
																			<!-- form item start -->
																			<div id="Mission" class="col-md-12 form-item">
																				<div id="" class="row">

																					<div id="" class="col-md-4 form-item-informations">
																						<div for="" class="form-item-title">GÖREV</div>
																						<div id="" class="form-item-description"></div>
																					</div>
																					<div id="" class="col-md-8 form-item-inputs">
																						{{Mission}}
																					</div>

																				</div>
																			</div>
																			<!-- form item end -->
																			<!-- form item start -->
																			<div id="NotificationsCountWaiting" class="col-md-12 form-item">
																				<div id="" class="row">

																					<div id="" class="col-md-4 form-item-informations">
																						<div for="" class="form-item-title">BEKLEYEN BİLDİRİMLER</div>
																						<div id="" class="form-item-description"></div>
																					</div>
																					<div id="" class="col-md-8 form-item-inputs">
																						{{#if NotificationsCountWaiting}}<a href="{{HelperLinkNotificationsCountWaiting}}" title="" target="_self" id="" class=""><span class="highlight primary">{{NotificationsCountWaiting}}</span></a>{{/if}}
																					</div>

																				</div>
																			</div>
																			<!-- form item end -->
																			<!-- form item start -->
																			<div id="AccessDate" class="col-md-12 form-item">
																				<div id="" class="row">

																					<div id="" class="col-md-4 form-item-informations">
																						<div for="" class="form-item-title">SİSTEME KATILMA TARİHİ</div>
																						<div id="" class="form-item-description"></div>
																					</div>
																					<div id="" class="col-md-8 form-item-inputs">
																						{{HelperDate AccessDate}}
																					</div>

																				</div>
																			</div>
																			<!-- form item end -->
																			<!-- form item start -->
																			<div id="CourseCountComplete" class="col-md-12 form-item">
																				<div id="" class="row">

																					<div id="" class="col-md-4 form-item-informations">
																						<div for="" class="form-item-title">TAMAMLANAN EĞİTİM SAYISI</div>
																						<div id="" class="form-item-description"></div>
																					</div>
																					<div id="" class="col-md-8 form-item-inputs">
																						{{CourseCountComplete}}
																					</div>

																				</div>
																			</div>
																			<!-- form item end -->
																			<!-- form item start -->
																			<div id="CourseCountSucces" class="col-md-12 form-item">
																				<div id="" class="row">

																					<div id="" class="col-md-4 form-item-informations">
																						<div for="" class="form-item-title">BAŞARILI EĞİTİM SAYISI</div>
																						<div id="" class="form-item-description"></div>
																					</div>
																					<div id="" class="col-md-8 form-item-inputs">
																						{{CourseCountSucces}}
																					</div>

																				</div>
																			</div>
																			<!-- form item end -->
																			<!-- form item start -->
																			<div id="CourseCountFail" class="col-md-12 form-item">
																				<div id="" class="row">

																					<div id="" class="col-md-4 form-item-informations">
																						<div for="" class="form-item-title">BAŞARISIZ EĞİTİM SAYISI</div>
																						<div id="" class="form-item-description"></div>
																					</div>
																					<div id="" class="col-md-8 form-item-inputs">
																						{{CourseCountFail}}
																					</div>

																				</div>
																			</div>
																			<!-- form item end -->
																			<!-- form item start -->
																			<div id="CourseTime" class="col-md-12 form-item">
																				<div id="" class="row">

																					<div id="" class="col-md-4 form-item-informations">
																						<div for="" class="form-item-title">TOPLAM EĞİTİM SÜRESİ</div>
																						<div id="" class="form-item-description"></div>
																					</div>
																					<div id="" class="col-md-8 form-item-inputs">
																						{{HelperCourseTime CourseTime}}
																					</div>

																				</div>
																			</div>
																			<!-- form item end -->
																			<!-- form item start -->
																			<div id="AveragePerformance" class="col-md-12 form-item">
																				<div id="" class="row">

																					<div id="" class="col-md-4 form-item-informations">
																						<div for="" class="form-item-title">PERFORMANS ORTALAMASI</div>
																						<div id="" class="form-item-description"></div>
																					</div>
																					<div id="" class="col-md-8 form-item-inputs">
																						{{HelperPercent AveragePerformance}}
																					</div>

																				</div>
																			</div>
																			<!-- form item end -->

																		</div>
																	</div>

																</div>
															</div>
														</div>
														<!-- form group end -->
														<!-- form group start -->
														<div id="" class="col-md-3 form-group form-group-inner">
															<div id="" class="box-border">
																<div id="" class="row">

																	<div id="" class="col-md-12 form-group-body">
																		<div id="" class="row">

																			<!-- form item start -->
																			<div id="" class="col-md-12 form-item">
																				<img src="{{UserProfileImage}}" title="" alt="" id="" class="img img-responsive " />
																			</div>
																			<!-- form item end -->

																		</div>
																	</div>

																</div>
															</div>
														</div>
														<!-- form group end -->

													</div>
												</div>

											</script>
											<!-- templateUserInformations handlebars template end -->
											<!-- renderUserInformations handlebars render start -->
											<div id="renderUserInformations" class="render-template"></div>
											<!-- renderUserInformations handlebars render end -->

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
																<span class="form-group-header-title-text">EĞİTİM GEÇMİŞİ</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- tableCoursePast table start -->
													<div id="" class="col-md-12 form-item table-container">
														<table id="tableCoursePast" class="dataTable table table-bordered table-hover" cellspacing="0" width="100%"></table>
													</div>
													<!-- tableCoursePast table end -->

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
<!-- modal start -->
<div id="modalRepeatCourse" class="modal fade" role="dialog">
	<div id="" class="modal-dialog">
		<div id="" class="modal-content">

			<div id="" class="modal-header">
				<div id="" class="row">

					<div id="" class="col-md-9 modal-header-informations">
						<div id="" class="row">

							<div id="" class="col-md-12 modal-header-title">
								<i class="fa fa-exclamation-triangle modal-header-title-icon"></i>
								<span class="modal-header-title-text">UYARI</span>
							</div>
							<div id="" class="col-md-12 modal-header-subtitle">

							</div>

						</div>
					</div>
					<div id="" class="col-md-3 modal-header-controls">
						<a href="" title="" target="_self" id="" class="close " type="button" data-dismiss="modal">
							<i class="fa fa-times btn-icon"></i>
						</a>
					</div>

				</div>
			</div>
			<div class="modal-body">
				<!-- templateModalRepeatCourse handlebars template start -->
				<script id="templateModalRepeatCourse" type="text/x-handlebars-template">

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
																<span class="form-group-header-title-text">EĞİTİMİ TEKRAR ALMAK ÜZERESİNİZ</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- form item start -->
													<div id="" class="col-md-12 form-item">
														<strong>{{Title}}</strong> eğitimini tekrar almak istediğinizden emin misiniz?
													</div>
													<!-- form item end -->

												</div>
											</div>

										</div>
									</div>
									<!-- form group end -->

								</div>
							</div>
							<div id="" class="col-md-12 form-group-container-footer">
								<a href="" title="" target="_self" id="" class="btn btn-default btn-left" type="button" data-dismiss="modal">
									<span class="btn-text">KAPAT</span>
								</a>
								<a href="{{HelperLinkConfirmRepeatCourse Id}}" title="" target="_self" id="" class="btn btn-success " type="button">
									<span class="btn-text">EVET</span>
								</a>
							</div>

						</div>
					</div>
					<!-- form group container end -->

				</script>
				<!-- templateModalRepeatCourse handlebars template end -->
				<!-- renderModalRepeatCourse handlebars render start -->
				<div id="renderModalRepeatCourse" class="render-template"></div>
				<!-- renderModalRepeatCourse handlebars render end -->
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</div>
<!-- modal end -->
<?php
	include '_layout/_body-end.php';
?>
<!-- external scripts start -->
<script src="js/plugins/momentjs/js/moment.js"></script>
<link rel="stylesheet" href="js/plugins/datatables/css/datatables.min.css">
<script src="js/plugins/datatables/js/datatables.min.js"></script>
<!-- external scripts end -->
<!-- internal scripts start -->
<script type="text/javascript">
	/*
	###
	Request URL's & Data Variables
	###
	*/
	var _URLNotifications = 'UserNotifications/';
	var _URLRepeatCourse = 'Course/';

	/*
	###
	Variables
	###
	*/
	var _Model = {
		Name: 'Arif Denizgezen',
		UserProfileImage: 'img/empty/empty.jpg',
		Id: 1,
		Email: 'arif@servis365.com',
		Mission: 'Elektrik Teknikeri',
		NotificationsCountWaiting: 13,
		AccessDate: '/Date(1530466347310)',
		CourseCountComplete: 15,
		CourseCountFail: 3,
		CourseCountSucces: 12,
		CourseTime: {
			Minutes: 13,
			Seconds: 52
		},
		AveragePerformance: 92,
		ListCoursesPast: [
			{
				Id: 1,
				CertificateAvailable: false,
				CertificateURL: null,
				Code: 'G-01',
				Title: 'Genel bakım prosedürleri',
				DateLastCourse: '/Date(1530466347310)',
				DegreeBest: 92,
				DegreeWorst: 15,
				CountJoin: 2
			},
			{
				Id: 2,
				CertificateAvailable: true,
				CertificateURL: '/#',
				Code: 'G-01',
				Title: 'Genel bakım prosedürleri 2',
				DateLastCourse: '/Date(1530466347310)',
				DegreeBest: 92,
				DegreeWorst: 15,
				CountJoin: 2
			},
		],
	};

	/*
	###
	Functions
	###
	*/

	/*
	###
	Handlebars Functions & Helpers
	###
	*/
	// Helper date
	Handlebars.registerHelper('HelperDate', function(data){
		var val = moment(data).format('DD.MM.YYYY');
		return val;
	});
	// Helper percent
	Handlebars.registerHelper('HelperPercent', function(data){
		var val = data + ' ' + '%';
		return val;
	});
	// Rendering CourseTime
	Handlebars.registerHelper('HelperCourseTime', function(data, options){
		var minutes = '';
		var seconds = '';
		debugger;
		if( data.Minutes != null ){
			minutes = data.Minutes + ' saat';
		}
		if( data.Seconds != null ){
			seconds = data.Seconds + ' dakika';
		}
		var template = minutes + ' ' + seconds;
		return template;
	});
	// Helper LinkConfirmRepeatCourse
	Handlebars.registerHelper('HelperLinkConfirmRepeatCourse', function(data){
		var val = _URLRepeatCourse + data;
		return val;
	});
	// Helper ConfirmRepeatCourse
	Handlebars.registerHelper('HelperLinkNotificationsCountWaiting', function(){
		var val = _URLNotifications;
		return val;
	});
	// datatables
	function DataTables(data){
		var table = $('#tableCoursePast').DataTable({
			data: data,
			columns: [
				// 0- RepeatCourse
				{
					title: '<span class="title">Tekrarla</span><span class="subtitle"></span>',
					data: 'Id',
					class: 'column-xs column-center control-buttons',
					orderable: false,
					searchable: false
				},
				// 1- CertificateAvailable
				{
					title: '<span class="title">Sertifika</span><span class="subtitle"></span>',
					data: 'CertificateAvailable',
					class: 'column-xs column-center control-buttons column-CertificateAvailable',
					orderable: false,
					searchable: false
				},
				// 2- Code
				{
					title: '<span class="title">Kod</span><span class="subtitle"></span>',
					data: 'Code',
					class: 'column-xs column-center column-Code',
					orderable: false,
					searchable: false
				},
				// 3- Title
				{
					title: '<span class="title">Eğitim Başlığı</span>',
					data: 'Title',
					class: ' column-Title',
					orderable: true,
					searchable: true
				},
				// 4- DateLastCourse
				{
					title: '<span class="title">Son Eğitim Tarihi</span>',
					data: 'DateLastCourse',
					class: 'column-md column-center column-DateLastCourse',
					orderable: true,
					searchable: true
				},
				// 5- DegreeBest
				{
					title: '<span class="title">En İyi Derece</span>',
					data: 'DegreeBest',
					class: 'column-md column-center column-DegreeBest',
					orderable: true,
					searchable: true
				},
				// 6- DegreeWorst
				{
					title: '<span class="title">En Kötü Derece</span>',
					data: 'DegreeWorst',
					class: 'column-md column-center column-DegreeWorst',
					orderable: true,
					searchable: true
				},
				// 7- CountJoin
				{
					title: '<span class="title">Katılım Sayısı</span>',
					data: 'CountJoin',
					class: 'column-md column-center column-CountJoin',
					orderable: true,
					searchable: true
				},
			],
			columnDefs: [
				// 0- Control Buttons
				{
					targets: 0,
					render: function( data, type, row, meta ){
						var template =
						'<a href="" title="" target="_self" id="" class="btn btn-xs btn-primary btn-ghost btn-round btn-repeatCourse" type="button">'+
							'<i class="fa fa-undo btn-icon"></i>'+
						'</a>';
						return template;
					}
				},
				// 1- CertificateAvailable
				{
					targets: 1,
					render: function( data, type, row, meta ){
						var template = '';
						if( data != false ){
							template =
							'<a href="' + row.CertificateURL + '" title="" target="_self" id="" class="btn btn-xs btn-success btn-ghost btn-round btn-downloadCertificate" type="button">'+
								'<i class="fa fa-bookmark btn-icon"></i>'+
							'</a>';
						}
						return template;
					}
				},
				// 4- .btn-repeatCourse
				{
					targets: 4,
					render: function( data, type, row, meta ){
						var template = moment(data).format('DD.MM.YYYY');
						return template;
					}
				},
			],
			order: [
				[3, 'asc']
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
		// Rendering Template
		$('#renderUserInformations').Handle({
			source: $('#templateUserInformations'),
			data: _Model,
			append: false,
			prepend: false,
			callback: function(){
				DataTables(_Model.ListCoursesPast)
			}
		});

		/*
		Event Handlers
		*/
		$('body').on('click', '.btn-repeatCourse', function(e){
			e.preventDefault();
			var table = $('#tableCoursePast').DataTable();
			var tableRow = table.row( $(this).closest('tr') );
			var tableRowData = tableRow.data();
			var data = tableRowData;
			// Rendering Template - modalRepeatCourse
			$('#renderModalRepeatCourse').Handle({
				source: $('#templateModalRepeatCourse'),
				data: data,
				append: false,
				prepend: false,
				callback: function(){
					$('#modalRepeatCourse').modal('show');
				}
			});
		});
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
