<?php
	$pageName = "Refund Policy";																		// Set the page name
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
				<em>Read more about theteller refund policy.</em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin main contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8">
							<h3>Postpaid</h3>
							<p><strong>theteller</strong> does not normally provide refunds for transactions performed through the site. However, under exceptional cases we will work with the biller to review your particular circumstance to address any issues you raise.</p>
							
							<h3>Prepaid</h3>
							<p><strong>theteller</strong> keeps detailed logs of all transactions that take place. <strong>theteller</strong> will conduct a detailed investigation of all refund requests for prepaid services. In cases where it is possible to "return" the services already paid we will endeavor to process a return.</p>
						
						</div>
						<!-- End page left -->
						
						<!-- Begin page right -->
						<?php
							require_once './views/pageRight.php';										// Include the right contents
						?>
						<!-- End page right -->
	
					</div>
				</div>
				<!-- End main contents -->
				
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