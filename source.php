<?php
	$pageName = "Source Of Fund";																		// Set the page name
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
				<h2><?php echo "Choose " . $pageName; ?></h2>
				<em>Choose your source of fund from the drop menu.</em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-9">
							<div class="row">
								
								<!-- Begin service form contents -->
								<div class="col-sm-8">
									<div class="panel panel-primary">
										
										<!-- Begin service form header -->
										<div class="panel-heading">
											<div class="panel-title"><?php echo "Choose " . $pageName; ?></div>
							
<!--											<div class="panel-options">-->
<!--												<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>-->
<!--												<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>-->
<!--											</div>-->

										</div>
										<!-- End service form header -->

										<!-- Begin service form body -->
										<div class="panel-body">
											
											<!-- Begin sign in form -->
											<form class="validate form-horizontal form-groups-bordered" action="" method="post" role="form" id="form1">
												<select name="test" id="fundSources" class="select2" data-allow-clear="true" data-placeholder="Select one source of fund...">
													<option></option>
													<optgroup label="Sources of fund">
														<?php
															$cols = Array ( "paymentSourceID, paymentSourceName, paymentSourceDesc, paymentSourceLogo, paymentSourceCatID, paymentSourceKey" );
															$Database -> where( "paymentSourceStatus", 1 );
															$paymentSources = $Database -> get( "tlr_payment_sources" );
															$counter = 1;
															foreach ( $paymentSources as $paymentSource )
															{
																?>
																	<option value="<?php echo $paymentSource['paymentSourceKey']; ?>"><?php echo $paymentSource['paymentSourceName'];  ?></option>
																<?php
															}
														?>
													</optgroup>
												</select>
												
												<div id="loadform"></div>
											</form>
											<!-- End sign in form -->
											
										</div>
										<!-- End service form body -->
										
									</div>
								</div>
								<!-- End service form contents -->

								<!-- Begin transaction tips contents -->
								<?php
									require_once './views/transactionSteps.php';						// Include the transactions steps
								?>
								<!-- End transaction tips contents -->
								
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
		
		<!-- Begin source of fund scripts -->
		<script>
			$( document ).ready( function(){
				$( '#fundSources' ).on( 'change', function(){
					
					$( '#sourcePanel' ).removeClass( 'panel-default' ).addClass( 'panel-success' );
					$( '#defaultPanel' ).removeClass( 'panel-success' ).addClass( 'panel-default ');
					
					$( '#loadform' ).html('');
					var fundSources = $( this ).val( );
					
					if( fundSources === "hPQoQpio3Q6GbYe" )
					{
						$( '#loadform' ).load('./views/paymentforms/airtelMoney.php');
					}
					
					else if( fundSources === "hkJjfRplinyqTSM" )
					{
						$( '#loadform' ).load('./views/paymentforms/MTNMobileMoney.php')
					}
				})
			})
		</script>
		<!-- End source of fund scripts -->
		
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