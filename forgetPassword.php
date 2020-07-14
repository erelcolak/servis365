<?php
	include '_layout/static/_doc-start.php';
?>
<!-- container fluid start -->
<div id="" class="container-fluid static-page forget-password">
	<div id="" class="row">

		<div id="" class="col-md-3 pull-right static-page-form-group-container ">
			<div id="" class="row">

				<div id="" class="col-md-12 static-page-form-logo">
					<img src="img/logo/logo.png" title="" alt="" id="" class="img img-responsive " />
				</div>

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
															<i class="fa fa-shield form-group-header-title-icon"></i>
															<span class="form-group-header-title-text">ŞİFRE YENİLEME</span>
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
												<div id="UserName" class="col-md-12 form-item">
													<div id="" class="row">

														<div id="" class="col-md-12 form-item-informations">
															<label for="" class="form-item-title">KULLANICI ADI</label>
															<div id="" class="form-item-description"></div>
														</div>
														<div id="" class="col-md-12 form-item-inputs">
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
							<a href="login.php" title="" target="_self" id="" class="btn btn-default btn-ghost btn-left" type="button">
								<span class="btn-text">GİRİŞ</span>
							</a>
							<a href="" title="" target="_self" id="btnForgetPassword" class="btn btn-success  " type="button">
								<span class="btn-text">BAĞLANTI GÖNDER</span>
							</a>
						</div>

					</div>
				</div>
				<!-- form group container end -->

				<div id="" class="col-md-12 static-page-form-copyright">
					© 2018 Rafine Hizmetler ve Tesis Yönetimi A.Ş.
				</div>

			</div>
		</div>

	</div>
</div>
<!-- container fluid end -->
<?php
	include '_layout/static/_body-end.php';
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
		$('#btnForgetPassword').on('click', function(e){
			e.preventDefault();
			// validation
			var validation = true;
			if( $('#UserName').find('input').val() == '' ){
				validation = false;
				Alert(alertText.staticPages.login.emptyUserName)
			}
			if( validation == false ){
				return false;
			}
			else{
				Alert(alertText.staticPages.login.sendPasswordSuccessfully)
			}
		});
	});
</script>
<!-- internal scripts end -->
<?php
	include '_layout/static/_doc-end.php';
?>
