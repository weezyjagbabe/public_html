<?php
	$pageName = "Transaction Response";																	// Set the page name
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
							
							<?php echo $response = transactionMessage( $transactions -> grabResponseCode( $tKey ) ); ?>
							
							<?php
								$DatabaseHandler = new DatabaseHandler();
								$cols = Array ( "transactionRRN, serviceName, transactionDate, billingAmount, companyName, trasactionCharge, transactionDesc, paymentSourceName, transactionDate, transactionTime, serviceKey" );
								$DatabaseHandler -> where( 'transactionKey', $tKey );
								$transactions = $DatabaseHandler -> get( 'tlr_transactions_view' );
								
								if ( $DatabaseHandler -> count > 0 )
								{
									foreach ( $transactions as $transaction ) 
									{
										$transactionRRN 		=	$transaction['transactionRRN']; 
										$serviceName	 		=	$transaction['serviceName']; 
										$transactionAmount	 	=	$transaction['transactionAmount']; 
										$billingAmount		 	=	$transaction['billingAmount']; 
										$companyName	 		=	$transaction['companyName']; 
										$trasactionCharge	 	=	$transaction['trasactionCharge']; 
										$transactionDesc	 	=	$transaction['transactionDesc']; 
										$paymentSourceName	 	=	$transaction['paymentSourceName']; 
										$transactionDate	 	=	$transaction['transactionDate']; 
										$transactionTime	 	=	$transaction['transactionTime']; 
										$serviceKey	 	=	$transaction['serviceKey']; 
									}
								}
							?>
							<div class="row">
								<div class="col-sm-6 invoice-left"></div>
								<div class="col-sm-6 invoice-right">
									<h4>REFERENCE NO. <?php echo $transactionRRN; ?></h4>
									<span><?php echo date( "F j", strtotime( $transactionDate ) ) . " at " . date( "g:i a", strtotime( $transactionTime ) ); ?></span>
								</div>
							</div>
	
							<hr class="margin" />
	
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center">#</th>
										<th class="text-left" width="50%">Description</th>
										<th class="text-right" width="50%">Details</th>
									</tr>
								</thead>
	
								<tbody>
									<tr>
										<td class="text-center">1</td>
										<td>Transaction Code:</td>
										<td class="text-right"><?php echo $transactionRRN; ?></td>
									</tr>
	
									<tr>
										<td class="text-center">2</td>
										<td>Service Paid For:</td>
										<td class="text-right"><?php echo $serviceName; ?></td>
									</tr>
	
									<tr>
										<td class="text-center">3</td>
										<td>Service Provider Paid To:</td>
										<td class="text-right"><?php echo $companyName; ?></td>
									</tr>
	
									<tr>
										<td class="text-center">4</td>
										<td>Service Description:</td>
										<td class="text-right"><?php echo $transactionDesc; ?></td>
									</tr>
	
									<tr>
										<td class="text-center">5</td>
										<td>Source Of Payment:</td>
										<td class="text-right"><?php echo $paymentSourceName; ?></td>
									</tr>
								</tbody>
							</table>
	
							<div class="margin"></div>
	
							<div class="row">
								<div class="col-sm-6">
									<div class="invoice-left">
									</div>
								</div>
	
								<div class="col-sm-6">
									<div class="invoice-right">
										<ul class="list-unstyled">
											<li>Amount: <strong>GHS <?php echo $transactionAmount; ?></strong></li>
											<li>Convinience Fee: <strong>GHS <?php echo $trasactionCharge; ?></strong></li>
											<li>Total Amount: <strong>GHS <?php echo $billingAmount; ?></strong></li>
										</ul>
										<br />
										<a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
											Print Invoice
											<i class="entypo-doc-text"></i>
										</a>
	
										&nbsp;
	
										<a href="transaction?t=<?php echo $serviceKey; ?>" class="btn btn-success btn-icon icon-left hidden-print">Try Again<i class="entypo-mail"></i></a>
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