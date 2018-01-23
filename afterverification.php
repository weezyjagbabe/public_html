<?php
	$pageName = "Verified Transaction";																			// Set the page name
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
                <?php
                    $DatabaseHandler = new DatabaseHandler();
                    $DatabaseHandler -> where( 'transactionKey', $tKey );
                    $transactionss = $DatabaseHandler -> get( 'tlr_transactions_view' );
                if ( $DatabaseHandler -> count > 0 ) {
                    foreach ($transactionss as $transaction) {
                        $serviceName = $transaction['serviceName'];
                        $sKey       = $transaction['serviceKey'];
                    }
                }
                ?>
				<!-- Begin page name and description -->
				<h2><?php echo $serviceName; ?></h2>
				<em><?php echo $transactions -> grabServicesDesc($sKey); ?></em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8">
							<div class="row">
								
								<!-- Begin service form contents -->
								<div class="col-sm-8">
									<div class="panel panel-primary">
										
										<!-- Begin service form header -->
										<div class="panel-heading">
											<!-- <div class="panel-title"><?php echo $serviceName; ?></div> -->
<!--											<div class="panel-title">--><?php //echo $step; ?><!--</div>-->
							
<!--											<div class="panel-options">-->
<!--												<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>-->
<!--												<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>-->
<!--											</div>-->
                                            <form class="validate" action="" method="post" role="form" id="form1">
                                                <p> <strong>PROCEED WITH ORIGINAL TRANSACTION!!!</strong></p>

                                                <input type='hidden' name='tKey' value='<?php echo $tKey; ?>' readonly />

                                                <div class="form-group">
                                                    <div class="floatLeft"><a href='transaction?t=<?php echo $sKey; ?>'><button type="button" class="btn btn-danger">CANCEL</button></a></div>
                                                    <div class="floatRight"><button type="submit" class="btn btn-success" name='payNow' id="payNow">PAY NOW</button></div>
                                                </div>
                                            </form>
                                            <?php
                                                if ( isset( $_POST['payNow'] ) )
                                                {

                                                    $responseCode = $transactions -> processPayment( $tKey );												    // Process the payment and return the response code

                                                    if(  $responseCode['code'] == 000 )																					    // Check the response of the transaction
                                                    {
                                                        // Add the responseCode to the transaction extra data
                                                        $transactions -> updateTransactionExtraData( $responseCode = json_encode( array( 'responseCode' => $responseCode ) ), $tKey );

                                                        $transactions -> updateStatus( $tKey, 1 );															    // Transaction is successfull, update the status
                                                        sendTransactionMail($tKey);																		    // Send the receipt to user by email
                                                        redirect( 'receipt?t='.$tKey ); 																	// Redirect the user to the success receipt page
                                                    }

                                                    elseif ( $responseCode['code'] == 200  )
                                                    {

                                                    ?>
                                                    <div class=""><iframe name="ghipps" src="<?php echo $responseCode['reason']; ?>" width="100%" style="border: none; height: 400px;"></iframe></div>

                                                    <?php
                                                    }

                                                    else
                                                    {
                                                        // Add the responseCode to the transaction extra data
                                                        $transactions -> updateTransactionExtraData( $responseCode = json_encode( array( 'responseCode' => $responseCode ) ), $tKey );
                                                        redirect( 'response?t='.$tKey );																	// Redirect the user to the response page
                                                    }
                                                }


                                            ?>
										</div>
										<!-- End service form header -->

										<!-- Begin service form body -->
										<div class="panel-body">
											<!-- Begin sign in form -->

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

		<script type="text/javascript">
			$('#selectSource').change( function()
			{
				$(this).closest('form').trigger('submit');
			});
		</script>
        <script
                src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>
        <script type="text/javascript">
                $(document).ready(function () {
                    $("#payNow").click(function () {
                        setTimeout(function () { disableButton(); }, 0);
                    });

                    function disableButton() {
                        $("#payNow").prop('disabled', true).html('Processing');
                    }
                });
        </script>

	</body>
	<!-- End page body -->

</html>