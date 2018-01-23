<?php
	$pageName = "Verification Response";																	// Set the page name
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
				<em>Your transaction response details are displayed below.</em>
				<hr />
				<!-- End page name and description -->

				<!-- Begin contents -->				
				<div class="invoice">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8">
							
							<?php echo '<div class="alert alert-danger"><strong>Declined!!!</strong> Verification Failed!!!</div>'; ?>
							

						</div>
						<!-- End page left -->
	
						<!-- Begin page right -->
						<?php
							require_once './views/pageRight.php';										// Include the right contents
						?>
						<!-- End page right -->
					</div>
					<!-- Begin contents -->
				
					<!-- Begin page footer -->
					<?php
						require_once './views/pageFooter.php';											// Include the page footer
					?>
					<!-- End page footer -->
				</div>
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