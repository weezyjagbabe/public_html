<?php
	$pageName = "Service Provider";																		// Set the page name
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
				<h2><?php echo "All " . $companyName . " Services"; ?></h2>
				<em><?php echo "Below is all the service(s) for " . $companyName . ". "; ?></em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8" style="padding: 0px;">
							<?php
								
								$cols = Array ( "serviceName, serviceDesc, serviceKey, serviceLogo" );
								$DatabaseHandler -> where( 'providerKey', $pKey );
								$DatabaseHandler -> where( 'serviceStatus', 1 );
								$services = $DatabaseHandler -> get( "tlr_services" );
								foreach ( $services as $service )
								{
									?>
										<div class="col-sm-2">
											<article class="album">
												<header>
													<a href="transaction?t=<?php echo $service['serviceKey']; ?>">
														<img src="./<?php  if ( !empty( $service['serviceLogo'] ) ) { echo $service['serviceLogo']; } else { echo $service['companyLogo']; } ?>">
													</a>
													<a href="transaction?t=<?php echo $service['serviceKey']; ?>" class="album-options">
														<h4><?php echo $service['serviceName'];  ?></h4>
														<p style="font-size: 12px; line-height: 17px;"><?php echo substr( $service['serviceDesc'], 0, 35 ); ?>...</p>
													</a>
												</header>
											</article>
										</div>
									<?php
								}
							?>
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