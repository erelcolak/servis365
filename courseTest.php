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
								<i class="fa fa-check-square-o partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">EĞİTİM SONRASI DEĞERLENDİRME</span>
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

									<!-- templateCourseTest handlebars template start -->
									<script id="templateCourseTest" type="text/x-handlebars-template">

										<!-- form group start -->
										<div id="" class="col-md-12 form-group">
											<div id="" class="row">

												<div id="" class="col-md-12 form-group-header">
													<div id="" class="row">

														<div id="" class="col-md-9 form-group-header-informations">
															<div id="" class="row">

																<div id="" class="col-md-12 form-group-header-title">
																	<span class="form-group-header-title-text">{{Name}}</span>
																</div>

															</div>
														</div>
														<div id="counterContainer" class="col-md-3 form-group-header-controls">
															<a href="" title="" target="_self" id="btnCounter" class="btn btn-default btn-ghost" type="button">
																<span class="btn-text"></span>
															</a>
														</div>

													</div>
												</div>
												<div id="courseTestQuestions" class="col-md-12 form-group-body">
													<div id="" class="row">

														{{#each Test}}
															<!-- form item start -->
															<div id="" class="col-md-12 form-item">
																<div id="" class="row">

																	<div id="" class="col-md-12 form-item-informations">
																		<div for="" class="form-item-title">{{Question}}</div>
																		<div id="" class="form-item-description"></div>
																	</div>
																	<div id="" class="col-md-12 form-item-inputs">
																		{{#each Answers}}
																			<label id="" class="form-item-label radio label-block" data-answer-option-id="{{Id}}" data-question-id="{{../Id}}">
																				<input type="radio" id="" name="courseTest{{../Id}}" class="" value="" />
																				<span class="label-icon "></span>
																				<span class="label-text">{{Option}}</span>
																			</label>
																		{{/each}}
																	</div>

																</div>
															</div>
															<!-- form item end -->
														{{/each}}

													</div>
												</div>

											</div>
										</div>
										<!-- form group end -->

									</script>
									<!-- templateCourseTest handlebars template end -->
									<!-- renderCourseTest handlebars render start -->
									<div id="renderCourseTest" class="render-template"></div>
									<!-- renderCourseTest handlebars render end -->

								</div>
							</div>
							<div id="" class="col-md-12 form-group-container-footer">
								<a href="courseResult.php" title="" target="_self" id="btnNextStep" class="btn btn-success " type="button">
									<span class="btn-text">İLERİ</span>
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
<script src="js/alert/course/courseTest.js"></script>
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
		Id: 'G-01',
		UserIdx: '12',
		Name: 'Genel Bakım Prosedürleri',
		Test: [
			{
				Id: '01',
				Question: 'Aşağıdaki davranışlardan hangisi doğrudur?',
				Answers: [
					{
						Id: '0101',
						Option: 'Bakıma 15 dakikaya kadar geç kalsam bir şey olmaz.'
					},
					{
						Id: '0102',
						Option: 'Bakım formunu Ipad üzerinde doldurma zorunluluğu yoktur.'
					},
					{
						Id: '0103',
						Option: 'Bakımlara her zaman firma tarafından verilen iş kıyafetleri ile gelmek zorunludur.'
					},
					{
						Id: '0104',
						Option: 'Mağaza açıldıktan sonra bakımlara, işimiz bitene kadar devam edebiliriz'
					}
				]
			},
			{
				Id: '02',
				Question: 'Aşağıdaki davranışlardan hangisi yanlıştır?',
				Answers: [
					{
						Id: '0201',
						Option: 'Bakıma 15 dakikaya kadar geç kalsam bir şey olmaz.'
					},
					{
						Id: '0202',
						Option: 'Bakım formunu Ipad üzerinde doldurma zorunluluğu yoktur.'
					},
					{
						Id: '0203',
						Option: 'Bakımlara her zaman firma tarafından verilen iş kıyafetleri ile gelmek zorunludur.'
					},
					{
						Id: '0204',
						Option: 'Mağaza açıldıktan sonra bakımlara, işimiz bitene kadar devam edebiliriz'
					}
				]
			},
			{
				Id: '03',
				Question: 'Aşağıdaki davranışlardan hangisi doğrudur?',
				Answers: [
					{
						Id: '0301',
						Option: 'Bakıma 15 dakikaya kadar geç kalsam bir şey olmaz.'
					},
					{
						Id: '0302',
						Option: 'Bakım formunu Ipad üzerinde doldurma zorunluluğu yoktur.'
					},
					{
						Id: '0303',
						Option: 'Bakımlara her zaman firma tarafından verilen iş kıyafetleri ile gelmek zorunludur.'
					},
					{
						Id: '0304',
						Option: 'Mağaza açıldıktan sonra bakımlara, işimiz bitene kadar devam edebiliriz'
					}
				]
			},
			{
				Id: '04',
				Question: 'Aşağıdaki davranışlardan hangisi doğru değildir?',
				Answers: [
					{
						Id: '0401',
						Option: 'Bakıma 15 dakikaya kadar geç kalsam bir şey olmaz.'
					},
					{
						Id: '0402',
						Option: 'Bakım formunu Ipad üzerinde doldurma zorunluluğu yoktur.'
					},
					{
						Id: '0403',
						Option: 'Bakımlara her zaman firma tarafından verilen iş kıyafetleri ile gelmek zorunludur.'
					},
					{
						Id: '0404',
						Option: 'Mağaza açıldıktan sonra bakımlara, işimiz bitene kadar devam edebiliriz'
					}
				]
			},
			{
				Id: '05',
				Question: 'Aşağıdaki davranışlardan hangisi doğrudur?',
				Answers: [
					{
						Id: '0501',
						Option: 'Bakıma 15 dakikaya kadar geç kalsam bir şey olmaz.'
					},
					{
						Id: '0502',
						Option: 'Bakım formunu Ipad üzerinde doldurma zorunluluğu yoktur.'
					},
					{
						Id: '0503',
						Option: 'Bakımlara her zaman firma tarafından verilen iş kıyafetleri ile gelmek zorunludur.'
					},
					{
						Id: '0504',
						Option: 'Mağaza açıldıktan sonra bakımlara, işimiz bitene kadar devam edebiliriz'
					}
				]
			},
		]
	};
	var time = 0;

	/*
	###
	Functions
	###
	*/
	// Action Control Buttons Href's
	$('#btnGoToList').attr('href', _URLActionGoToList)

	// Set & Show Active Section
	// Counter
	function Counter(){
		setTimeout( function(){
			time++;
			var minute = Math.floor( (time/10/60)) % 60;
			var second = (Math.floor(time/10)) % 60;
			$('#counterContainer').find('.btn-text').html(minute + ':' + second);
			Counter()
		}, 100);
	}

	/*
	###
	Handlebars Functions & Helpers & Partials
	###
	*/
	// Rendering Template
	$('#renderCourseTest').Handle({
		source: $('#templateCourseTest'),
		data: _Model,
		append: false,
		prepend: false,
		callback: function(){
			Counter()
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
		$('#btnCounter').on('click', function(e){
			e.preventDefault();
		});
		$('#btnNextStep').on('click', function(e){
			e.preventDefault();
			var validation = true;
			$('#courseTestQuestions').find('.form-item').each(function(){
				if( $(this).find('input:checked').length == 0 ){
					validation = false;
				}
			});
			if( validation == false ){
				Alert(alertText.courseTest.validationAnswerAllQuestion)
				return false;
			}
			else{
				window.location.href="courseResult.php"
			}
		});
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
