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
								<i class="fa fa-pie-chart partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">GENEL İSTATİSTİKLER</span>
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
																<span class="form-group-header-title-text">İSTATİSTİKLER</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- templateStatsGeneral handlebars template start -->
													<script id="templateStatsGeneral" type="text/x-handlebars-template">

														<!-- form item start -->
														<div id="TotalCourseGroupCount" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">TOPLAM EĞİTİM GRUPLARI SAYISI</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{TotalCourseGroupCount}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="TotalCourseCount" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">TOPLAM EĞİTİM SAYISI</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{TotalCourseCount}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="TotalCourseTime" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">TOPLAM EĞİTİMLERİN SÜRESİ</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{#if TotalCourseTime.Days}}{{TotalCourseTime.Days}} Gün{{/if}} {{#if TotalCourseTime.Minutes}}{{TotalCourseTime.Minutes}} Dakika{{/if}} {{#if TotalCourseTime.Seconds}}{{TotalCourseTime.Seconds}} Saniye{{/if}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="ActiveTeacherCount" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">AKTİF EĞİTMEN SAYISI</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{ActiveTeacherCount}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="ActiveStudentCount" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">AKTİF ÖĞRENCİ SAYISI</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{ActiveStudentCount}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="TotalCourseTimeWatched" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">ÖĞRENCİLERİN ALDIĞI TOPLAM EĞİTİM SÜRESİ</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{#if TotalCourseTimeWatched.Days}}{{TotalCourseTimeWatched.Days}} Gün{{/if}} {{#if TotalCourseTimeWatched.Minutes}}{{TotalCourseTimeWatched.Minutes}} Dakika{{/if}} {{#if TotalCourseTimeWatched.Seconds}}{{TotalCourseTimeWatched.Seconds}} Saniye{{/if}}
																</div>

															</div>
														</div>
														<!-- form item end -->
														<!-- form item start -->
														<div id="AveragePerformance" class="col-md-12 form-item">
															<div id="" class="row">

																<div id="" class="col-md-4 form-item-informations">
																	<div for="" class="form-item-title">ORTALAMA BAŞARI DERECESİ</div>
																	<div id="" class="form-item-description"></div>
																</div>
																<div id="" class="col-md-8 form-item-inputs">
																	{{HelperPercent AveragePerformance}}
																</div>

															</div>
														</div>
														<!-- form item end -->

													</script>
													<!-- templateStatsGeneral handlebars template end -->
													<!-- renderStatsGeneral handlebars render start -->
													<div id="renderStatsGeneral" class="render-template"></div>
													<!-- renderStatsGeneral handlebars render end -->

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
	var _Model = {
		TotalCourseGroupCount: 12,
		TotalCourseCount: 54,
		TotalCourseTime: {
			Days: 11,
			Minutes: 56,
			Seconds: 28
		},
		ActiveTeacherCount: 8,
		ActiveStudentCount: 93,
		TotalCourseTimeWatched: {
			Days: null,
			Minutes: 56,
			Seconds: 28
		},
		AveragePerformance: 87
	}

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
	Handlebars.registerHelper('HelperPercent', function(data){
		var val = data + ' ' + '%';
		return val;
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
		$('#renderStatsGeneral').Handle({
			source: $('#templateStatsGeneral'),
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
