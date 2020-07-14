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
								<i class="fa fa-sign-in partbox-header-title-icon"></i>
								<span class="partbox-header-title-text">ÖĞRENCİ KATILIM ANALİZİ</span>
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
																<span class="form-group-header-title-text">EĞİTİM KATILIM İZLEME</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- CourseAccession start -->
													<div id="" class="col-md-12 form-item chart-container">
														<canvas id="CourseAccession" width="16" height="4"></canvas>
													</div>
													<!-- CourseAccession end -->

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
																<span class="form-group-header-title-text">GÜN İÇİ EĞİTİME KATILIM YOĞUNLUĞU</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- CourseAccessionInDay start -->
													<div id="" class="col-md-12 form-item chart-container">
														<canvas id="CourseAccessionInDay" width="16" height="4"></canvas>
													</div>
													<!-- CourseAccessionInDay end -->

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
																<span class="form-group-header-title-text">AY BOYU EĞİTİME KATILIM YOĞUNLUĞU</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- CourseAccessionInMonth start -->
													<div id="" class="col-md-12 form-item chart-container">
														<canvas id="CourseAccessionInMonth" width="16" height="4"></canvas>
													</div>
													<!-- CourseAccessionInMonth end -->

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


	/*
	###
	Functions
	###
	*/
	// line chart
	function CourseAccession(){
		var ctx = $('#CourseAccession');
		var chart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [
					'1',
					'2',
					'3',
					'4',
					'5',
					'6',
					'7',
					'8',
					'9',
					'10',
					'11',
					'12',
				],
				datasets: [
					{
						label: '',
						data: [15, 12, 36, 26, 64, 88, 43, 78,36, 66, 56, 59],
						backgroundColor: '#2196f380',
						borderColor: '#2196f3',
						borderWidth: 2,
					},
				]
			},
			options: {
				title: {
					display: true,
					text: 'Eğitim Katılım İzleme',

				},
				scales: {
					yAxes: [
						{
							ticks: {
								beginAtZero:true
							}
						}
					]
				}
			},
		});
	}
	// line chart
	function CourseAccessionInDay(){
		var ctx = $('#CourseAccessionInDay');
		var chart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [
					'1',
					'2',
					'3',
					'4',
					'5',
					'6',
					'7',
				],
				datasets: [
					{
						label: '',
						data: [15, 12, 36, 26, 64, 88, 43],
						backgroundColor: '#2120f380',
						borderColor: '#2120f3',
						borderWidth: 2,
					},
				]
			},
			options: {
				title: {
					display: true,
					text: 'Gün İçi Eğitime Katılım Yoğunluk Ortalaması',

				},
				scales: {
					yAxes: [
						{
							ticks: {
								beginAtZero:true
							}
						}
					]
				}
			},
		});
	}
	// line chart
	function CourseAccessionInMonth(){
		var ctx = $('#CourseAccessionInMonth');
		var chart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [
					'Ocak',
					'Şubat',
					'Mart',
					'Nisan',
					'Mayıs',
					'Haziran',
					'Temmuz',
					'Ağustos',
					'Eylül',
					'Ekim',
					'Kasım',
					'Aralık',
				],
				datasets: [
					{
						label: '',
						data: [78,36, 66, 56, 59, 15, 12, 36, 26, 64, 88, 43],
						backgroundColor: '#10bf5680',
						borderColor: '#10bf56',
						borderWidth: 2,
					},
				]
			},
			options: {
				title: {
					display: true,
					text: 'Ay Boyunca Eğitime Katılım Yoğunluk Ortalaması',

				},
				scales: {
					yAxes: [
						{
							ticks: {
								beginAtZero:true
							}
						}
					]
				}
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
		CourseAccession()
		CourseAccessionInDay()
		CourseAccessionInMonth()

		/*
		Event Handlers
		*/
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
