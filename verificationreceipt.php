<?php
	$pageName = "Verification Comfirmation";																	// Set the page name
	require_once './controllers/includeFiles.php';														// Include all the files needed for this page
//    $_SESSION['count'] = 1;
    if (isset($_SESSION['count'])){
        if($_SESSION['count'] == 3 || $_SESSION['count'] > 3)
//                    var_dump($_SESSION['count']);
        redirect( 'services');

    }
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
				<em>Card Verification Initiated.</em>
				<hr />
				<!-- End page name and description -->

				<!-- Begin contents -->				
				<div class="invoice">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8">
							
							<div class="alert alert-success"><strong>Well done!</strong> Please verify amount charged on your Card or Mobile Number!!!</div>
                            <div class="panel-body">
                                <form role="form" id="form1" method="post" action="" class="validate">
                                    <div class="form-group">
                                        <label class="control-label">Enter amount charged on Card!!!</label>
                                        <input type='text' class="form-control" name='amountCharged' data-validate="required,number" value="" required="" autocomplete="off" />
                                    </div>
                                    <input id="tKey" data-count="<?php if(isset($_SESSION['count'])) {echo $_SESSION['count'];}?>" type="hidden" name="tKey" value="<?php echo $_GET['t']; ?>" />
                                    <div class="form-group">
                                        <button type="submit" name="confirmCard" class="btn btn-success">Confirm</button>
<!--                                        <div class="floatRight"><button type="submit" name="proceed" class="btn btn-primary">Change Card</button></div>-->
                                    </div>
                                </form>
                            </div>
							<?php
                            if (isset($_POST['confirmCard'])) {
//                                $_SESSION['count'] =  1;
                                $tKey = $_POST['tKey'];
                                $chargedAmount = $_POST['amountCharged'];
//                                echo $tKey;
                                $DatabaseHandler = new DatabaseHandler();
                                $cols = Array("transactionRRN, serviceName, transactionDate, billingAmount, companyName, trasactionCharge, transactionDesc, paymentSourceName, transactionDate, transactionTime");
                                $DatabaseHandler->where('transactionKey', $tKey);
                                $transactions = $DatabaseHandler->get('tlr_verification_transactions_view');
//                                var_dump($transactions);
                                if ($DatabaseHandler->count > 0) {
                                    foreach ($transactions as $transaction) {
                                        $billingAmount = $transaction['billingAmount'];
                                        $transactionExtraData = $transaction['transactionExtraData'];
                                    }
                                    $transactionExtraData = json_decode($transactionExtraData, TRUE);
                                    $mode = $transactionExtraData["mode"];                                                                            // Grab the mode of payment

                                    // Get the r-switch code

                                    if      ( $mode == "airtel" )        { $mode = "ATL"; }                                                         // R-Switch code is ATL if mode is airtel
                                    elseif  ( $mode == "mtn" )           { $mode = "MTN"; }                                                         // R-Switch code is MTN if mode is MTN mobile money
                                    elseif  ( $mode == "tigo" )          { $mode = "TGO"; }                                                         // R-Switch code is TGO if mode is TiGO cash
                                    elseif  ( $mode == "visa" )          { $mode = "VIS"; }                                                         // R-Switch code is VIS if mode is Visa
                                    elseif  ( $mode == "master" )        { $mode = "MAS"; }                                                         // R-Switch code is MAS if mode is Master card

                                    if( isset( $transactionExtraData["phoneNumber"] ) ) { $number = $transactionExtraData["phoneNumber"]; }	        // if the phoneNumber is set, grab the value
                                    elseif ( isset( $transactionExtraData["cardNumber"] ) ){ $number = $transactionExtraData["cardNumber"]; }	    // if the cardNumber is set, grab the value

                                    if( isset( $transactionExtraData["expMonth"] ) ) { $expMonth = $transactionExtraData["expMonth"]; }             // if the expMonth is set, grab the value
                                    else { $expMonth = ""; }                                                                                        // or else set the value to NULL

                                    if( isset( $transactionExtraData["expYear"] ) ) { $expYear = $transactionExtraData["expYear"]; }                // if the expYear is set, grab the value
                                    else { $expYear = ""; }                                                                                         // or else set the value to NULL

                                    if( isset( $transactionExtraData["cvv"] ) ) { $cvv = $transactionExtraData["cvv"]; }                            // if the cvv is set, grab the value
                                    else { $cvv = ""; }                                                                                   // or else set the value to NULL
                                    if($chargedAmount === $billingAmount){
                                        $data = Array                                                                                                       // Prepare the array of data to be inserted into the DB
                                        (
                                            "userKey" => $_SESSION['userSession'],                                                                // The key for the logged in user making the transaction
                                            "cardNumber" => $number,                                                                                // The key for the service being transacted
                                            "cardType" => $mode,                                                                            // The key for the service provider
                                            "expMonth" => $expMonth,                                                                            // Amount being paid for the transaction
                                            "expYear" => $expYear,
                                            "cvv" => $cvv,
                                            "verifiedAmount" => $billingAmount                                                                                    // The source of fund (Will be empty for now)
                                            // The transaction extra data
                                        );
                                        $Database = new DatabaseHandler();
                                        If ($Database->insert("tlr_verified_cards", $data)){
                                            echo '<script>alert("Verification Successful!!!"); window.location ="http://45.56.99.27/afterverification?t='.$tKey.'"</script>';
                                        }else{
                                            echo "<script>alert('Verification Failed!!!'); window.location = 'http://45.56.99.27/services';</script>";
                                        }
                                    }else{
                                        echo "<script>
                                                var a=$('#tKey').attr('data-count');
                                                alert('Verification Failed!! You have '+(3 - a)+' more tries');
                                                
                                                </script>";
                                        if(isset($_SESSION['count'])){$_SESSION['count']++;}
                                    }


                                }else{
                                    echo "<script>alert('Verification Failed!!!'); window.location = 'http://45.56.99.27/services';</script>";
                                    if(isset($_SESSION['count'])){$_SESSION['count']++;}
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
					<!-- Begin contents -->
				
					<!-- Begin page footer -->
					<?php
						require_once './views/pageFooter.php';												// Include the page footer
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

