<?php
	$pageName = "Chargeback Policy";																	// Set the page name
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
				<em>Read full details on our chargeback policy.</em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin main contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8">
							<h3>What is a Chargeback?</h3>
							<p>A chargeback is a reversal of a credit/debit card transaction by your bank. Chargebacks are usually performed when fraudulent purchases have been made on a person’s credit/debit card. You can initiate such a request if you find a charge on your account that you did not authorize, or a charge for an item that you did not receive. If you need to request a chargeback, please contact us first so we can help you resolve the issue. In most cases, our refund policy is the appropriate route to take instead of a chargeback request.</p>
							
							<h3>How does <strong>theteller</strong> handle Chargebacks?</h3>
							<p>When theteller receives a chargeback notice, the account from which the service was purchased is immediately blocked, and all associated services in the account are suspended. Without additional information, our policy is to treat chargebacks as a result of fraudulent activity. As a result, theteller will suspend your account and send you email and/or text notification, requesting that you contact us to resolve the issue and reactivate your theteller account. <strong style="color: #000;">theteller</strong> will evaluate all chargebacks requests. In cases where it is deemed to be fraudulent, the case will be turned over to the appropriate law enforcement agencies.</p>
							
							<h3>How do I cancel a Chargeback?</h3>
							<p>To undo a chargeback, you must contact your bank to issue a chargeback reversal. Please contact <strong>theteller</strong> to inform us when the reversal is initiated so we can make a note on your account.</p>
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