<?php
	$pageName = "Profile";																				// Set the page name
	require_once './controllers/includeFiles.php';														// Include all the files needed for this page
?>
	<!-- Begin page body -->
	<body class="page-body" data-url="">

		<!-- Begin page content wrapper -->
		<div class="page-container horizontal-menu">
			
			<!-- End page main contents -->
			<div class="main-content">
				
				<!-- Begin page header -->	
				<?php
					require_once './views/pageHeader.php';												// Include the page header
				?>
				<!-- End page header -->
				
				<!-- Begin page name and description -->
				<h2><?php echo $pageName; ?></h2>
				<em>View and edit your account details.</em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8">
							<div class="panel panel-primary">
								
								<!-- Begin form header -->
								<div class="panel-heading">
									<div class="panel-title"><?php echo $pageName; ?></div>
					
<!--									<div class="panel-options">-->
<!--										<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>-->
<!--										<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>-->
<!--									</div>-->

								</div>
								<!-- End form header -->

								<!-- Begin form body -->
								<div class="panel-body">
									<form class="validate" action="" method="post" role="form" id="form1">
										
										<?php
											
											if( isset( $message ) ) { echo $message; }
											
											$DatabaseHandler = new DatabaseHandler();
											$DatabaseHandler -> where ( "UserKey", $_SESSION['userSession'] );
											$user = $DatabaseHandler -> getOne ( "tlr_users" );
											?>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">Email</label>
															<input type='text' class="form-control" name='userEmail' data-validate="required" value="<?php echo $user['userEmail']; ?>" readonly="" autocomplete="off" />
														</div>
													</div>
													
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">Title</label>
															<select name="userTitle" class="form-control">
																<option value="<?php echo $user['userTitle']; ?>"><?php echo $user['userTitle']; ?></option>
																<option value="Dr.">Dr.</option>
																<option value="Mr.">Mr.</option>
																<option value="Mrs.">Mrs.</option>
																<option value="Ms.">Ms.</option>
																<option value="Miss.">Miss.</option>
															</select>
														</div>
													</div>

													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">First Name</label>
															<input type='text' class="form-control" name='userFirstName' data-validate="required" value="<?php echo $user['userFirstName']; ?>" required="" autocomplete="off" />
														</div>
													</div>
													
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">Last Name</label>
															<input type='text' class="form-control" name='userLastName' data-validate="required" value="<?php echo $user['userLastName']; ?>" required="" autocomplete="off" />
														</div>
													</div>
													
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">Phone</label>
															<input type='text' class="form-control" name='userPhone' data-validate="required" value="<?php echo $user['userPhone']; ?>" required="" autocomplete="off" />
														</div>
													</div>
													
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">Gender</label>
															<select name="userGender" class="form-control">
																<option value="<?php echo $user['userGender']; ?>"><?php echo $user['userGender']; ?></option>
																<option value="Male">Male</option>
																<option value="Female">Female</option>
															</select>
														</div>
													</div>
													
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">Date of birth</label>
															<input type="text" class="form-control datepicker" name="userDOB" data-format="yyyy-mm-dd" placeholder="Enter date of birth" value="<?php echo $user['userDOB']; ?>" required="" autocomplete="off" />
														</div>
													</div>
													
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">Region</label>
															<select name="userRegion" class="form-control">
																<option value="<?php echo $user['userRegion']; ?>"><?php echo $user['userRegion']; ?></option>
																<option value="Ashanti Region">Ashanti Region</option>
																<option value="Greater Accra Region">Greater Accra Region</option>
																<option value="Eastern Region">Eastern Region</option>
																<option value="Western Region">Western Region</option>
																<option value="Northern Region">Northern Region</option>
																<option value="Brong - Ahafo Region">Brong - Ahafo Region</option>
																<option value="Volta Region">Volta Region</option>
																<option value="Central Region">Central Region</option>
																<option value="Upper East Region">Upper East Region</option>
																<option value="Upper West Region">Upper West Region</option>
															</select>
														</div>
													</div>
													
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">City</label>
															<input type='text' class="form-control" name='userCity' data-validate="required" value="<?php echo $user['userCity']; ?>" required="" autocomplete="off" />
														</div>
													</div>
													
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label">Residential Address</label>
															<input type='text' class="form-control" name='userResAddress' data-validate="required" value="<?php echo $user['userResAddress']; ?>" required="" autocomplete="off" />
														</div>
													</div>
												</div>
												
												<input type="hidden" name="userKey" value="<?php echo $_SESSION['userSession']; ?>" />
												<div class="form-group">
													<button type="submit" class="btn btn-success" name='editProfile'>Update Account</button>
												</div>
											<?php 
										?>
									</form>
								</div>
								<!-- End form body -->
								
							</div>
						</div>
						<!-- End page left -->
						
						<!-- Begin page right -->
						<?php
							require_once './views/pageRight.php';										// Include the right contents
						?>
						<!-- End page right -->
	
					</div>
				</div>
				
				<!-- Begin page footer -->
				<?php
					require_once './views/pageFooter.php';												// Include the page footer
				?>
				<!-- End page footer -->
				
			</div>
			<!-- End page main contents -->

		</div>
		<!-- End page content wrapper -->

		<!-- Begin page scripts -->
		<script src="./controllers/js/jquery.validate.min.js"></script>
		
		<link rel="stylesheet" href="./controllers/js/select2/select2-bootstrap.css">
		<link rel="stylesheet" href="./controllers/js/select2/select2.css">
		<link rel="stylesheet" href="./controllers/js/selectboxit/jquery.selectBoxIt.css">
		<link rel="stylesheet" href="./controllers/js/daterangepicker/daterangepicker-bs3.css">
		
		<script src="./controllers/js/gsap/main-gsap.js"></script>
		<script src="./controllers/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
		<script src="./controllers/js/bootstrap.min.js"></script>
		<script src="./controllers/js/joinable.js"></script>
		<script src="./controllers/js/resizeable.js"></script>
		<script src="./controllers/js/neon-api.js"></script>
		<script src="./controllers/js/select2/select2.min.js"></script>
		<script src="./controllers/js/bootstrap-tagsinput.min.js"></script>
		<script src="./controllers/js/typeahead.min.js"></script>
		<script src="./controllers/js/selectboxit/jquery.selectBoxIt.min.js"></script>
		<script src="./controllers/js/bootstrap-datepicker.js"></script>
		<script src="./controllers/js/bootstrap-timepicker.min.js"></script>
		<script src="./controllers/js/bootstrap-colorpicker.min.js"></script>
		<script src="./controllers/js/daterangepicker/moment.min.js"></script>
		<script src="./controllers/js/daterangepicker/daterangepicker.js"></script>
		<script src="./controllers/js/jquery.multi-select.js"></script>
		<script src="./controllers/js/neon-chat.js"></script>
		<script src="./controllers/js/neon-custom.js"></script>
		<script src="./controllers/js/neon-demo.js"></script>
		<!-- End page scripts -->
		
		<!-- Begin slider scripts -->
		<script src="./controllers/sliders/slippry.min.js" type="text/javascript"></script>
		<script>
			$(function() 
			{
				var demo1 = $("#slider-banners").slippry(
				{
					pause: 8000,
					transition: 'horizontal'
				});
			});
		</script>
		<!-- End slider contents -->

	</body>
	<!-- End page body -->

</html>