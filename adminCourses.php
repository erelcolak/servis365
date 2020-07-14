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
																<span class="form-group-header-title-text">EĞİTİM LİSTESİ</span>
															</div>

														</div>
													</div>
													<div id="" class="col-md-3 form-group-header-controls">

													</div>

												</div>
											</div>
											<div id="" class="col-md-12 form-group-body">
												<div id="" class="row">

													<!-- tableCourses table start -->
													<div id="" class="col-md-12 form-item table-container">
														<table id="tableCourses" class="dataTable table table-bordered table-hover" cellspacing="0" width="100%"></table>
													</div>
													<!-- tableCourses table end -->

												</div>
											</div>

										</div>
									</div>
									<!-- form group end -->
									<!-- templateCourseDetails handlebars template start -->
									<script id="templateCourseDetails" type="text/x-handlebars-template">

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
																					<i class="fa fa-user form-group-header-title-icon"></i>
																					<span class="form-group-header-title-text">{{Id}} - {{CourseGroup}} - {{Name}}</span>
																				</div>

																			</div>
																		</div>
																		<div id="" class="col-md-3 form-group-header-controls">
																			<a href="" title="" target="_self" id="btnEditCourse" class="btn btn-default " type="button">
																				<span class="btn-text">DÜZENLE</span>
																			</a>
																		</div>

																	</div>
																</div>
																<div id="" class="col-md-12 form-group-body">
																	<div id="" class="row">

																		<!-- form group start -->
																		<div id="" class="col-md-9 form-group form-group-inner">
																			<div id="" class="box-border">
																				<div id="" class="row">

																					<div id="" class="col-md-12 form-group-body">
																						<div id="" class="row">

																							<!-- form item start -->
																							<div id="Status" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">EĞİTİM DURUMU</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{Status}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="Level" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">ZORLUK DERECESİ</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{Level}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="CourseDuration" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">EĞİTİM SÜRESİ</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{HelperDuration CourseDuration}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="TestDuration" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">TEST SÜRESİ</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{HelperDuration TestDuration}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="VideoId" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">VİDEO ID</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{VideoId}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="PreparedBy" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">EĞİTİMİ HAZIRLAYAN</div>
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
																										<div for="" class="form-item-title">EĞİTİMİ SUNAN</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{PresentedBy}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="AddedDate" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">EĞİTİM OLUŞTURMA TARİHİ</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{HelperDate AddedDate}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="UploadedBy" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">SİSTEME YÜKLEYEN</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{UploadedBy}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="Rating" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">KULLANICI DEĞERLENDİRMESİ</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{{HelperStarRate Rating}}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="AccessCount" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">EĞİTİME KATILIM SAYISI</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{AccessCount}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="AveragePerformance" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">EĞİTİM BAŞARI ORTALAMASI</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{HelperPercent AveragePerformance}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="MinimumPerformance" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">EĞİTİM BAŞARI ŞARTI</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{HelperPercent MinimumPerformance}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="Description" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">AÇIKLAMA</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										{{Description}}
																									</div>

																								</div>
																							</div>
																							<!-- form item end -->
																							<!-- form item start -->
																							<div id="TestURL" class="col-md-12 form-item">
																								<div id="" class="row">

																									<div id="" class="col-md-4 form-item-informations">
																										<div for="" class="form-item-title">DEĞERLENDİRME TESTİ</div>
																										<div id="" class="form-item-description"></div>
																									</div>
																									<div id="" class="col-md-8 form-item-inputs">
																										<a href="{{TestURL}}" title="" target="_self" id="" class="btn btn-default " type="button">
																											<span class="btn-text">{{TestURL}}</span>
																										</a>
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
																								<img src="{{#if ImageURL}}{{ImageURL}}{{else}}img/empty/empty.jpg{{/if}}" title="" alt="" id="" class="img img-responsive " />
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

															</div>
														</div>
														<!-- form group end -->

													</div>
												</div>

											</div>
										</div>
										<!-- form group container end -->

									</script>
									<!-- templateCourseDetails handlebars template end -->
									<!-- renderCourseDetails handlebars render start -->
									<div id="renderCourseDetails" class="render-template"></div>
									<!-- renderCourseDetails handlebars render end -->

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
<div id="modalCourseEdit" class="modal fade" role="dialog">
	<div id="" class="modal-dialog">
		<div id="" class="modal-content">

			<div id="" class="modal-header">
				<div id="" class="row">

					<div id="" class="col-md-9 modal-header-informations">
						<div id="" class="row">

							<div id="" class="col-md-12 modal-header-title">
								<i class="fa fa-graduation-cap modal-header-title-icon"></i>
								<span class="modal-header-title-text">EĞİTİM BİLGİLERİ</span>
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

												<!-- templateCourseEdit handlebars template start -->
												<script id="templateCourseEdit" type="text/x-handlebars-template">
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
													<div id="Id" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">ID</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<input type="text" id="" name="" class="form-control " value="{{Id}}" placeholder="" />
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="CourseGroup" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">EĞİTİM GRUBU</div>
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
													<div id="Name" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">EĞİTİM ADI</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<input type="text" id="" name="" class="form-control " value="{{Name}}" placeholder="" />
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="Status" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">EĞİTİM DURUMU</div>
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
													<div id="Level" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">ZORLUK DERECESİ</div>
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
													<div id="CourseDuration" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">EĞİTİM SÜRESİ</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<div id="" class="row">

																	<div id="" class="col-md-6 ">
																		<input type="text" id="" name="" class="form-control " value="{{CourseDuration.Minutes}}" placeholder="" />
																	</div>
																	<div id="" class="col-md-6 ">
																		<input type="text" id="" name="" class="form-control " value="{{CourseDuration.Seconds}}" placeholder="" />
																	</div>

																</div>
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="TestDuration" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">TEST SÜRESİ</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<div id="" class="row">

																	<div id="" class="col-md-6 ">
																		<input type="text" id="" name="" class="form-control " value="{{TestDuration.Minutes}}" placeholder="" />
																	</div>
																	<div id="" class="col-md-6 ">
																		<input type="text" id="" name="" class="form-control " value="{{TestDuration.Seconds}}" placeholder="" />
																	</div>

																</div>
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="VideoId" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">VİDEO ID</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<input type="text" id="" name="" class="form-control " value="{{VideoId}}" placeholder="" />
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="PreparedBy" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">EĞİTİMİ HAZIRLAYAN</div>
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
													<div id="PresentedBy" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">EĞİTİMİ SUNAN</div>
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
													<div id="MinimumPerformance" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">EĞİTİM BAŞARI ŞARTI</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<input type="text" id="" name="" class="form-control " value="{{MinimumPerformance}}" placeholder="" />
															</div>

														</div>
													</div>
													<!-- form item end -->
													<!-- form item start -->
													<div id="Description" class="col-md-12 form-item">
														<div id="" class="row">

															<div id="" class="col-md-4 form-item-informations">
																<div for="" class="form-item-title">AÇIKLAMA</div>
																<div id="" class="form-item-description"></div>
															</div>
															<div id="" class="col-md-8 form-item-inputs">
																<textarea id="" name="" class="form-control " value="{{Description}}" placeholder="" rows="5"></textarea>
															</div>

														</div>
													</div>
													<!-- form item end -->

												</script>
												<!-- templateCourseEdit handlebars template end -->
												<!-- renderCourseEdit handlebars render start -->
												<div id="renderCourseEdit" class="render-template"></div>
												<!-- renderCourseEdit handlebars render end -->

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
							<a href="" title="" target="_self" id="btnSaveCourse" class="btn btn-success " type="button">
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
			Id: 'G-01',
			Name: 'Genel Bakım Prosedürleri',
			CourseGroup: 'Elektrik Teknikeri',
			Status: true,
			AddedDate: '/Date(1530466347310)',
			AccessCount: 15,
			Level: 'Basit',
			AveragePerformance: 92,
		},
		{
			Id: 'G-02',
			Name: 'Genel Davranış ve Çalışma Prensipleri',
			CourseGroup: 'Elektrik Teknikeri',
			Status: true,
			AddedDate: '/Date(1530466347310)',
			AccessCount: 15,
			Level: 'Basit',
			AveragePerformance: 92,
		},
	];

	/*
	###
	Functions
	###
	*/
	function DataTables(data){
		var table = $('#tableCourses').DataTable({
			data: data,
			columns: [
				// 0- Id
				{
					title: '<span class="title">Id</span><span class="subtitle"> </span>',
					data: 'Id',
					class: 'column-xs column-center column-Id',
					orderable: false,
					searchable: false
				},
				// 1- CourseGroup
				{
					title: '<span class="title">Eğitim</span><span class="subtitle"> Grubu</span>',
					data: 'CourseGroup',
					class: 'column-md column-CourseGroup',
					orderable: true,
					searchable: true
				},
				// 2- Name
				{
					title: '<span class="title">Eğitim</span><span class="subtitle"> Başlığı</span>',
					data: 'Name',
					class: ' column-Name',
					orderable: true,
					searchable: true
				},
				// 3- AddedDate
				{
					title: '<span class="title">Eklenme</span><span class="subtitle"> Tarihi</span>',
					data: 'AddedDate',
					class: 'column-sm column-center column-AddedDate',
					orderable: false,
					searchable: false
				},
				// 4- Status
				{
					title: '<span class="title">Durum</span><span class="subtitle"> </span>',
					data: 'Status',
					class: 'column-xs column-center column-Status',
					orderable: false,
					searchable: false
				},
				// 5- AveragePerformance
				{
					title: '<span class="title">Başarı</span><span class="subtitle"> Ortalaması</span>',
					data: 'AveragePerformance',
					class: 'column-xs column-center column-AveragePerformance',
					orderable: false,
					searchable: false
				},
				// 6- Level
				{
					title: '<span class="title">Seviye</span><span class="subtitle"></span>',
					data: 'Level',
					class: 'column-sm column-center column-Level',
					orderable: false,
					searchable: false
				},
				// 7- AccessCount
				{
					title: '<span class="title">Katılım</span><span class="subtitle"> Sayısı</span>',
					data: 'AccessCount',
					class: 'column-xs column-center column-AccessCount',
					orderable: false,
					searchable: false
				},
			],
			columnDefs: [
				// 3- AddedDate
				{
					targets: 3,
					render: function( data, type, row, meta ){
						var template = moment(data).format('DD.MM.YYYY');
						return template;
					}
				},
				// 5- AveragePerformance
				{
					targets: 5,
					render: function( data, type, row, meta ){
						var unit = '%';
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
			buttons: [
				{
					text: '<i class="fa fa-plus btn-icon"></i>',
					className: 'btn-success ',
					titleAttr: 'Yeni kullanıcı ekle',
					action: function(){
						// Rendering Template
						$('#renderCourseEdit').Handle({
							source: $('#templateCourseEdit'),
							data: data,
							append: false,
							prepend: false,
							callback: function(){
								$('#modalCourseEdit').modal('show');
							}
						});
					}
				}
			],
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
			minutes = data.Minutes + ' dakika';
		}
		if( data.Seconds != null ){
			seconds = data.Seconds + ' saniye';
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
		$('body').on('click', '#tableCourses tbody tr td', function(e){
			var data = {
				Id: 'G01',
				CourseGroup: 'Genel Eğitimler',
				Name: 'Genel Bakım Prosedürleri',
				Status: 'Aktif',
				Level: 'Basit',
				CourseDuration: {
					Minutes: 16,
					Seconds: 12
				},
				TestDuration: {
					Minutes: 2,
					Seconds: null
				},
				VideoId: 'KZ5zvteC4MU',
				PreparedBy: 'Selin Ünlü',
				PresentedBy: 'Selin Ünlü',
				AddedDate: '/Date(1530466347310)',
				UploadedBy: 'Gökhan Kökçü',
				Rating: 3.2,
				AccessCount: 12,
				AveragePerformance: 78,
				MinimumPerformance: 80,
				Description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
				TestURL: 'G-01-genel-bakim-prosedurleri.xls',
				ImageURL: null
			}
			// Rendering Template
			$('#renderCourseDetails').Handle({
				source: $('#templateCourseDetails'),
				data: data,
				append: false,
				prepend: false,
				callback: function(){
					$('#btnEditCourse').data('model', data);
					var table = $('#tableCourses').DataTable();
					table.columns.adjust();
				}
			});
		});
		// btnSaveCourse on click
		$('#btnSaveCourse').on('click', function(e){
			e.preventDefault();

		});
		// btnSendCourseRequest on click
		$('#btnSendCourseRequest').on('click', function(e){
			e.preventDefault();

		});
		// btnEditCourse on click
		$('body').on('click', '#btnEditCourse', function(e){
			e.preventDefault();
			var data = $(this).data('model')
			// Rendering Template
			$('#renderCourseEdit').Handle({
				source: $('#templateCourseEdit'),
				data: data,
				append: false,
				prepend: false,
				callback: function(){
					$('#modalCourseEdit').modal('show');
				}
			});
		});
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/_doc-end.php';
?>
