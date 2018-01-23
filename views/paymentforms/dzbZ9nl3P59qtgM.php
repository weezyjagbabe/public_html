<?php
	// Grab the transaction details
	$DatabaseHandler = new DatabaseHandler();
	$cols = Array ( "billingAmount, paymentSourceName" );
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
		<div class='row'>
			<form class='validate' action='' method='post' role='form' id='form2' autocomplete="off">
				<div class='panel-body'>
					<div class='form-group'>
						<label class='control-label'>Enter Card Number</label>
						<input type='text' class='form-control' name='cardNumber' id="number" placeholder='Enter your Visa card number' required='' autocomplete='off' />
					</div>
					
					<div class='form-group'>
						<label class='control-label'>Amount</label>
						<input type='text' class='form-control' name='amount' value='<?php echo $billingAmount; ?>' readonly='' autocomplete='off' />
					</div>
					
					<div class='row'>
						<div class='form-group'>
							<div class='col-md-4'>
								<div class='form-group'>
									<label class='control-label'>Month</label>
									<select class='form-control' name='expMonth' required='' autocomplete="off">
										<option>----</option>
				                        <option value='01'>01 - Jan</option>
				                        <option value='02'>02 - Feb</option>
				                        <option value='03'>03 - Mar</option>
				                        <option value='04'>04 - Apr</option>
				                        <option value='05'>05 - May</option>
				                        <option value='06'>06 - Jun</option>
				                        <option value='07'>07 - Jul</option>
				                        <option value='08'>08 - Aug</option>
				                        <option value='09'>09 - Sep</option>
				                        <option value='10'>10 - Oct</option>
				                        <option value='11'>11 - Nov</option>
				                        <option value='12'>12 - Dec</option>
									</select>
								</div>
							</div>
							
							<div class='col-md-4'>
								<label class='control-label'>Year</label>
								<select class='form-control' name='expYear' required='' autocomplete="off">
									<option>----</option>
									<option value='16'>2016</option>
									<option value='17'>2017</option>
									<option value='18'>2018</option>
									<option value='19'>2019</option>
									<option value='20'>2020</option>
									<option value='21'>2021</option>
									<option value='22'>2022</option>
									<option value='23'>2023</option>
									<option value='24'>2024</option>
									<option value='25'>2025</option>
									<option value='26'>2026</option>
									<option value='27'>2027</option>
									<option value='28'>2028</option>
									<option value='29'>2029</option>
									<option value='30'>2030</option>
								</select>
							</div>
							
							<div class='col-md-4'>
								<div class='form-group'>
									<label class='control-label'>CVV / CVV2</label>
									<input type='password' class='form-control' name='cvv' placeholder="Enter CVV / CVV2" autocomplete='off' />
								</div>
							</div>
						</div>
					</div>
					
					<div class='row'>
						<div class='col-md-12'>
							<br />
							<div class='form-group'>
								<input type='checkbox' name='termsAgreement' class='checkbox' required autocomplete="off" />
								<p class='agree'> By checking this box, I have agreed to this service’s <a href='terms-conditions' target='_blank'> Terms and Conditions</a></p>
							</div>
							
							<div class='form-group'>
								<input type="hidden" name="tKey" value="<?php echo $tKey; ?>" autocomplete='off' />
								<input type="hidden" name="mode" value="visa" autocomplete='off' />
								<div class='floatLeft'><a id='tKey' href='cancel?t=<?php echo $tKey; ?>'><button type='button' class='btn btn-danger'>CANCEL</button></a></div>
								<div class='floatRight'><button type='submit' class='btn btn-success' value="payNow" name='payNow' id="payNow">PAY NOW</button></div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	<?php
?>