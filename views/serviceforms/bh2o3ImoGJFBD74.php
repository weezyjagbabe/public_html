<?php
	require_once './models/classes/intAirtimeAPI.php';											// Include the user controller file
	$transactionDesc = "International Airtime => theteller => PaySwitch Company Limited";		// Set the transaction description
	
	// Check if the user submitted the form and show the summary form
	if ( isset( $_POST['continue'] ) ) 
	{
		$phoneNumber			=	$_POST['phoneNumber'];
		
		// Check if the $phoneNumber is empty
		if ( ctype_digit( $phoneNumber ) === FALSE ) 
		{
			// Echo the error and show the form again
			echo'<div class="alert alert-danger"><strong>Oh snap!</strong> Enter only numbers!</div>';
			?>
				<form class="validate" action="" method="post" role="form" id="form1">
					<div class="form-group">
						<label class="control-label">Phone Number</label>
						<input type='text' class="form-control" name='phoneNumber' data-validate="required"  placeholder='Enter phone number in international format' required="" autocomplete="off" />
					</div>
						
					<div class="form-group">
						<button type="submit" class="btn btn-success" name='continue'>CONTINUE</button>
					</div>
				</form>
			<?php
		}
		
		// Check if the $phoneNumber is empty
		elseif ( $validation -> checkRequired( $phoneNumber ) ) 
		{
			// Echo the error and show the form again
			echo'<div class="alert alert-danger"><strong>Oh snap!</strong> Enter a number. Number should be in international format!</div>';
			?>
				<form class="validate" action="" method="post" role="form" id="form1">
					<div class="form-group">
						<label class="control-label">Phone Number</label>
						<input type='text' class="form-control" name='phoneNumber' data-validate="required"  placeholder='Enter phone number in international format' required="" autocomplete="off" />
					</div>
						
					<div class="form-group">
						<button type="submit" class="btn btn-success" name='continue'>CONTINUE</button>
					</div>
				</form>
			<?php
		}
		
		// Check if the first digit of the number is 0
		elseif ( substr( $phoneNumber, 0, 1 ) == 0 ) 
		{
			// Echo the error and show the form again
			echo'<div class="alert alert-danger"><strong>Oh snap!</strong> The phone number should be in international format!</div>';
			?>
				<form class="validate" action="" method="post" role="form" id="form1">
					<div class="form-group">
						<label class="control-label">Phone Number</label>
						<input type='text' class="form-control" name='phoneNumber' data-validate="required"  value="<?php echo $phoneNumber; ?>" required="" autocomplete="off" />
					</div>
						
					<div class="form-group">
						<button type="submit" class="btn btn-success" name='continue'>CONTINUE</button>
					</div>
				</form>
			<?php
		}
		
		// Check if the first digit of the number is 0
		elseif ( strlen( $phoneNumber ) > 15 ) 
		{
			// Echo the error and show the form again
			echo'<div class="alert alert-danger"><strong>Oh snap!</strong> The phone number cannot be more than 15 characters!</div>';
			?>
				<form class="validate" action="" method="post" role="form" id="form1">
					<div class="form-group">
						<label class="control-label">Phone Number</label>
						<input type='text' class="form-control" name='phoneNumber' data-validate="required"  value="<?php echo $phoneNumber; ?>" required="" autocomplete="off" />
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
			if ( $transactionKey = $transactions -> addTransaction( $sKey, $phoneNumber, NULL, $transactionDesc, $transactionExtraData = NULL ) ) 
			{
				$DatabaseHandler = new DatabaseHandler();
				$cols = Array ( "serviceName, companyName, serviceKey, providerKey" );
				$DatabaseHandler -> where( 'transactionKey', $transactionKey );
				$transactions = $DatabaseHandler -> get( 'tlr_transactions' );
				if ( $DatabaseHandler -> count > 0 )
				{
					foreach ( $transactions as $transaction ) 
					{
						$transactionRRN 	=	$transaction['transactionRRN'];
						$transactionSRN 	=	$transaction['transactionSRN'];
					} 
				}
				
				// Grab the details for the phone number entered
				$response 	= $intAirtimeAPI->grabNumberInfo( $transactionSRN, $transactionRRN );
				$price 		= $response["pricing"]["price"];		
				$credit 	= $response["pricing"]["credit"];
	
				foreach ( $response["info"] as $key => $value ) 
				{
					if ( $key == "network" )		{ $networkType 		= $key; 		$networkName 			= $value; }
					if ( $key == "number" )			{ $recipientNumber  = "number";		$recipientNumberValue 	= $value; }
					if ( $key == "currency" )		{ $currencyType 	= $key; 		$currencyValue  		= $value; }
					if ( $key == "operatorid" )		{ $operatoridType   = "operatorid";	$operatoridValue 		= $value; }
				}
						
				?>
					<form class="validate" action="" method="post" role="form" id="form1">
						<div class="form-group">
							<label class="control-label">Recipient Network</label>
							<select name="airtimeAmount" id="airtimeAmount" class="form-control" data-validate="required">
								<option>Choose the amount of airtime you want to purchase</option>
								<?php
									$length = sizeof( $price );
									for ( $i = 0; $i < $length; $i++ ) 
									{
										?>
											<option data-credit="<?php echo $airtimeAmount = $credit[$i]; ?>" value='<?php echo "GHS" . " " . round( $price[$i] * getcurrentCediExchangeRate(), 2 ); ?>'><?php echo $currencyValue . " " . $credit[$i]; ?></option>
										<?php 
									}
								?>
							</select>
						</div>
						
						<div class="form-group">
							<input type='text' class="form-control" id='billingAmount' name='billingAmount' data-validate="required" placeholder='Total amount to pay' readonly required="" autocomplete="off" />
						</div>
							
						<input type='hidden' id='creditAmount' name='creditAmount' value='' readonly />
						<input type='hidden' name='transactionRRN' value='<?php echo $transactionRRN; ?>' readonly />
						<input type='hidden' name='operatoridValue' value='<?php echo $operatoridValue; ?>' readonly />
						<input type='hidden' name='tKey' value='<?php echo $transactionKey; ?>' readonly />
						
						<div class="form-group">
							<input type='text' class="form-control" id='billingAmount' name='phoneNumber' data-validate="required" value='<?php echo $recipientNumberValue; ?>' readonly required="" autocomplete="off" />
						</div>
						
						<div class="form-group">
							<input type='text' class="form-control" name='phoneNumber' data-validate="required" value='<?php echo $recipientNumberValue; ?>' readonly required="" autocomplete="off" />
						</div>
						
						<div class="form-group">
							<input type='text' class="form-control" name='networkType' data-validate="required" value='<?php echo $networkName; ?>' readonly required="" autocomplete="off" />
						</div>
	
						<div class="form-group">
							<div class="floatLeft"><a href='transaction?t=<?php echo $sKey; ?>'><button type="button" class="btn btn-danger">GO BACK</button></a></div>
							<div class="floatRight"><button type="submit" class="btn btn-success" name='proceed'>PROCEED WITH PAYMENT</button></div>
						</div>
					</form>
				<?php
			} 
			
			else 
			{
				echo'<div class="alert alert-danger"><strong>Oh snap!</strong> A problem occured. Try again later.</div>';
			}
		}
	}
	
	// Check if the user has clicked on proceed with payment button and act accordinglly
	elseif ( isset( $_POST['proceed'] ) ) 
	{
		// Check if the user selected any amount
		if( $validation -> checkRequired( $_POST['airtimeAmount'] ) || $_POST['creditAmount'] == 0.00 || empty( $_POST['creditAmount'] ) ) 
		{
			echo'<div class="alert alert-danger"><strong>Oh snap!</strong> Please choose the amount of airtime!</div>'; 
			
			// Grab the details for the phone number entered
			$response 	= $intAirtimeAPI -> grabNumberInfo( $_POST['phoneNumber'], str_shuffle( $_POST['transactionRRN'] ) );
			
			$price 		= $response["pricing"]["price"];		
			$credit 	= $response["pricing"]["credit"];

			foreach ( $response["info"] as $key => $value ) 
			{
				if ( $key == "network" )		{ $networkType 		= $key; 		$networkName 			= $value; }
				if ( $key == "number" )			{ $recipientNumber  = "number";		$recipientNumberValue 	= $value; }
				if ( $key == "currency" )		{ $currencyType 	= $key; 		$currencyValue  		= $value; }
				if ( $key == "operatorid" )		{ $operatoridType   = "operatorid";	$operatoridValue 		= $value; }
			}
					
			?>
				<form class="validate" action="" method="post" role="form" id="form1">
					<div class="form-group">
						<label class="control-label">Recipient Network</label>
						<select name="airtimeAmount" id="airtimeAmount" class="form-control" data-validate="required">
							<option>Choose the amount of airtime you want to purchase</option>
							<?php
								$length = sizeof( $price );
								for ( $i = 0; $i < $length; $i++ ) 
								{
									?>
										<option data-credit="<?php echo $airtimeAmount = $credit[$i]; ?>" value='<?php echo "GHS" . " " . round( $price[$i] * getcurrentCediExchangeRate(), 2 ); ?>'><?php echo $currencyValue . " " . $credit[$i]; ?></option>
									<?php 
								}
							?>
						</select>
					</div>
					
					<div class="form-group">
						<input type='text' class="form-control" id='billingAmount' name='billingAmount' data-validate="required" placeholder='Total amount to pay' readonly required="" autocomplete="off" />
					</div>
						
					<input type='hidden' id='creditAmount' name='creditAmount' value='' readonly />
					<input type='hidden' name='transactionRRN' value='<?php echo $transactionRRN; ?>' readonly />
					<input type='hidden' name='operatoridValue' value='<?php echo $operatoridValue; ?>' readonly />
					<input type='hidden' name='tKey' value='<?php echo $transactionKey; ?>' readonly />
					
					<div class="form-group">
						<input type='text' class="form-control" id='billingAmount' name='phoneNumber' data-validate="required" value='<?php echo $recipientNumberValue; ?>' readonly required="" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<input type='text' class="form-control" name='phoneNumber' data-validate="required" value='<?php echo $recipientNumberValue; ?>' readonly required="" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<input type='text' class="form-control" name='networkType' data-validate="required" value='<?php echo $networkName; ?>' readonly required="" autocomplete="off" />
					</div>

					<div class="form-group">
						<div class="floatLeft"><a href='transaction?t=<?php echo $sKey; ?>'><button type="button" class="btn btn-danger">GO BACK</button></a></div>
						<div class="floatRight"><button type="submit" class="btn btn-success" name='proceed'>PROCEED WITH PAYMENT</button></div>
					</div>
				</form>
			<?php
		}
		
		// Generate a reserved ID for the transaction
		elseif ( $reserve_id = $intAirtimeAPI->ReservedID( str_shuffle( $_POST['transactionRRN'] ) ) )
		{
			$tKey =	$_POST['tKey'];
			$transactionExtraData = json_encode( array( 'reserve_id' => $reserve_id, 'operatoridValue' => $_POST['operatoridValue'], 'airtimeAmount' => $_POST['airtimeAmount'], 'creditAmount' => $_POST['creditAmount'] ) );
			
			// Send the details into the database
			$DatabaseHandler 	= new DatabaseHandler();
			$Data 				= Array ( 'transactionAmount' => substr( ( $_POST['billingAmount'] ), 3 ),  'billingAmount' => substr( ( $_POST['billingAmount'] ), 3 ), 'transactionExtraData' => $transactionExtraData );
			$DatabaseHandler 	-> where ( 'transactionKey', $tKey );
			if( $DatabaseHandler -> update ( 'tlr_transactions', $Data ) == TRUE ) 
			{
				// Redirect user to choose source of fund page
				require_once './views/paymentSourceForms.php';
			} 
			
			else { echo'<div class="alert alert-danger"><strong>Oh snap!</strong> A problem occured. Try again later.</div>'; }
		}
	}
		
	// Begin the main for
	else
	{
		?>
			<form class="validate" action="" method="post" role="form" id="form1">
				<div class="form-group">
					<label class="control-label">Phone Number</label>
					<input type='text' class="form-control" name='phoneNumber' data-validate="required"  placeholder='Enter phone number in international format' required="" autocomplete="off" />
				</div>
					
				<div class="form-group">
					<button type="submit" class="btn btn-success" name='continue'>CONTINUE</button>
				</div>
			</form>
		<?php
	}
?>

<script>
	$('#airtimeAmount').change(function()
    {
	    $('#billingAmount').val($(this).val());
	    var this_credit = $( 'option:selected', this ).attr( 'data-credit' );
	    $( '#creditAmount' ).val( this_credit );
	});
</script>