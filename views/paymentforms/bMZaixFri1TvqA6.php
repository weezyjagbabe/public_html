<?php
	// Grab the transaction details
	$DatabaseHandler = new DatabaseHandler();
	$cols = Array ( "billingAmount, paymentSourceName, transactionRRN" );
	$DatabaseHandler -> where( 'transactionKey', $tKey );
	$transactions =	$DatabaseHandler -> get( 'tlr_transactions' );
	if ( $DatabaseHandler -> count > 0 )
	{
		foreach ( $transactions as $transaction ) 
		{
			$billingAmount		=	$transaction['billingAmount'];
		} 
	}
	
	// Create the form structure
	?>
		<div class="row">
			<form class='validate' action='' method='post' role='form' id='form2'>
				<div class='panel-body'>
					<div class="form-group">
						<label class='control-label'>Amount</label>
						<input type='text' class='form-control' name='amount' value='<?php echo $billingAmount; ?>' readonly='' autocomplete='off' />
					</div>
					
					<div class='form-group'>
						<input type='checkbox' name='termsAgreement' class='checkbox' required />
						<p class='agree'> By checking this box, I have agreed to this service’s <a href='terms-conditions' target='_blank'> Terms and Conditions</a></p>
					</div>
					
					<div class='form-group'>
						<input type="hidden" name="tKey" value="<?php echo $tKey; ?>" autocomplete='off' />
						<input type="hidden" name="mode" value="ghipps" autocomplete='off' />
						<div class='floatLeft'><a id='tKey' href='cancel?t=<?php echo $tKey; ?>'><button type='button' class='btn btn-danger'>CANCEL</button></a></div>
						<div class='floatRight'><button type='submit' class='btn btn-success' value="payNow" name='payNow' id="payNow">PAY NOW</button></div>
					</div>
				</div>
			</form>
		</div>
	<?php
?>