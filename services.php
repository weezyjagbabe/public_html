<?php
	$pageName = "Services";																				// Set the page name
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
				<h2><?php if( isset( $categoryName ) ) { echo "All " . $categoryName . " Services"; } else {  echo "All Service Providers"; } ?></h2>
				<em>Use this section to quickly access our wide range of service providers and their services.</em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8" style="padding: 0px;">
							<?php
								// The categoryKey is not empty and grab the details from the details database
								if ( !empty( $cKey ) ) 
								{
									$cols = Array ( "serviceName, serviceDesc, serviceKey, serviceLogo" );
									$DatabaseHandler -> where( 'categoryKey', $cKey );
									$DatabaseHandler -> where( 'serviceStatus', 1 );
									$services = $DatabaseHandler -> get( "tlr_services" );
									
									// If there are more than 0 rows returned from the database, show them on the page
									if ( $DatabaseHandler -> count > 0 ) 
									{
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
														<!-- <footer>
															<div class="album-options">
																<a href="transaction?t=<?php echo $service['serviceKey']; ?>"><button type="button" class="btn btn-blue btn-icon btn-sm">Get Started<i class="entypo-right"></i></button></a>
															</div>
														</footer> -->
													</article>
												</div>
											<?php
										}
									}

									// There were no records of services found in the category
									else 
									{
										?>
											<div class="col-sm-9"><em>There are no services in this category. Please check back later.</em></div>
										<?php
									}
								} 
								
								// The categoryKey is empty, therefore grab all the service providers from the database
								else 
								{
									$providers = $DatabaseHandler->rawQuery( "SELECT providerKey, companyName, companyLogo, aboutProvider FROM tlr_services_providers WHERE companyStatus = 1 ORDER BY RAND() LIMIT 24" );
									foreach ( $providers as $provider )
									{
										?>
											<div class="col-sm-2">
												<article class="album">
													<header>
														<a href="provider?t=<?php echo $provider['providerKey']; ?>">
															<img src="./<?php echo $provider['companyLogo'] ?>">
														</a>
														<a href="provider?t=<?php echo $provider['providerKey']; ?>" class="album-options">
															<h4><?php echo $provider['companyName'];  ?></h4>
															<p style="font-size: 12px; line-height: 17px;"><?php echo substr( $provider['aboutProvider'], 0, 50 ); ?>...</p>
														</a>
													</header>
													<!-- <footer>
														<div class="album-options">
															<a href="provider?t=<?php echo $provider['providerKey']; ?>"><button type="button" class="btn btn-blue btn-icon btn-sm">View Services<i class="entypo-right"></i></button></a>
														</div>
													</footer> -->
												</article>
											</div>
										<?php
									}
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