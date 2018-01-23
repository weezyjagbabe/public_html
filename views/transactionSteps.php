<div class="col-md-4">
	
	<div class="panel-group joined" id="accordion-test-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#step1" href="#step1" class="collapsed">
						1: Complete the service form
					</a>
				</h4>
			</div>
			<div id="step1" class="panel-collapse" style="height: <?php if ( empty( $_POST ) ) { echo "auto;"; } else{ echo "0px;"; } ?>">
				<div class="panel-body">
					<p class="centered">Complete the form on your left. Provide all neccessary information needed and continue to the next step.</p>
				</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#step2" href="#step2" class="collapsed">
						2: Confirm transaction details
					</a>
				</h4>
			</div>
			<div id="step2" class="panel-collapse" style="height: <?php if ( isset( $_POST['continue'] ) ) { echo "auto"; } else { echo "0px;"; } ?>">
				<div class="panel-body">
					<p class="centered">This step provide you with the neccessary information before you proceed. To make in changes, use the GO BACK button or proceed to the final step.</p> 
				</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#step3" href="#step3" class="collapsed">
						3: Select source and pay
					</a>
				</h4>
			</div>
			<div id="step3" class="panel-collapse" style="height: <?php if ( isset( $_POST['proceed'] ) || isset( $_POST['selectSource'] ) ) { echo "auto"; } else { echo "0px;"; } ?>">
				<div class="panel-body">
					<p class="centered">Select your source of fund from the drop menu and fill in the needed details and click on PAY NOW to complete your transaction.</p> 
					<p class="centered"><strong>NOTE: </strong> if you select any of the mobile money as your source of fund, make sure your phone screen is active.</p> 
				</div>
			</div>
		</div>
	</div>
	
</div>