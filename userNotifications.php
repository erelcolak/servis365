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
								<i class="fa fa-info-circle partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">KULLANICI BİLDİRİMLERİ</span>
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
																<span class="form-group-header-title-text">BİLDİRİMLER</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- tableUserNotifications table start -->
													<div id="" class="col-md-12 form-item table-container">
														<table id="tableUserNotifications" class="dataTable table table-bordered table-hover" cellspacing="0" width="100%"></table>
													</div>
													<!-- tableUserNotifications table end -->

												</div>
											</div>

										</div>
									</div>
									<!-- form group end -->

									<!-- templateNotificationContent handlebars template start -->
									<script id="templateNotificationContent" type="text/x-handlebars-template">

										<!-- form group start -->
										<div id="" class="col-md-12 form-group">
											<div id="" class="row">

												<div id="" class="col-md-12 form-group-header">
													<div id="" class="row">

														<div id="" class="col-md-9 form-group-header-informations">
															<div id="" class="row">

																<div id="" class="col-md-12 form-group-header-title">
																	<i class="fa fa-envelope-o form-group-header-title-icon"></i>
																	<span class="form-group-header-title-text">{{Subject}}</span>
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
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">GÖNDEREN</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{Sender}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">TARİH</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{HelperDate Date}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">İÇERİK</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{Content}}
																</div>

															</div>
														</div>
														<!-- form item end -->

													</div>
												</div>

											</div>
										</div>
										<!-- form group end -->

									</script>
									<!-- templateNotificationContent handlebars template end -->
									<!-- renderNotificationContent handlebars render start -->
									<div id="renderNotificationContent" class="render-template"></div>
									<!-- renderNotificationContent handlebars render end -->

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
	var _URLGetMessageContent = '';

	/*
	###
	Variables
	###
	*/
	var _Model = [
		{
			Id: 1,
			Date: '/Date(1530466347310)',
			Sender: 'Sistem',
			Subject: 'Yeni Eğitim Açıldı',
			Status: 1
		},
		{
			Id: 2,
			Date: '/Date(1530466347310)',
			Sender: 'Sistem',
			Subject: 'Yeni Eğitim Açıldı',
			Status: 2
		},
		{
			Id: 3,
			Date: '/Date(1530466347310)',
			Sender: 'Sistem',
			Subject: 'Yeni Eğitim Açıldı',
			Status: 3
		},
	];

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

	// datatables
	function DataTables(data){
		var table = $('#tableUserNotifications').DataTable({
			data: data,
			columns: [
				// 0- Date
				{
					title: '<span class="title">Tarih</span>',
					data: 'Date',
					class: 'column-xs column-center column-Date',
					orderable: true,
					searchable: true
				},
				// 1- Sender
				{
					title: '<span class="title">Gönderen</span>',
					data: 'Sender',
					class: 'column-sm column-center column-Sender',
					orderable: false,
					searchable: false
				},
				// 2- Subject
				{
					title: '<span class="title">Konu</span>',
					data: 'Subject',
					class: ' column-Subject',
					orderable: false,
					searchable: false
				},
				// 3- Status
				{
					title: '<span class="title">Durum</span>',
					data: 'Status',
					class: 'column-xs column-center column-Status',
					orderable: false,
					searchable: false
				},
			],
			columnDefs: [
				// 0- Date
				{
					targets: 0,
					render: function( data, type, row, meta ){
						var template = moment(data).format('DD.MM.YYYY');
						return template;
					}
				},
				// 3- Status
				{
					targets: 3,
					render: function( data, type, row, meta ){
						var iconClass = 'check color-success';
						if( data == 2 ){
							iconClass = 'info-circle color-primary';
						}
						else if( data == 3 ){
							iconClass = 'exclamation-triangle color-danger';
						}
						var template = '<i class="fa fa-' + iconClass + '"></i>';
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
		$('body').on('click', '#tableUserNotifications tbody tr', function(e){
			var table = $('#tableUserNotifications').DataTable();
			var tableRow = table.row( $(this) );
			var tableData = tableRow.data();

			var queryData = tableRow.Id;
			// Ajax Query - Get Message Content
			$.ajax({
				// url: _URLGetMessageContent + queryData,
				type: 'POST',
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
					var data = {
						Id: 1,
						Sender: 'Sistem',
						Subject: 'Yeni Eğitim Açıldı',
						Date: '/Date(1530466347310)',
						Content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
					};

					// Rendering Template
					$('#renderNotificationContent').Handle({
						source: $('#templateNotificationContent'),
						data: data,
						append: false,
						prepend: false,
						callback: function(){
							var table = $('#tableUserNotifications').DataTable();
							table.columns.adjust().draw()
						}
					});
					Loading(false);
				}
			});
		})

	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
