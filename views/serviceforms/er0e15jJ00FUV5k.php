<?php
	$transactionDesc = "Donations => theteller => International Palace Church";											// Set the transaction description
	// Check if the user submitted the form and show the summary form
	if ( isset( $_POST['continue'] ) ) 
	{
		$oName			        =	$_POST['oName'];
		$amountPaying			=	$_POST['amountPaying'];
		
		// Check if the $invoiceNumber is empty
		if ( $validation -> checkRequired( $oName ) )
		{
			// Echo the error and show the form again
			echo'<div class="alert alert-danger"><strong>Oh snap!</strong> Please enter your name or organisation name.</div>'
			?>
				<form class="validate" action="" method="post" role="form" id="form1">
					<div class="form-group">
						<label class="control-label">Enter Name/Organisation</label>
						<input type='text' class="form-control" name='oName' data-validate="required" value="<?php echo $oName; ?>" required="" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<label class="control-label">Enter amount</label>
						<input type='text' class="form-control" name='amountPaying' data-validate="required,number" value="<?php echo $amountPaying; ?>" required="" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-success" name='continue'>CONTINUE</button>
					</div>
				</form>
			<?php
		}
        elseif ( $validation -> checkNoOfCharacters( $oName ) )
        {
            // Echo the error and show the form again
            echo'<div class="alert alert-danger"><strong>Oh snap!</strong> Name/Organisation cannot exceed 18 characters</div>'
            ?>
            <form class="validate" action="" method="post" role="form" id="form1">
                <div class="form-group">
                    <label class="control-label">Enter Name/Organisation</label>
                    <input type='text' class="form-control" name='oName' data-validate="required" value="<?php echo $oName; ?>" required="" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label class="control-label">Enter amount</label>
                    <input type='text' class="form-control" name='amountPaying' data-validate="required,number" value="<?php echo $amountPaying; ?>" required="" autocomplete="off" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name='continue'>CONTINUE</button>
                </div>
            </form>
            <?php
        }
		
		// Check if the $amountPaying is empty
		elseif ( $validation -> checkRequired( $amountPaying  ) ) 
		{
			// Echo the error and show the form again
			echo'<div class="alert alert-danger"><strong>Oh snap!</strong> Please enter amount.</div>'
			?>
            <form class="validate" action="" method="post" role="form" id="form1">
                <div class="form-group">
                    <label class="control-label">Enter Name/Organisation</label>
                    <input type='text' class="form-control" name='oName' data-validate="required" value="<?php echo $oName; ?>" required="" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label class="control-label">Enter amount</label>
                    <input type='text' class="form-control" name='amountPaying' data-validate="required,number" value="<?php echo $amountPaying; ?>" required="" autocomplete="off" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name='continue'>CONTINUE</button>
                </div>
            </form>
			<?php
		}
		
		// Check if the $amountPaying is a numeric value
		elseif ( $validation -> isCurrency( $amountPaying ) ) 
		{
			// Echo the error and show the form again
			echo'<div class="alert alert-danger"><strong>Oh snap!</strong> Amount entered is invalid.</div>'
			?>
            <form class="validate" action="" method="post" role="form" id="form1">
                <div class="form-group">
                    <label class="control-label">Enter Name/Organisation</label>
                    <input type='text' class="form-control" name='oName' data-validate="required" value="<?php echo $oName; ?>" required="" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label class="control-label">Enter amount</label>
                    <input type='text' class="form-control" name='amountPaying' data-validate="required,number" value="<?php echo $amountPaying; ?>" required="" autocomplete="off" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name='continue'>CONTINUE</button>
                </div>
            </form>
			<?php
		}
		
		// Form data is validated. Display the summary form
		else 
		{
			If( $tKey = $transactions -> addTransaction( $sKey, $oName, $amountPaying, $transactionDesc, $transactionExtraData = $_POST ) )
			{
				$DatabaseHandler = new DatabaseHandler();
				$cols = Array ( "transactionAmount, trasactionCharge, billingAmount" );
				$DatabaseHandler -> where( 'transactionKey', $tKey );
				$transactions = $DatabaseHandler -> get( 'tlr_transactions' );
				
				if ( $DatabaseHandler -> count > 0 )
				{
					foreach ( $transactions as $transaction ) 
					{
						$transactionAmount 	=	$transaction['transactionAmount'];
						$trasactionCharge 	=	$transaction['trasactionCharge'];
						$billingAmount 		=	$transaction['billingAmount'];
					} 
				}
				
				// Display the transaction summary form
				?>
					<form class="validate" action="" method="post" role="form" id="form1">
						<div class="form-group">
							<label class="control-label">Name</label>
							<input type='text' class="form-control" value="<?php echo $oName; ?>" autocomplete="off" readonly/>
						</div>
						
						<div class="form-group">
							<label class="control-label">Amount Paying</label>
							<input type='text' class="form-control" value="<?php echo $transactionAmount; ?>" autocomplete="off" readonly/>
						</div>
						
						<div class="form-group">
							<label class="control-label">Convenience Fee</label>
							<input type='text' class="form-control" value="<?php echo $trasactionCharge; ?>" autocomplete="off" readonly/>
						</div>
						
						<div class="form-group">
							<label class="control-label">Total Amount</label>
							<input type='text' class="form-control" value="<?php echo $billingAmount; ?>" autocomplete="off" readonly/>
						</div>
						
						<input type='hidden' name='tKey' value='<?php echo $tKey; ?>' readonly />
						
						<div class="form-group">
							<div class="floatLeft"><a href='transaction?t=<?php echo $sKey; ?>'><button type="button" class="btn btn-danger">GO BACK</button></a></div>
							<div class="floatRight"><button type="submit" class="btn btn-success" name='proceed'>PROCEED WITH PAYMENT</button></div>
						</div>
					</form>
				<?php
			}
			else echo'<div class="alert alert-danger"><strong>Oh snap!</strong> A problem occured. Try again later.</div>';
		}
	}
	
	// Check if the user has clicked on proceed with payment button and act accordinglly
    elseif ( isset( $_POST['proceed'] ) )
    {
        require_once './views/paymentSourceForms.php';																		// Include the payment source select form
    }

    // Check if the user selected source of fund
    elseif ( isset( $_POST['selectSource'] ) )
    {
        $fKey = $_POST['selectSource']; $tKey = $_POST['tKey'];

        // Call the update source of fund record in the database
        $transactions -> updatePaymentSource( $fKey, $tKey );																    // Update the transaction record with the paymentsourcekey

        require_once './views/paymentSourceForms.php';																		    // Include the payment source select form

        if ( file_exists( "./views/paymentforms/$fKey.php" ) ) 														    // If the form for the payment source form exist
        { require_once './views/paymentforms/'.$fKey.".php"; }																    // Include the payment source form in the page
    }
    elseif ( isset( $_POST['verifyCard'])){
        $responseCode = $transactions -> processVerification( $_POST['tKey'] );
//        var_dump($responseCode);
        if(  $responseCode['code'] == 000 )																					    // Check the response of the transaction
        {
            // Add the responseCode to the transaction extra data
            $transactions -> updateVerificationTransactionExtraData( $responseCode = json_encode( array( 'responseCode' => $responseCode ) ), $_POST['tKey'] );

            $transactions -> updateVerificationStatus( $_POST['tKey'], 1 );															    // Transaction is successfull, update the status
//            sendTransactionMail($_POST['tKey']);																		    // Send the receipt to user by email
            $_SESSION['count'] = 1;
            redirect( 'verificationreceipt?t='.$_POST['tKey'] ); 																	// Redirect the user to the success receipt page
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
            $transactions -> updateVerificationTransactionExtraData( $responseCode = json_encode( array( 'responseCode' => $responseCode ) ), $_POST['tKey'] );
            redirect( 'verificationresponse?t='.$_POST['tKey'] );																	// Redirect the user to the response page
        }
    }
    // Check if the user clicked on paybow
    elseif ( isset( $_POST['payNow'] ) )
    {
        // Add the transactions extra data to the database
        if( $transactions -> updateTransactionExtraData( json_encode( $_POST ), $_POST['tKey'] ) === TRUE )
        {
            $responseCode = $transactions -> processPayment( $_POST['tKey'] );												    // Process the payment and return the response code
//            var_dump($responseCode);
            if (strcmp($responseCode['code'],'Verification_Required') === 0)
            {
                ?>
                <div class="panel-body">
                    <form role="form" id="form1" method="post" action="" class="validate">
                        <div class="alert alert-danger"><strong>Unverified Card or Mobile Number!!!</strong> Please verify card/number before use!</div>
                        <p>Should you choose to verify Card/Mobile Number; A <strong>Non-Refundable amount</strong> will be debitted from your payment source</p>
                        <p>You will be required to confirm the amount debitted before you can complete any transaction with your card/mobile number</p>
                        <input type="hidden" name="tKey" value="<?php echo $_POST['tKey']; ?>" />
                        <div class="form-group">
                            <div class="floatRight"><button type="submit" name="verifyCard" id="verifyCard" class="btn btn-success">Verify Card/Mobile Number</button></div>
                            <div class="floatLeft"><button type="submit" name="proceed" class="btn btn-primary">Change Payment Source</button></div>
                        </div>
                    </form>
                </div>
                <?php
            }

            elseif(  $responseCode['code'] == 000 )																					    // Check the response of the transaction
            {
                // Add the responseCode to the transaction extra data
                $transactions -> updateTransactionExtraData( $responseCode = json_encode( array( 'responseCode' => $responseCode ) ), $_POST['tKey'] );

                $transactions -> updateStatus( $_POST['tKey'], 1 );															    // Transaction is successfull, update the status
                sendTransactionMail($_POST['tKey']);																		    // Send the receipt to user by email
                redirect( 'receipt?t='.$_POST['tKey'] ); 																	// Redirect the user to the success receipt page
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
                $transactions -> updateTransactionExtraData( $responseCode = json_encode( array( 'responseCode' => $responseCode ) ), $_POST['tKey'] );
                redirect( 'response?t='.$_POST['tKey'] );																	// Redirect the user to the response page
            }
        }
    }
		
	// Begin the main for
	else
	{
		?>
			<form class="validate" action="" method="post" role="form" id="form1">
				<div class="form-group">
					<label class="control-label">Enter Name/Organisation</label>
					<input type='text' class="form-control" name='oName' data-validate="required" placeholder='Enter name or organisation' required="" autocomplete="off" />
				</div>
				
				<div class="form-group">
					<label class="control-label">Enter amount</label>
					<input type='text' class="form-control" name='amountPaying' data-validate="required,number" placeholder='Enter amount' required="" autocomplete="off" />
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-success" name='continue'>CONTINUE</button>
				</div>
			</form>
		<?php
	}
?>