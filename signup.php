<?php
	$pageName = "Sign Up";																				// Set the page name
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
					require_once './views/pageHeader.php';													// Include the page header
				?>
				<!-- End page header -->

				<!-- Begin page name and description -->
				<h2><?php echo $pageName; ?></h2>
				<em>It only takes a couple of minutes to create your free account.</em>
				<hr />
				<!-- End page name and description -->

				<!-- Begin contents wrapper -->
				<div class="row">
					
					<!-- Begin left contents -->
					<div class="col-sm-8">
						<img class="curveTopLeftAndRight" src="./models/images/others/signin-banner.jpg" width="100%" />
						<div class="panel-body2 curvebottomLeftAndRight">
							<h1>theteller - Your payment hub</h1>
							<p>theteller is a service that seeks to revolutionaries the financial transactions such as invoice, Bill, Fees payments and paying for all level ticket – Movies and Events and in addition to Mobile Airtime Top-Up. theteller gives unlimited access to your funds and control over your business financial transaction and at own convenient and at your comfort.</p>
						</div>
					</div>
					<!-- End left contents -->

					<!-- Begin right contents -->
					<div class="col-sm-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="panel-title"><?php echo $pageName ?></div>

<!--								<div class="panel-options">-->
<!--									<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>-->
<!--									<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>-->
<!--								</div>-->

							</div>
			
							<div class="panel-body">
								<form role="form" id="form1" method="post" action="" class="validate">
									
									<?php if( isset( $response ) ) { echo $response;
                                     if ($response === '<div class="alert alert-danger"><strong>Oh snap!</strong> Account not activated!</div>'){
                                        echo '<div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" name="userEmail" data-validate="email,required" placeholder="Enter email" value="';if( isset( $userEmail ) ){ echo $userEmail; } echo '" required="" autocomplete="off" />
                                        </div>

                                        <div class="form-group"><button type="submit" name="activateEmail" class="btn btn-success">RESEND ACTIVATION CODE</button></div>';
                                    }else {
                                         echo '<div class="form-group">
										<label class="control-label">Email</label>
										<input type="text" class="form-control" name="userEmail" data-validate="email,required" placeholder="Enter email" value="';if( isset( $userEmail ) ){ echo $userEmail; } echo '" required="" autocomplete="off" />
									</div>
					
									<div class="form-group">
										<label class="control-label">First Name</label>
										<input type="text" class="form-control" name="userFirstName" data-validate="required" placeholder="Enter first name" value="';if( isset( $firstName ) ){ echo $firstName; } echo '" required="" autocomplete="off" />
									</div>
					
									<div class="form-group">
										<label class="control-label">Last Name</label>
										<input type="text" class="form-control" name="userLastName" data-validate="required" placeholder="Enter last name" value="'; if( isset( $lastName ) ){ echo $lastName; } echo '" required="" autocomplete="off" />
									</div>
					
									<div class="form-group">
										<label class="control-label">Phone number</label>
										<input type="text" class="form-control" name="userPhone" data-validate="number" placeholder="Enter phone number" value="'; if( isset( $userPhone ) ){ echo $userPhone; } echo '" required="" autocomplete="off" />
									</div>
									
									<div class="form-group">
										<label class="control-label">Date of birth</label>
										<input type="text" class="form-control datepicker" name="userDOB" data-format="yyyy-mm-dd" placeholder="Enter date of birth" value="'; if( isset( $userDOB ) ){ echo $userDOB; } echo '" required="" autocomplete="off" />
									</div>
									
									<div class="form-group">
										<label class="control-label">Choose Password</label>
										<input type="password" class="form-control" name="userPassword" data-validate="required" placeholder="Choose a password" required="" autocomplete="off" />
									</div>
									
									<div class="form-group">
										<label class="control-label">Confirm Password</label>
										<input type="password" class="form-control" name="confirmuserPassword" data-validate="required" placeholder="Confirm password" required="" autocomplete="off" />
									</div>
					
									<div class="form-group"><button type="submit" name="signUp" class="btn btn-success">SIGN UP NOW</button></div>
									
									<p>Already have an account? <a href="signin">Sign in</a></p>';
                                     }}if( !isset( $response ) ){
									echo '<div class="form-group">
										<label class="control-label">Email</label>
										<input type="text" class="form-control" name="userEmail" data-validate="email,required" placeholder="Enter email" value="';if( isset( $userEmail ) ){ echo $userEmail; } echo '" required="" autocomplete="off" />
									</div>
					
									<div class="form-group">
										<label class="control-label">First Name</label>
										<input type="text" class="form-control" name="userFirstName" data-validate="required" placeholder="Enter first name" value="';if( isset( $firstName ) ){ echo $firstName; } echo '" required="" autocomplete="off" />
									</div>
					
									<div class="form-group">
										<label class="control-label">Last Name</label>
										<input type="text" class="form-control" name="userLastName" data-validate="required" placeholder="Enter last name" value="'; if( isset( $lastName ) ){ echo $lastName; } echo '" required="" autocomplete="off" />
									</div>
					
									<div class="form-group">
										<label class="control-label">Phone number</label>
										<input type="text" class="form-control" name="userPhone" data-validate="number" placeholder="Enter phone number" value="'; if( isset( $userPhone ) ){ echo $userPhone; } echo '" required="" autocomplete="off" />
									</div>
									
									<div class="form-group">
										<label class="control-label">Date of birth</label>
										<input type="text" class="form-control datepicker" name="userDOB" data-format="yyyy-mm-dd" placeholder="Enter date of birth" value="'; if( isset( $userDOB ) ){ echo $userDOB; } echo '" required="" autocomplete="off" />
									</div>
									
									<div class="form-group">
										<label class="control-label">Choose Password</label>
										<input type="password" class="form-control" name="userPassword" data-validate="required" placeholder="Choose a password" required="" autocomplete="off" />
									</div>
									
									<div class="form-group">
										<label class="control-label">Confirm Password</label>
										<input type="password" class="form-control" name="confirmuserPassword" data-validate="required" placeholder="Confirm password" required="" autocomplete="off" />
									</div>
					
									<div class="form-group"><button type="submit" name="signUp" class="btn btn-success">SIGN UP NOW</button></div>
									
									<p>Already have an account? <a href="signin">Sign in</a></p>';
                                    } ?>
								</form>
							</div>
						</div>
					</div>
					<!-- End right contents -->
					
				</div>
				<!-- End contents wrapper -->
				
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
		<script src="./controllers/js/bootstrap-datepicker.js"></script>
		<script src="./controllers/js/jquery.validate.min.js"></script>
		<script src="./controllers/js/neon-chat.js"></script>
		<script src="./controllers/js/neon-custom.js"></script>
		<script src="./controllers/js/neon-demo.js"></script>
		<!-- End page scripts -->	

	</body>
	<!-- End page body -->

</html>