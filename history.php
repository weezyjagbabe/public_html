<?php
	$pageName = "Transaction History";																	// Set the page name
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
				<em>View the history of all your transactions on theteller.</em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8">
							<?php
								$cols = Array ( "transactionKey, transactionAmount, trasactionCharge, billingAmount, transactionRRN, transactionDesc, transactionDate, transactionStatus" );
								$DatabaseHandler -> where( 'userKey', $_SESSION['userSession'] );
								$DatabaseHandler -> orderBy( "transactionID", "DESC" );
								$transactions = $DatabaseHandler -> get( "tlr_transactions_view" );
								if ( $DatabaseHandler -> count > 0 )
								{
									?>
										<table class="table table-bordered datatable" id="table-1">
											<thead>
												<tr>
													<th data-hide="phone">Transaction Code</th>
													<th>Date</th>
													<th data-hide="phone">Amount</th>
													<th data-hide="phone,tablet">Fee Charged</th>
													<th>Total</th>
													<td class="center">Status</th>
													<td class="center">Action</th>
												</tr>
											</thead>
											
											<tbody>
												<?php
													foreach ( $transactions as $transaction )
													{
														?>
															<tr class="odd gradeX">
																<td><?php echo $transaction['transactionRRN']; ?></td>
																<td><?php echo date("F j", strtotime( $transaction['transactionDate'] ) ) ." at " . date( "g:i a", strtotime( $transaction['transactionTime'] ) ); ?></td>
																<td class="center">GHS <?php echo $transaction['transactionAmount']; ?></td>
																<td class="center">GHS <?php echo $transaction['trasactionCharge']; ?></td>
																<td class="center">GHS <?php echo $transaction['billingAmount']; ?></td>
																<td class="center">
																	<?php 
																		if ( $transaction['transactionStatus'] === 1 ){ echo "<button type='button' class='btn btn-green btn-xs'>Successfull</button>";} 
																		elseif ( $transaction['transactionStatus'] === 2 ){ echo "<button type='button' class='btn btn-blue btn-xs'>Canceled</button>";} 
																		else { echo "<button type='button' class='btn btn-red btn-xs'>Declined</button>"; }
																	?>
																</td>
																<td class="center"><a href="details?t=<?php echo $transaction['transactionKey']; ?>"><button type='button' class='btn btn-primary btn-xs'>Details</button></a></td>
															</tr>
														<?php
													}
												?>
											</tbody>
											
											<tfoot>
												<tr>
													<th>Transaction Code</th>
													<th>Date</th>
													<th>Amount</th>
													<th>Fee Charged</th>
													<th>Total</th>
													<td class="center">Status</th>
													<td class="center">Action</th>
												</tr>
											</tfoot>
										</table>
										
										<script type="text/javascript">
											var responsiveHelper;
											var breakpointDefinition = 
											{
											    tablet: 1024,
											    phone : 480
											};
											
											var tableContainer;
											
											jQuery(document).ready(function($)
											{
												tableContainer = $("#table-1");
												tableContainer.dataTable({
													"sPaginationType": "bootstrap",
													"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
													"bStateSave": true,
										
												    // Responsive Settings
												    bAutoWidth     : false,
												    fnPreDrawCallback: function () 
												    {
												        // Initialize the responsive datatables helper once.
												        if (!responsiveHelper) 
												        {
												            responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
												        }
												    },
												    
												    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) 
												    {
												        responsiveHelper.createExpandIcon(nRow);
												    },
												    
												    fnDrawCallback : function (oSettings) 
												    {
												        responsiveHelper.respond();
												    }
												});
												
												$(".dataTables_wrapper select").select2({
													minimumResultsForSearch: -1
												});
											});
										</script>
									<?php
								}
								
								else 
								{
									echo "No record found";
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
		<script src="./controllers/js/jquery.dataTables.min.js"></script>
		<script src="./controllers/js/datatables/TableTools.min.js"></script>
		<script src="./controllers/js/dataTables.bootstrap.js"></script>
		<script src="./controllers/js/datatables/jquery.dataTables.columnFilter.js"></script>
		<script src="./controllers/js/datatables/lodash.min.js"></script>
		<script src="./controllers/js/datatables/responsive/js/datatables.responsive.js"></script>

		<?php
			require_once './controllers/pageScripts.php';												// Include the page scripts
		?>
		<!-- End page scripts -->	

	</body>
	<!-- End page body -->

</html>