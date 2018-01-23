<?php
	$pageName = "Home";																					// Set the page name
	require_once './controllers/includeFiles.php';														// Include all the files needed for this page

?>
	<!-- Begin page body -->
	<body class="page-body" data-url="">
		
		<!-- Begin page content wrapper -->
		<div class="page-container horizontal-menu">

			<!-- Begin page main contents -->
			<div class="main-content">
				<!-- Begin page header -->	
				<?php
					require_once './views/pageHeader.php';												// Include the page header
				?>
				<!-- End page header -->

				<!-- Begin page name and description -->
				<h2>theteller - <span>your payment hub</span></h2>
				<em>Use theteller for all your financial transactions such as invoice payment, Bill payment, Fees payments and paying for all level ticket – Movies and Events and in addition to Mobile Airtime Top-Up.</em>
				<hr />
				<!-- End page name and description -->
				
				<div class="row">
					
					<!-- Begin left side contents -->
					<div class="col-md-8">
						
						<!-- Begin sliders -->
						<ul id="slider-banners">
							<li><a href="#slide1"><img src="./models/images/sliders/bg1.jpg" ></a></li>
							<li><a href="#slide2"><img src="./models/images/sliders/bg2.jpg" ></a></li>
							<li><a href="#slide3"><img src="./models/images/sliders/bg3.jpg" ></a></li>
							<li><a href="#slide4"><img src="./models/images/sliders/bg4.jpg" ></a></li>
						</ul>
						<!-- End sliders -->
						
					</div>
					<!-- End left side contents -->
					
					<!-- Begin right side contents -->
					<div class="col-md-4">
						<ul id="rigHome">
							<?php
								if( $UserClass -> userIsLoggedin() )
								{
									?>
									    <li>
									        <a class="rigHome-cell" href="profile">
									            <img class="rigHome-img" src="./models/images/others/profile.jpg">
									            <span class="rigHome-overlay"></span>
									            <span class="rigHome-text">View and update your login account here!</span>
									        </a>
									    </li>
									    <li>
									        <a class="rigHome-cell" href="history">
									            <img class="rigHome-img" src="./models/images/others/history.jpg">
									            <span class="rigHome-overlay"></span>
									            <span class="rigHome-text">Track the history of all your transaction on theteller!</span>
									        </a>
									    </li>
								    <?php
								}
								
								else 
								{
									?>
									    <li>
									        <a class="rigHome-cell" href="signup">
									            <img class="rigHome-img" src="./models/images/others/signup.jpg">
									            <span class="rigHome-overlay"></span>
									            <span class="rigHome-text">Don't have account yet? Sign Up!</span>
									        </a>
									    </li>
									    <li>
									        <a class="rigHome-cell" href="signin">
									            <img class="rigHome-img" src="./models/images/others/signin.jpg">
									            <span class="rigHome-overlay"></span>
									            <span class="rigHome-text">Already have an account? Sign In!</span>
									        </a>
									    </li>
								    <?php	
								}
							?>
							<li>
						        <a class="rigHome-cell" href="services">
						            <img class="rigHome-img" src="./models/images/others/makepayment.jpg">
						            <span class="rigHome-overlay"></span>
						            <span class="rigHome-text">Check all the services on theteller.net!</span>
						        </a>
						    </li>
						    <li>
						        <a class="rigHome-cell" href="services?t=gblyRXwb9PGRyEy">
						            <img class="rigHome-img" src="./models/images/others/paybills.jpg">
						            <span class="rigHome-overlay"></span>
						            <span class="rigHome-text">Pay your bills online today with theteller.net!</span>
						        </a>
						    </li>
						    <li>
						        <a class="rigHome-cell" href="services?t=etFF86WXDMuGexK">
						            <img class="rigHome-img" src="./models/images/others/fundtransfer.jpg">
						            <span class="rigHome-overlay"></span>
						            <span class="rigHome-text">Transfer money to friends and family like never before!</span>
						        </a>
						    </li>
						    <li>
						        <a class="rigHome-cell" href="services?t=d7xEbj0Xvr5S2Mq">
						            <img class="rigHome-img" src="./models/images/others/topup.jpg">
						            <span class="rigHome-overlay"></span>
						            <span class="rigHome-text">24/7 instant airtime and data purchase!</span>
						        </a>
						    </li>
						</ul>
						
						<div class="panel-body2 curvebottomLeftAndRight">
							<h1 style="font-size: 20px;">theteller - Your payment hub</h1>
							<p style="font-size: 12px; line-height: 20px;">theteller is a service that seeks to revolutionaries the financial transactions such as invoice, Bill, Fees payments and paying for all level ticket – Movies and Events and in addition to Mobile Airtime Top-Up. theteller gives unlimited access to your funds and control over your business financial transaction and at own convenient and at your comfort.</p>
						</div>
					</div>
					<!-- End right side contents -->
					
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
<!-- Begin SSL Certificae logo -->
<div style="    position: fixed; _position: absolute; bottom: 0px; right: 0px; _top: expression(document.documentElement.scrollTop+document.documentElement.clientHeight-this.clientHeight); _left: expression(document.documentElement.scrollLeft + document.documentElement.clientWidth - offsetWidth);">
	<script language="JavaScript" type="text/javascript">
		TrustLogo("https://www.theteller.net/models/images/comodo_secure_seal_100x85_transp.png", "SC5", "none");
	</script>
	<!-- <a href="https://ssl.comodo.com/ev-ssl-certificates.php" id="comodoTL">EV SSL</a> -->
</div>
<!-- End SSL Certificae logo -->