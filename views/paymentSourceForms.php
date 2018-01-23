<!-- Begin sign in form -->
<form class="validate form-horizontal form-groups-bordered" action="" method="post" role="form" id="form1">
	<select name="selectSource" id="selectSource" class="select2" data-allow-clear="true" data-placeholder="<?php if( !empty( $transactions -> grabSourceOfFundName( $_POST['tKey'] ) ) ) { echo "You are paying with " . $transactions -> grabSourceOfFundName( $_POST['tKey'] ); } else { echo "Select source of fund..."; } ?>">

        <option placeholder="Select source of fund..."></option>

        <!-- <option placeholder=""></option> -->

        <optgroup label="Sources of fund">
			<?php
				$cols = Array ( "paymentSourceName, paymentSourceLogo, paymentSourceKey" );
				$DatabaseHandler -> where( "paymentSourceStatus", 1 );
				$paymentSources = $DatabaseHandler -> get( "tlr_payment_sources" );
				foreach ( $paymentSources as $paymentSource )
				{
					?>
						<option value="<?php echo $paymentSource['paymentSourceKey']; ?>"><?php echo $paymentSource['paymentSourceName'];  ?></option>
					<?php
				}
			?>
		</optgroup>
	</select>
	<input type="hidden" name="tKey" value="<?php echo $_POST['tKey']; ?>" />
</form>
<!-- End sign in form -->