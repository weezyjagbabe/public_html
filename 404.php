<?php
	$pageName = "Requested Page Not Found";																// Set the page name
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

				<div class="page-error-404">

					<div class="error-symbol"><i class="entypo-attention"></i></div>

					<div class="error-text">
						<h2>404</h2>
						<p>Oops! The requested url was not found!...</p>
					</div>

					<hr>
	
					<div class="error-text">Search Pages:
						<br>
						<br>

						<form method="" action="search-results">
							<div class="input-group minimal">
								<div class="input-group-addon"><i class="entypo-search"></i></div>
								<input class="form-control" placeholder="Search anything..." type="text">
							</div>
						</form>
					</div>
				
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