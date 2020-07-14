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
								<i class="fa fa-file-o partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">ÖĞRENCİ İŞLERİ</span>
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
																<span class="form-group-header-title-text">ÖĞRENCİ LİSTESİ</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- tableUsers table start -->
													<div id="" class="col-md-12 form-item table-container">
														<table id="tableUsers" class="dataTable table table-bordered table-hover" cellspacing="0" width="100%"></table>
													</div>
													<!-- tableUsers table end -->

												</div>
											</div>

										</div>
									</div>
									<!-- form group end -->
									<!-- templateCoursePast handlebars template start -->
									<script id="templateCoursePast" type="text/x-handlebars-template">

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

									</script>
									<!-- templateCoursePast handlebars template end -->
									<!-- renderCoursePast handlebars render start -->
									<div id="renderCoursePast" class="render-template"></div>
									<!-- renderCoursePast handlebars render end -->

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
<div id="modalUserEdit" class="modal fade" role="dialog">
	<div id="" class="modal-dialog">
		<div id="" class="modal-content">

			<div id="" class="modal-header">
				<div id="" class="row">

					<div id="" class="col-md-9 modal-header-informations">
						<div id="" class="row">

							<div id="" class="col-md-12 modal-header-title">
								<i class="fa fa-user modal-header-title-icon"></i>
								<span class="modal-header-title-text">KULLANICI BİLGİLERİ</span>
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
										<div id="" class="col-md-12 form-group-body">
											<div id="" class="row">

												<!-- templateUserEdit handlebars template start -->
												<script id="templateUserEdit" type="text/x-handlebars-template">

													<!-- form item start -->
													<div id="ImageURL" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">FOTOĞRAF</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<img src="{{#if ImageURL}}{{ImageURL}}{{else}}img/empty/empty.jpg{{/if}}" title="" alt="" id="" class="img img-responsive ">
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="Name" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">AD SOYAD</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<input type="text" id="" name="" class="form-control " value="{{Name}}" placeholder="" />
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="Email" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">E-POSTA</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<input type="text" id="" name="" class="form-control " value="{{Email}}" placeholder="" />
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="Password" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">ŞİFRE</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<input type="text" id="" name="" class="form-control " value="{{Password}}" placeholder="" />
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="JobTitle" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">GÖREV</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<select id="" name="" class="form-control" value="" >
																	<option id="" value=""></option>
																</select>
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="UserType" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">KULLANICI TİPİ</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<select id="" name="" class="form-control" value="" >
																	<option id="" value=""></option>
																</select>
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="UserGroup" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">KULLANICI GROUP</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<select id="" name="" class="form-control" value="" >
																	<option id="" value=""></option>
																</select>
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="UserId" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">KULLANICI ID</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<input type="text" id="" name="" class="form-control " value="{{UserId}}" placeholder="" />
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="Status" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">DURUM</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<select id="" name="" class="form-control" value="" >
																	<option id="" value=""></option>
																</select>
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="AssignedCourseGroups" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">ATANMIŞ EĞİTİM GRUPLARI</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<select id="" name="" class="form-control" value="" >
																	<option id="" value=""></option>
																</select>
															</div>

														</div>
													</div>
													<!-- form item end -->

												</script>
												<!-- templateUserEdit handlebars template end -->
												<!-- renderUserEdit handlebars render start -->
												<div id="renderUserEdit" class="render-template"></div>
												<!-- renderUserEdit handlebars render end -->

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
							<a href="" title="" target="_self" id="btnSaveUser" class="btn btn-success " type="button">
								<span class="btn-text">KAYDET</span>
							</a>
						</div>

					</div>
				</div>
				<!-- form group container end -->
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</div>
<!-- modal end -->
<!-- modal start -->
<div id="modalCourseRequest" class="modal fade" role="dialog">
	<div id="" class="modal-dialog">
		<div id="" class="modal-content">

			<div id="" class="modal-header">
				<div id="" class="row">

					<div id="" class="col-md-9 modal-header-informations">
						<div id="" class="row">

							<div id="" class="col-md-12 modal-header-title">
								<i class="fa fa-graduation-cap modal-header-title-icon"></i>
								<span class="modal-header-title-text">EĞİTİM TALEBİ</span>
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
															<span class="form-group-header-title-text">TALEP BİLGİLERİ</span>
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
															<div for="" class="form-item-title">EĞİTİM GRUBU SEÇİNİZ</div>
															<div id="" class="form-item-description"></div>
														</div>
														<div id="" class="col-md-8 form-item-inputs">
															<select id="" name="" class="form-control" value="" >
																<option id="" value=""></option>
															</select>
														</div>

													</div>
												</div>
												<!-- form item end -->
												<!-- form item start -->
												<div id="" class="col-md-12 form-item">
													<div id="" class="row">

														<div id="" class="col-md-4 form-item-informations">
															<div for="" class="form-item-title">EĞİTİM SEÇİNİZ</div>
															<div id="" class="form-item-description"></div>
														</div>
														<div id="" class="col-md-8 form-item-inputs">
															<select id="" name="" class="form-control" value="" >
																<option id="" value=""></option>
															</select>
														</div>

													</div>
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
							<a href="" title="" target="_self" id="btnSendCourseRequest" class="btn btn-success " type="button">
								<span class="btn-text">KAYDET</span>
							</a>
						</div>

					</div>
				</div>
				<!-- form group container end -->
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</div>
<!-- modal end -->
<!-- modal start -->
<div id="modalOutterCourseRequest" class="modal fade" role="dialog">
	<div id="" class="modal-dialog">
		<div id="" class="modal-content">

			<div id="" class="modal-header">
				<div id="" class="row">

					<div id="" class="col-md-9 modal-header-informations">
						<div id="" class="row">

							<div id="" class="col-md-12 modal-header-title">
								<i class="fa fa-graduation-cap modal-header-title-icon"></i>
								<span class="modal-header-title-text">SİSTEM DIŞI EĞİTİM KAYDI</span>
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
															<span class="form-group-header-title-text">SİSTEM DIŞI EĞİTİM KAYDI BİLGİLERİ</span>
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
															<div for="" class="form-item-title">EĞİTİM GRUBU SEÇİNİZ</div>
															<div id="" class="form-item-description"></div>
														</div>
														<div id="" class="col-md-8 form-item-inputs">
															<select id="" name="" class="form-control" value="" >
																<option id="" value=""></option>
															</select>
														</div>

													</div>
												</div>
												<!-- form item end -->
												<!-- form item start -->
												<div id="" class="col-md-12 form-item">
													<div id="" class="row">

														<div id="" class="col-md-4 form-item-informations">
															<div for="" class="form-item-title">EĞİTİM SEÇİNİZ</div>
															<div id="" class="form-item-description"></div>
														</div>
														<div id="" class="col-md-8 form-item-inputs">
															<select id="" name="" class="form-control" value="" >
																<option id="" value=""></option>
															</select>
														</div>

													</div>
												</div>
												<!-- form item end -->
												<!-- form item start -->
												<div id="" class="col-md-12 form-item">
													<div id="" class="row">

														<div id="" class="col-md-4 form-item-informations">
															<div for="" class="form-item-title">TEST BAŞARI ORANI GİRİNİZ</div>
															<div id="" class="form-item-description"></div>
														</div>
														<div id="" class="col-md-8 form-item-inputs">
															<input type="text" id="" name="" class="form-control " value="" placeholder="" />
														</div>

													</div>
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
							<a href="" title="" target="_self" id="btnSendCourseRequest" class="btn btn-success " type="button">
								<span class="btn-text">KAYDET</span>
							</a>
						</div>

					</div>
				</div>
				<!-- form group container end -->
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

	/*
	###
	Variables
	###
	*/
	var _Model = [
		{
			Id: 1,
			Name: 'Anıl Denizgezen',
			UserType: 'Öğrenci',
			UserGroup: 'Elektrik Teknikeri',
			Status: true,
			LastLoginDate: '/Date(1530466347310)',
			TotalCourseCount: 15,
			AveragePerformance: 92,
		},
		{
			Id: 2,
			Name: 'Ahmet Hayat',
			UserType: 'Öğrenci',
			UserGroup: 'Elektrik Teknikeri',
			Status: true,
			LastLoginDate: '/Date(1530466347310)',
			TotalCourseCount: 15,
			AveragePerformance: 92,
		}
	];

	/*
	###
	Functions
	###
	*/
	function DataTables(data){
		var table = $('#tableUsers').DataTable({
			data: data,
			columns: [
				// 0- Select
				{
					title:
						'<span class="title">'+
							'<label id="" class="form-item-label checkbox label-block">'+
								'<input type="checkbox" id="" name="" class="" value="" />'+
								'<span class="label-icon "></span>'+
								'<span class="label-text hidden">Seçim</span>'+
							'</label>'+
						'</span><span class="subtitle"></span>',
					data: null,
					class: 'column-xs column-center control-buttons column-select',
					orderable: false,
					searchable: false
				},
				// 1- Id
				{
					title: '<span class="title">Id</span><span class="subtitle"></span>',
					data: 'Id',
					class: 'column-xs column-center column-Id',
					orderable: false,
					searchable: false
				},
				// 2- Name
				{
					title: '<span class="title">Kullanıcı Adı</span><span class="subtitle"> </span>',
					data: 'Name',
					class: ' column-Name',
					orderable: true,
					searchable: true
				},
				// 3- UserType
				{
					title: '<span class="title">Kullanıcı</span><span class="subtitle"> Tipi</span>',
					data: 'UserType',
					class: 'column-sm column-center column-UserType',
					orderable: false,
					searchable: false
				},
				// 4- UserGroup
				{
					title: '<span class="title">Kullanıcı</span><span class="subtitle"> Grubu</span>',
					data: 'UserGroup',
					class: 'column-sm column-center column-UserGroup',
					orderable: false,
					searchable: false
				},
				// 5- Status
				{
					title: '<span class="title">Durum</span><span class="subtitle"> </span>',
					data: 'Status',
					class: 'column-xs column-center column-Status',
					orderable: false,
					searchable: false
				},
				// 6- LastLoginDate
				{
					title: '<span class="title">Son Giriş</span><span class="subtitle"> Tarihi</span>',
					data: 'LastLoginDate',
					class: 'column-sm column-center column-LastLoginDate',
					orderable: false,
					searchable: false
				},
				// 7- TotalCourseCount
				{
					title: '<span class="title">Toplam Eğitim</span><span class="subtitle"> Sayısı</span>',
					data: 'TotalCourseCount',
					class: 'column-sm column-center column-TotalCourseCount',
					orderable: false,
					searchable: false
				},
				// 8- AveragePerformance
				{
					title: '<span class="title">Başarı</span><span class="subtitle"> Ortalaması</span>',
					data: 'AveragePerformance',
					class: 'column-sm column-center column-AveragePerformance',
					orderable: false,
					searchable: false
				},
			],
			columnDefs: [
				// 0- Select
				{
					targets: 0,
					render: function( data, type, row, meta ){
						return '';
					}
				},
				// 5- Status
				{
					targets: 5,
					render: function( data, type, row, meta ){
						var template = 'Aktif';
						if( data == false ){
							template = 'Pasif';
						}
						return template;
					}
				},
				// 6- LastLoginDate
				{
					targets: 6,
					render: function( data, type, row, meta ){
						var template = moment(data).format('DD.MM.YYYY');
						return template;
					}
				},
				// 8- AveragePerformance
				{
					targets: 8,
					render: function( data, type, row, meta ){
						var unit = '%'
						var template = data + ' ' + unit;
						return template;
					}
				},
			],
			order: [
				[1, 'asc']
			],
			select: {
				style: 'multi',
				selector: 'td.column-select',
			},
			buttons: [],
			drawCallback: function(){

			},
			initComplete: function(){
				if( $('thead .column-select').length > 0 ){
					$('thead .column-select').find('input').on('change', function(e){
						if( $(this).prop('checked') == true ){
							table.rows().select();
						}
						else{
							table.rows().deselect();
						}
					})
				}
			}
		});
	}
	function DataTablesUserCoursePast(data){
		var table = $('#tableCoursePast').DataTable({
			data: data,
			columns: [
				// 0-
				{
					title:
						'<span class="title">'+
							'<label id="" class="form-item-label checkbox label-block">'+
								'<input type="checkbox" id="" name="" class="" value="" />'+
								'<span class="label-icon "></span>'+
								'<span class="label-text hidden">Seçim</span>'+
							'</label>'+
						'</span><span class="subtitle"></span>',
					data: null,
					class: 'column-xs column-center control-buttons column-select column-select-course-past',
					orderable: false,
					searchable: false
				},
				// 1- Code
				{
					title: '<span class="title">Kod</span><span class="subtitle"></span>',
					data: 'Code',
					class: 'column-xs column-center column-Code',
					orderable: false,
					searchable: false
				},
				// 2- Title
				{
					title: '<span class="title">Eğitim Başlığı</span>',
					data: 'Title',
					class: ' column-Title',
					orderable: true,
					searchable: true
				},
				// 3- DateLastCourse
				{
					title: '<span class="title">Son Eğitim Tarihi</span>',
					data: 'DateLastCourse',
					class: 'column-md column-center column-DateLastCourse',
					orderable: true,
					searchable: true
				},
				// 4- DegreeBest
				{
					title: '<span class="title">En İyi Derece</span>',
					data: 'DegreeBest',
					class: 'column-md column-center column-DegreeBest',
					orderable: true,
					searchable: true
				},
				// 5- DegreeWorst
				{
					title: '<span class="title">En Kötü Derece</span>',
					data: 'DegreeWorst',
					class: 'column-md column-center column-DegreeWorst',
					orderable: true,
					searchable: true
				},
				// 6- CountJoin
				{
					title: '<span class="title">Katılım Sayısı</span>',
					data: 'CountJoin',
					class: 'column-md column-center column-CountJoin',
					orderable: true,
					searchable: true
				},
			],
			columnDefs: [
				// 0- Select
				{
					targets: 0,
					render: function( data, type, row, meta ){
						return '';
					}
				},
				// 3- DateLastCourse
				{
					targets: 3,
					render: function( data, type, row, meta ){
						var val = moment(data).format('DD.MM.YYYY');
						return val;
					}
				},
			],
			order: [
				[2, 'asc']
			],
			buttons: [
				{
					text: '<i class="fa fa-undo btn-icon"></i>',
					className: 'btn-default btn-reCourse',
					titleAttr: 'Seçilen eğitimleri yenileme talebi gönder',
					action: function(){

					}
				},
				{
					text: '<i class="fa fa-bookmark btn-icon"></i>',
					className: 'btn-default btn-createCertificate',
					titleAttr: 'Seçilenler için sertifika oluştur',
					action: function(){

					}
				},
				{
					text: '<i class="fa fa-print btn-icon"></i>',
					className: 'btn-default btn-print',
					titleAttr: 'Transkript Oluştur',
					action: function(){

					}
				},
				{
					text: '<i class="fa fa-plus btn-icon"></i>',
					className: 'btn-default btn-newOutterCourse',
					titleAttr: 'Dış eğitim kaydı girişi',
					action: function(){
						$('#modalOutterCourseRequest').modal('show');
					}
				},
				{
					text: '<i class="fa fa-info-circle btn-icon"></i>',
					className: 'btn-default btn-sendCourse',
					titleAttr: 'Eğitim talebi gönder',
					action: function(){
						$('#modalCourseRequest').modal('show');
					}
				},
			],
			select: {
				style: 'multi',
				selector: 'td.column-select',
			},
			drawCallback: function(){

			},
			initComplete: function(){
				if( $('thead column-select').length > 0 ){
					$('thead column-select').find('input').on('change', function(e){
						if( $(this).prop('checked') == true ){
							table.rows().select();
						}
						else{
							table.rows().deselect();
						}
					})
				}
			}
		});
	}

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
	Handlebars.registerHelper('HelperDuration', function(data, options){
		var minutes = '';
		var seconds = '';
		if( data.Minutes != null ){
			minutes = data.Minutes + ' saat';
		}
		if( data.Seconds != null ){
			seconds = data.Seconds + ' dakika';
		}
		var template = minutes + ' ' + seconds;
		return template;
	});

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
		$('body').on('click', '#tableUsers tbody tr td:not(.column-select)', function(e){
			var data = {
				Email: 'info@servis365.com',
				Name: 'Arif Denizgezen',
				JobTitle: 'Elektrik Teknikeri',
				NotificationsCountWaiting: 2,
				AccessDate: '/Date(1530466347310)',
				CourseCountComplete: 12,
				CourseCountSuccess: 10,
				CourseCountFail: 5,
				CourseDuration: {
					Minutes: 26,
					Seconds: 11
				},
				AveragePerformance: 81,
				Password: '123456',
				UserType: 'Öğrenci',
				UserGroup: 'Elektrik Teknikerleri',
				UserId: '88102',
				Status: 'Aktif',
				LastLoginDate: '/Date(1530466347310)',
				AssignedCourseGroups: 3,
				ListCoursePast: [
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
				]
			}
			// Rendering Template
			$('#renderCoursePast').Handle({
				source: $('#templateCoursePast'),
				data: data,
				append: false,
				prepend: false,
				callback: function(){
					$('#btnEditUser').data('model', data);
					DataTablesUserCoursePast(data.ListCoursePast)
					var table = $('#tableUsers').DataTable();
					table.columns.adjust();
				}
			});
		});
		// btnSaveUser on click
		$('#btnSaveUser').on('click', function(e){
			e.preventDefault();

		});
		// btnSendCourseRequest on click
		$('#btnSendCourseRequest').on('click', function(e){
			e.preventDefault();

		});
		// btnEditUser on click
		$('body').on('click', '#btnEditUser', function(e){
			e.preventDefault();
			var data = $(this).data('model')
			// Rendering Template
			$('#renderUserEdit').Handle({
				source: $('#templateUserEdit'),
				data: data,
				append: false,
				prepend: false,
				callback: function(){
					$('#modalUserEdit').modal('show');
				}
			});
		});
		$('body').on('shown.bs.tab', 'a[href="#tabUserCoursePast"]', function(){
			var table = $('#tableCoursePast').DataTable();
			table.columns.adjust()
		});
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
