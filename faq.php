<?php
	$pageName = "Frequently Asked Questions";															// Set the page name
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
				<em>Find quick answers to your questions here.</em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8">
							<div class="panel-group joined" id="accordion-test-2">
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseOne-1" class="collapsed">
												What is theteller?
											</a>
										</h4>
									</div>
									<div id="collapseOne-1" class="panel-collapse collapse" style="height: 0px;">
										<div class="panel-body">
											theteller is a solution built with convenient access to an array of everyday services such as topping up your mobile phone, making payments, transferring money, buying movie & event tickets. The platform offers direct top up to credit your mobile phone, payments to billers such as DSTV, GOtv, Smarttv to name a few as well as send money to accounts in all commercial banks in Ghana.
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-2" class="">
												What can I do on theteller platform?
											</a>
										</h4>
									</div>
									<div id="collapseTwo-2" class="panel-collapse in" style="height: auto;">
										<div class="panel-body">
											<ul>
												<li>+ Buy airtime – Send airtime directly to supported lines in Ghana. See all supported networks in Ghana.</li>
												<li>+ Pay Bills – We have aggregated a large number or merchants, associations and schools for you to pay your bills conveniently and securely. Billers such as DSTv, Ghana Water Company, ECG etc are on theteller.</li>
												<li>+ Send Money – You can transfer money to any account nationwide.</li>
												<li>+ Receive Money – Western union transfer sent to you can be received into enabled Agent banks.</li>
												<li>+ Buy Movie & Event tickets – Why queue up at the cinema or an event when we’ve got it all covered?</li>
												<li>+ Buy Movie & Event tickets – Why queue up at the cinema or an event when we’ve got it all covered?</li>
											</ul>
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseThree-3" class="collapsed">
												What are the different ways to access theteller?
											</a>
										</h4>
									</div>
									<div id="collapseThree-3" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li>+ Our website - <a href="home"><strong>www.theteller.net</strong></a> on web and smartphones</li>
											</ul>
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-test-4" href="#collapseFour-4" class="collapsed">
												How do I register for theteller?
											</a>
										</h4>
									</div>
									<div id="collapseFour-4" class="panel-collapse collapse">
										<div class="panel-body">
											Click <a href="sign-up"><strong>here</strong></a> and enter the required details requested. Alternatively, from the home page, click on the “”Register” tile in the left panel. Enter all the required details.
										</div>
									</div>
								</div>

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
		<?php
			require_once './controllers/pageScripts.php';												// Include the page scripts
		?>
		<!-- End page scripts -->	

	</body>
	<!-- End page body -->

</html>