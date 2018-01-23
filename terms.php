<?php
	$pageName = "Terms Conditions";																		// Set the page name
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
					require_once './views/pageHeader.php';													// Include the page header
				?>
				<!-- End page header -->
				
				<!-- Begin page name and description -->
				<h3><?php echo $pageName; ?></h3>
				<em>Find out all about our terms, policies, disclaimer, terms of use, and refund policies.</em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8">
							<p>Welcome to the <strong>theteller.net</strong>   By using the <strong>theteller.net</strong> YOU AGREE TO BE BOUND BY ITS CONDITIONS OF USE (explained below), Privacy Policy and all disclaimers and terms and conditions that appear elsewhere on the <strong>theteller.net</strong> References to <strong>theteller.net</strong> herein refer to theteller as a product of PaySwitch Company Limited. <strong>theteller.net</strong> reserves the right to make changes to <strong>theteller.net</strong> and its (a) Conditions of Use, (b) <a href="privacy-policy">Privacy Policy</a>, (c) <a href="refund-policy">Refund Policy</a> and (d) <a href="chargeback-policy"> Chargeback Policy</a> at any time (a, b, c and d are all available on <strong>theteller.net</strong>). Each time you use <strong>theteller.net</strong>, you should visit and review the then current Conditions of Use, Privacy, Refund and Chargeback Policies that apply to your transactions and use of <strong>theteller.net</strong>. If you are dissatisfied with <strong>theteller.net</strong>, its content or Conditions of Use, you agree that your sole and exclusive remedy is to discontinue using <strong>theteller.net</strong>. Tampering with <strong>theteller.net</strong>, misrepresenting the identity of a user, or conducting fraudulent activities on <strong>theteller.net</strong> is prohibited.</p>
				
							<h3>Disclaimer and Limitation of Liability</h3>
							<p>By using <strong>theteller.net</strong>, you expressly agree that use of <strong>theteller.net</strong> is at your sole risk. <strong>theteller.net</strong> is provided on an "as is" and "as available" basis. Neither theteller, nor any of its associates, including but not limited to its directors, employees, agents, designers, contractors, merchants (collectively, "Associates") warrant that use of <strong>theteller.net</strong> will be uninterrupted or error-free. Under no circumstances shall theteller or its Associates be liable for any direct, indirect, incidental, special or consequential damages that result from your use of or inability to use <strong>theteller.net</strong>, including but not limited to your reliance, on any information obtained from <strong>theteller.net</strong> that results in mistakes, omissions, interruptions, deletion or corruption of files, viruses, delays in operation or transmission, or any failure of performance. The foregoing limitation shall apply in any action, whether in contract, tort or any other claim, even if an authorized representative of theteller has been advised of or should have knowledge of the possibility of such damages. You hereby acknowledge that this paragraph shall apply to all content, merchandise and services available through <strong>theteller.net</strong></p>
							
							<h3>Pricing Policy</h3>
							<p><strong>theteller</strong> may charge a small convenience fee for certain services. Other services may be offered at face value with no additional charge from <strong>theteller</strong>. Convenience fees are subject to change.</p>
							
							<h3>Paying for Your Order</h3>
							<p><strong>theteller</strong> accepts multiple payment options. Payment options include but are not limited to Visa®, MasterCard®, MTN mobile money®, Airtel money® and Tigo cash®. Since all payments are electronic and most orders are digitally delivered, credit and debit cards are generally charged at the time you make a payment or initiate an order.</p>
							
							<h3>Validating Your Payments and / or Order</h3>
							<p>After you initiate a payment or place an order using our shopping cart, we will validate the information you give us, by verifying your method of payment. We reserve the right to reject any payment you initiate and / or order you place with us, and / or to limit quantities on any order, without giving any reason. If we reject your payment or order, we will attempt to notify you on <strong>theteller</strong> or using the e-mail address or phone number in your account. Your credit or debit card will normally not be charged if we reject an initiated payment or order and will only be charged by the appropriate amount if we limit an order.</p>
							
							<h3>Refund Policy</h3>
							<p>All sales made through theteller.net are subject to <strong>theteller’s</strong> refund policy. For a complete explanation of the refund policy, please see <a href="refund-policy">Refunds section</a>.</p>
							
							<h3>Termination of Use</h3>
							<p><strong>theteller</strong> may, in its sole discretion, terminate your account or your use of <strong>theteller.net</strong> at any time. You are personally liable for any payments you initiate orders that you place and charges that you incur prior to termination. <strong>theteller</strong> reserves the right to change, suspend or discontinue all or any aspects of theteller.net at any time without prior notice.</p>
							
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
		<?php
			require_once './controllers/pageScripts.php';												// Include the page scripts
		?>
		<!-- End page scripts -->	

	</body>
	<!-- End page body -->

</html>