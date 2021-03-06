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
								<span class="partbox-header-title-text">EĞİTİMLER</span>
							</div>
							<div id="" class="col-md-12 partbox-header-subtitle">

							</div>

						</div>
					</div>
					<div id="" class="col-md-3 partbox-header-controls">
						<a href="" title="" target="_self" id="btnGoToList" class="btn btn-primary " type="button">
							<span class="btn-text">TÜM EĞİTİMLER</span>
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

									<!-- templateCourseList handlebars template start -->
									<script id="templateCourseList" type="text/x-handlebars-template">

										<!-- form group start -->
										<div id="" class="col-md-12 form-group" data-id="{{Id}}">
											<div id="" class="row">

												<div id="" class="col-md-12 form-group-header">
													<div id="" class="row">

														<div id="" class="col-md-9 form-group-header-informations">
															<div id="" class="row">

																<div id="" class="col-md-12 form-group-header-title">
																	<span class="form-group-header-title-text"><a href="{{CourseCategoryURL}}" title="" target="_self" id="" class="">{{CourseCategoryName}}</a></span>
																</div>

															</div>
														</div>
														<div id="" class="col-md-3 form-group-header-controls">

														</div>

													</div>
												</div>
												<div id="" class="col-md-12 form-group-body">
													<div id="" class="row">

														<!-- card container start -->
														<div id="" class="col-md-12 card-container">
															{{#each Courses}}
																<!-- card start -->
																<div id="" class="col-md-3 card" data-id="{{Id}}">
																	<div class="box-border">
																		<div class="row">

																			<div id="" class="col-md-12 card-header">
																				<div class="row">

																					<div id="" class="col-md-12 card-header-cover">
																						<div id="" class="row">

																							<img src="{{ImageURL}}" title="" alt="" id="" class="img img-responsive card-header-cover-image img-lazy" />

																						</div>
																					</div>
																					<div id="" class="col-md-12 card-header-title">
																						<div id="" class="row">

																							<div id="" class="col-md-12 card-title">{{Code}} - {{Name}}</div>
																							<div id="" class="col-md-12 card-subtitle"><span class="value">Hazırlayan</span><span class="unit">{{PreparedBy}}</span></div>
																							<div id="" class="col-md-12 card-subtitle"><span class="value">Sunan</span><span class="unit">{{PresentedBy}}</span></div>

																						</div>
																					</div>
																				</div>
																			</div>
																			<div id="" class="col-md-12 card-footer">
																				{{#HelperCourseStartButton IsCompleted URL}}
																					<a href="{{URL}}" title="" target="_self" id="" class="btn btn-xs btn-primary btn-ghost " type="button">
																						<span class="btn-text">EĞİTİME BAŞLA</span>
																					</a>
																				{{else}}
																					<a href="{{URL}}" title="" target="_self" id="" class="btn btn-xs btn-default btn-ghost " type="button">
																						<span class="btn-text">YENİDEN EĞİTİM AL</span>
																					</a>
																				{{/HelperCourseStartButton}}
																			</div>

																		</div>
																	</div>
																</div>
																<!-- card end -->
															{{/each}}
														</div>
														<!-- card container end -->

													</div>
												</div>

											</div>
										</div>
										<!-- form group end -->

									</script>
									<!-- templateCourseList handlebars template end -->
									<!-- renderCourseList handlebars render start -->
									<div id="renderCourseList" class="render-template"></div>
									<!-- renderCourseList handlebars render end -->

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
<script src="js/plugins/lazyload/js/lazyload.min.js"></script>
<link rel="stylesheet" href="js/plugins/owlcarousel/css/owl.carousel.css">
<script src="js/plugins/owlcarousel/js/owl.carousel.min.js"></script>
<!-- external scripts end -->
<!-- internal scripts start -->
<script type="text/javascript">
	/*
	###
	Request URL's & Data Variables
	###
	*/
	var _URLActionGoToList = 'coursesList.php';

	/*
	###
	Variables
	###
	*/
	// Global Model
	var _Model = {
		Id: 1,
		CourseCategoryName: 'GENEL EĞİTİMLER',
		CourseCategoryURL: '/courseList.php/',
		Courses: [
			{
				Id: 1,
				Code: 'G-01',
				Name: 'Genel davranış ve çalışma prensipleri',
				ImageURL: 'img/empty/empty.jpg',
				PreparedBy: 'Songül Balcı',
				PresentedBy: 'Songül Balcı',
				IsCompleted: false,
				URL: 'courseInformation.php'
			},
			{
				Id: 2,
				Code: 'G-01',
				Name: 'Genel davranış ve çalışma prensipleri',
				ImageURL: 'img/empty/empty.jpg',
				PreparedBy: 'Songül Balcı',
				PresentedBy: 'Songül Balcı',
				IsCompleted: true,
				URL: 'courseInformation.php'
			},
			{
				Id: 3,
				Code: 'G-01',
				Name: 'Genel davranış ve çalışma prensipleri',
				ImageURL: 'img/empty/empty.jpg',
				PreparedBy: 'Songül Balcı',
				PresentedBy: 'Songül Balcı',
				IsCompleted: false,
				URL: 'courseInformation.php'
			},
			{
				Id: 4,
				Code: 'G-01',
				Name: 'Genel davranış ve çalışma prensipleri',
				ImageURL: 'img/empty/empty.jpg',
				PreparedBy: 'Songül Balcı',
				PresentedBy: 'Songül Balcı',
				IsCompleted: true,
				URL: 'courseInformation.php'
			},
			{
				Id: 5,
				Code: 'G-01',
				Name: 'Genel davranış ve çalışma prensipleri',
				ImageURL: 'img/empty/empty.jpg',
				PreparedBy: 'Songül Balcı',
				PresentedBy: 'Songül Balcı',
				IsCompleted: false,
				URL: 'courseInformation.php'
			},
		]
	}

	/*
	###
	Functions
	###
	*/
	// Action Control Buttons Href's
	$('#btnGoToList').attr('href', _URLActionGoToList);
	// Set & Show Active Section

	/*
	###
	Handlebars Functions & Helpers & Partials
	###
	*/
	// Rendering Template
	Handlebars.registerHelper('HelperCourseStartButton', function(IsCompleted, URL, options){
		if( IsCompleted == false ){
			return options.fn(this);
		}
		else{
			return options.inverse(this);
		}
	});
	// Rendering Template
	$('#renderCourseList').Handle({
		source: $('#templateCourseList'),
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
