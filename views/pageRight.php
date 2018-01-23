<div class="col-sm-4">
	
	<!-- Begin user actions -->
	<div class="panel">
		<ul id="rigHome">
			<?php
				if( $UserClass -> userIsLoggedin() )
				{
					?>
					    <li>
					        <a class="rigHome-cell" href="profile">
					            <img class="rigHome-img curveTopLeft" src="./models/images/others/profile.jpg">
					            <span class="rigHome-overlay"></span>
					            <span class="rigHome-text">View and update your login account here!</span>
					        </a>
					    </li>
					    <li>
					        <a class="rigHome-cell" href="history">
					            <img class="rigHome-img curveToprigHomeht" src="./models/images/others/history.jpg">
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
					            <img class="rigHome-img curveToprigHomeht" src="./models/images/others/signup.jpg">
					            <span class="rigHome-overlay"></span>
					            <span class="rigHome-text">Don't have account yet? Sign Up!</span>
					        </a>
					    </li>
					    <li>
					        <a class="rigHome-cell" href="signin">
					            <img class="rigHome-img curveTopLeft" src="./models/images/others/signin.jpg">
					            <span class="rigHome-overlay"></span>
					            <span class="rigHome-text">Already have an account? Sign In!</span>
					        </a>
					    </li>
				    <?php	
				}
			?>
		    <li>
		        <a class="rigHome-cell" href="services">
		            <img class="rigHome-img curveTopRight" src="./models/images/others/makepayment.jpg">
		            <span class="rigHome-overlay"></span>
		            <span class="rigHome-text">Make an online payment no matter where you are!</span>
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
	<!-- End user actions -->
	
	<div class="panel">
		
	</div>
	
	<!-- Begin ad sliders -->
	<!-- <div class="panel">
		<ul id="slider-banners">
			<li><a href="#slide1"><img src="./models/images/ads/1.jpg" ></a></li>
			<li><a href="#slide2"><img src="./models/images/ads/2.jpg" ></a></li>
			<li><a href="#slide3"><img src="./models/images/ads/3.jpg" ></a></li>
			<li><a href="#slide4"><img src="./models/images/ads/4.jpg" ></a></li>
		</ul>
	</div> -->
	<!-- End ad sliders -->
	
</div>