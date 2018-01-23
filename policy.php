<?php
	$pageName = "Privacy Policy";																		// Set the page name
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
				<h3><?php echo $pageName; ?></h3>
				<em>Read full details on our privacy policy.</em>
				<hr />
				<!-- End page name and description -->
				
				<!-- Begin contents -->
				<div class="gallery-env">
					<div class="row">
						
						<!-- Begin page left -->
						<div class="col-sm-8">
							<p>We take your privacy seriously, and we want you to know how we collect, use, share and protect your information.</p>
				
							<p>This Privacy Policy tells you:</p>
							<ul style="margin: -10px 0 10px 30px; font-size: 13px; line-height: 25px;">
								<li>What information we collect</li>
								<li>How we use that information</li>
								<li>How we may share that information</li>
								<li>How we protect your information</li>
								<li>Your choices regarding your personal information</li>
							</ul>
							<p>We may post additional information if more details are needed to explain our privacy practices.</p>
							
							<h3>Information we collect</h3>
							<p>Information You Give Us</p>
							<p>We receive and may store any information you enter on our websites or provide through our mobile applications. For example, we collect information from you when you create an account, make a payment or use any of our services. The information we collect from you includes things like:</p>
							<ul style="margin: -10px 0 10px 30px; font-size: 13px; line-height: 25px;">
								<li>Your name</li>
								<li>Your phone number</li>
								<li>Your e-mail address</li>
								<li>Your Date of Birth</li>
								<li>Your Gender</li>
								<li>Location information</li>
							</ul>
							
							<h3>Automatic Information</h3>
							<p>Like many other electronic websites, we also collect information through cookies and other automated means. Cookies are commonly used by websites to save data on your computer. The information we collect from cookies may include your IP address, browser and device characteristics, referring URLs, and a record of your interactions with our website. We use cookies to create a more personalized electronic payment experience on our websites.</p>
							
							<h3>Location Information</h3>
							<p>Some of our websites and mobile applications may collect certain information such as the type of mobile device you're using. To allow any application to identify your location, you must enable this functionality through your mobile device's settings to allow the use of technologies such as Wi-Fi, GPS signals, cell tower position, or other technologies. <strong>theteller</strong> has no control over your device's settings.</p>
							
							<h3>HOW WE USE THE INFORMATION WE COLLECT</h3>
							<p>We use the information we collect for things like:</p>
							<ul style="margin: -10px 0 10px 30px; font-size: 13px; line-height: 25px;">
								<li>Fulfilling orders and requests for services or information</li>
								<li>Processing returns, exchanges and layaway requests</li>
								<li>Tracking and confirming online payments/orders</li>
								<li>Marketing and advertising products and services</li>
								<li>Conducting research and analysis</li>
								<li>Establishing and managing your accounts with us</li>
								<li>Communicating things like special events, sweepstakes, promotions and surveys</li>
								<li>Facilitating interactions with <strong>theteller</strong> and others, such as enabling you to e-mail a link to a friend</li>
								<li>Operating, evaluating and improving our business</li>
							</ul>
							
							<h3>Data Retention</h3>
							<p>We will retain your information for as long as your account is active or as needed to provide our services, comply with our legal obligations, resolve disputes, and enforce our agreement.</p>
							
							<h3>HOW WE SHARE THE INFORMATION WE COLLECT</h3>
							<p><strong>theteller</strong> does not sell, rent or trade your personal information to third parties. <strong>theteller</strong> may share your information with partner merchants to facilitate delivery of a service. We may share your information with partners to perform services on our behalf such as:</p>
							<ul style="margin: -10px 0 10px 30px; font-size: 13px; line-height: 25px;">
								<li>Updating customer accounts when a payment is done</li>
								<li>Scheduling and performing services</li>
								<li>Fulfilling subscription services</li>
								<li>In certain cases, we may be required to share personal information in response to a regulation, court order or subpoena.</li>
							</ul>
							<p>We may also share information when we believe it's necessary to comply with the law. We may also share information to respond to a government request or when we believe disclosure is necessary or appropriate to protect the rights, property or safety of theteller, our customers, or others; to prevent harm or loss; or in connection with an investigation of suspected or actual unlawful activity.</p>
							
							
							<h3>HOW WE PROTECT THE INFORMATION WE COLLECT</h3>
							<p><strong>theteller</strong>  uses reasonable security measures to protect the confidentiality of personal information under our control and appropriately limit access to it. <strong>theteller</strong>  cannot ensure or warrant the security of any information you transmit to us and you do so at your own risk. We use a variety of information security measures to protect your online transactions with us. Our website uses encryption technology, such as Secure Sockets Layer (SSL), to protect your personal information during data transport. SSL protects information you submit via our websites such as ordering information, including your name, email address and credit card number.</p>
			
							<h3>YOUR CHOICES REGARDING THE INFORMATION WE COLLECT</h3>
							<p>You may choose to:</p>
							<ul style="margin: -10px 0 10px 30px; font-size: 13px; line-height: 25px;">
								<li>Update and correct your personal information</li>
								<li>Cancel your account or request that we no longer use your information to provide you services</li>
							</ul>
							<p>To do any of these, let us know by one of these methods:</p>
							<ul style="margin: -10px 0 10px 30px; font-size: 13px; line-height: 25px;">
								<li>Follow the directions in a marketing e-mail or direct mail or mobile communication that you receive from us</li>
								<li>Call <strong>theteller</strong>  with your request and current contact information</li>
								<li>Send an e-mail with your request and current contact information to: <a href="mailto:ask@payswitch.com.gh">ask@payswitch.com.gh</a></li>
							</ul>
							
							<div style="text-align: center;">
								<p>Send a letter with your request and current contact information to our address below.</p>
								<p>
									PaySwitch Company Limited Unit 218, Roman Ridge Shopping Arcade 9 Sir Arku Korsah Road Roman Ridge<br />
									P. O. Box MP 820, Mamprobi - Accra, Ghana.
								</p>
							</div>
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