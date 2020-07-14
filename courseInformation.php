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
								<i class="fa fa-graduation-cap partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">EĞİTİM BİLGİLERİ</span>
							</div>
							<div id="" class="col-md-12 partbox-header-subtitle">

							</div>

						</div>
					</div>
					<div id="" class="col-md-3 partbox-header-controls">
						<a href="" title="" target="_self" id="btnGoToList" class="btn btn-primary " type="button">
							<span class="btn-text">EĞİTİMLER</span>
						</a>
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
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- templateCourseInformation handlebars template start -->
													<script id="templateCourseInformation" type="text/x-handlebars-template">

														<!-- form item start -->
														<div id="Name" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">EĞİTİM ADI</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{Name}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="Description" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">GENEL BİLGİLER</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{Description}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="Level" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">SEVİYE</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{Level}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="Date" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">YAYINLANMA TARİHİ</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{HelperDate Date}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="PreparedBy" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">HAZIRLAYAN</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{PreparedBy}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="PresentedBy" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">SUNAN</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{PresentedBy}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="Duration" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">ÖNGÖRÜLEN EĞİTİM SÜRESİ</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{HelperDuration Duration}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="MinimumSuccessPercent" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">MİNİMUM BAŞARI KOŞULU</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{HelperPercent MinimumSuccessPercent}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="Rate" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">KULLANICI DEĞERLENDİRMELERİ</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{{HelperStarRate Rate}}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														{{#if CoursesPast}}
														<!-- form item start -->
														<div id="CoursesPast" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">ÖNCEKİ ALINAN EĞİTİMLER</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	<div id="" class="row">

																		<!-- form group start -->
																		<div id="" class="col-md-12 form-group form-group-inner">
																			<div id="" class="box-border">
																				<div id="" class="row">

																					<div id="" class="col-md-12 form-group-body">
																						<div id="" class="row">

																							<!-- list items container start -->
																							<div id="" class="col-md-12 list-items-container scrollspy">
																								<div id="" class="row">

																									{{#each CoursesPast}}
																										<!-- list item start -->
																										<div id="" class="col-md-12 list-item">
																											<div id="" class="list-item-content">
																												<div id="" class="list-item-body">
																													<div><span class="value">Tarih</span><span class="unit">{{HelperDate Date}}</span></div>
																													<div><span class="value">Not</span><span class="unit">{{HelperPercent Performance}}</span></div>
																												</div>
																											</div>
																										</div>
																										<!-- list item end -->
																									{{/each}}

																								</div>
																							</div>
																							<!-- list items container end -->

																						</div>
																					</div>

																				</div>
																			</div>
																		</div>
																		<!-- form group end -->


																	</div>
																</div>

															</div>
														</div>
														<!-- form item end -->
														{{/if}}

													</script>
													<!-- templateCourseInformation handlebars template end -->
													<!-- renderCourseInformation handlebars render start -->
													<div id="renderCourseInformation" class="render-template"></div>
													<!-- renderCourseInformation handlebars render end -->

												</div>
											</div>

										</div>
									</div>
									<!-- form group end -->

								</div>
							</div>
							<div id="" class="col-md-12 form-group-container-footer">
								<a href="course.php" title="" target="_self" id="btnNextStep" class="btn btn-success " type="button">
									<span class="btn-text">EĞİTİME BAŞLA</span>
								</a>
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
<!-- external scripts end -->
<!-- internal scripts start -->
<script type="text/javascript">
	/*
	###
	Request URL's & Data Variables
	###
	*/
	var _URLActionGoToList = 'courseList.php';

	/*
	###
	Variables
	###
	*/
	// Global Model
	var _Model = {
		Id: 5,
		Code: 'G-01',
		Name: 'Genel davranış ve çalışma prensipleri',
		Description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		Level: 'Basit',
		Date: '/Date(1530466347310)',
		Duration: {
			Minutes: 24,
			Seconds: 12
		},
		MinimumSuccessPercent: 84,
		Rate: 3.2,
		ImageURL: 'img/empty/empty.jpg',
		PreparedBy: 'Songül Balcı',
		PresentedBy: 'Songül Balcı',
		IsCompleted: false,
		CoursesPast: [
			{
				Id: 1,
				Date: '/Date(1530466347310)',
				Performance: 84,
			},
			{
				Id: 2,
				Date: '/Date(1530466347310)',
				Performance: 77,
			},
			{
				Id: 3,
				Date: '/Date(1530466347310)',
				Performance: 43,
			},
		]
	}

	/*
	###
	Functions
	###
	*/
	// Action Control Buttons Href's
	$('#btnGoToList').attr('href', _URLActionGoToList)

	// Set & Show Active Section

	/*
	###
	Handlebars Functions & Helpers & Partials
	###
	*/
	// Rendering Template
	Handlebars.registerHelper('HelperDate', function(data, options){
		var val = moment(data).format('DD.MM.YYYY');
		return val;
	});
	Handlebars.registerHelper('HelperPercent', function(data, options){
		var unit = '%';
		var val = data + ' ' + unit;
		return val;
	});
	Handlebars.registerHelper('HelperDuration', function(data, options){
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
	Handlebars.registerHelper('HelperStarRate', function(data, options){
		var starCount = 5;
		var template = '';
		var data = Math.round(data)
		for( var i = 0; i < data; i++ ){
			template += '<i class="fa fa-star color-warning"></i>';
		}
		for( var i = 0; i < starCount - data; i++ ){
			template += '<i class="fa fa-star-o"></i>'
		}
		return template;
	});
	// Rendering Template
	$('#renderCourseInformation').Handle({
		source: $('#templateCourseInformation'),
		data: _Model,
		append: false,
		prepend: false,
		callback: function(){
			$('.img-lazy').lazyload();
		}
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

		/*
		Event Handlers
		*/
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
