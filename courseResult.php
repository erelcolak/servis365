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
								<i class="fa fa-check partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">EĞİTİM SONUCU</span>
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
																<span class="form-group-header-title-text">SONUÇ</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- templateCourseResult handlebars template start -->
													<script id="templateCourseResult" type="text/x-handlebars-template">

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
														<div id="UserName" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">KATILIMCI</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{UserName}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="CourseDuration" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">TOPLAM EĞİTİM SÜRESİ</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{HelperDuration CourseDuration}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="SuccessPercent" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">TEST BAŞARI ORANI</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{HelperPercent SuccessPercent}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="CourseResult" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">EĞİTİM SONUCU</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{CourseResult}}
																</div>

															</div>
														</div>
														<!-- form item end -->

													</script>
													<!-- templateCourseResult handlebars template end -->
													<!-- renderCourseResult handlebars render start -->
													<div id="renderCourseResult" class="render-template"></div>
													<!-- renderCourseResult handlebars render end -->

												</div>
											</div>

										</div>
									</div>
									<!-- form group end -->

								</div>
							</div>
							<div id="" class="col-md-12 form-group-container-footer">
								<a href="courseInformation.php" title="" target="_self" id="" class="btn btn-default btn-left" type="button">
									<span class="btn-text">EĞİTİMİ TEKRARLA</span>
								</a>
								<a href="userProfile.php" title="" target="_self" id="" class="btn btn-default " type="button">
									<span class="btn-text">PROFİL</span>
								</a>
								<a href="" title="" target="_self" id="" class="btn btn-success " type="button">
									<span class="btn-text">SERTİFİKAYI İNDİR</span>
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
		Name: 'Genel Bakım Prosedürleri',
		UserName: 'Arif Denizgezen',
		CourseDuration: {
			Minutes: 21,
			Seconds: 13
		},
		SuccessPercent: 92,
		CourseResult: 'Başarılı',
		CertificateURL: '#',
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
		$('#renderCourseResult').Handle({
			source: $('#templateCourseResult'),
			data: _Model,
			append: false,
			prepend: false,
			callback: function(){}
		});

		/*
		Event Handlers
		*/
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
