<nav class="navbar navbar-inverse" role="navigation">
	
	<!-- Begin logo area -->
	<div class="navbar-header">
		
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
		<!-- Begin logo -->
		<div class="navbar-brand">
			<a href="home"><img src="./models/images/logo@2x.png" width="100" alt="" /></a>
		</div>
		<!-- Begin logo -->
		
	</div>
	<!-- End logo area -->

	<!-- Begin navigations -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="entypo-home"></i> theteller <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="about"><i class="entypo-list"></i> About theteller</a></li>
					<li><a href="terms"><i class="entypo-cc-remix"></i> Terms & Conditions</a></li>
					<li><a href="policy"><i class="entypo-cog"></i> Privacy Policy</a></li>
					<li><a href="support"><i class="entypo-suitcase"></i> Help and support</a></li>
					<li><a href="faq"><i class="entypo-help"></i> Frequently Asked Quetions</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="entypo-bag"></i> Service Categories <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<?php
						$columns		= Array ( "categoryKey, categoryName" );
						$categories 	= $DatabaseHandler -> get ( "tlr_categories", null, $columns );
						if ( $DatabaseHandler -> count > 0 )
						foreach ( $categories as $category ) 
						{ 
							?>
								<li><a href="services?t=<?php echo $category['categoryKey']; ?>"><span><?php echo $category['categoryName']; ?></span></a></li>
							<?php
						}
					?>
				</ul>
			</li>
		</ul>
		
		<!-- Begin search form -->
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input class="form-control" placeholder="Search" type="text">
			</div>
			<button type="submit" class="btn btn-default">SEARCH</button>
		</form>
		<!-- End search form -->
		
		<!-- Begin user actions -->
		<ul class="nav navbar-nav navbar-right">
			<?php
				// If the user is logged in, show the user menu and options
				if( $UserClass -> userIsLoggedin() === TRUE )
				{
					$DatabaseHandler = new DatabaseHandler();
					$DatabaseHandler -> where ( "userKey", $_SESSION['userSession'] );
					$user = $DatabaseHandler -> getOne ( "tlr_users" );
					?>
						<li><a style="padding-right: 0; margin-right: 0;" href="profile">Welcome </a></li>
						<li class="dropdown">
							<a href="#" style="font-weight: bolder; padding-left: 5px;" class="dropdown-toggle" data-toggle="dropdown">
								<span><?php echo $user['userTitle'] . " " . $user['userLastName']; ?></span> <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="profile" style="font-weight: bolder; font-size: 12px;">
										<i class="entypo-user"></i>
										<?php echo $user['userTitle'] . " " . $user['userFirstName'] . " " . $user['userLastName']; ?>
									</a>
								</li>
								<li><a><i class="entypo-mail"></i> <?php echo $user['userEmail']; ?></a></li>
								<li><a href="history"><i class="entypo-list"></i> Transaction History</a></li>
								<li><a href="profile"><i class="entypo-pencil"></i> Edit Profile</a></li>
								<li><a href="change-password"><i class="entypo-cog"></i> Change Password</a></li>
								<li class="divider"></li>
								<li><a href="logout"><i class="entypo-logout"></i> Sign me out</a></li>
							</ul>
						</li>
					<?php
				}
				else
				{
					?>
						<li><a href="signin">Have an account?</a></li>
						<li class="dropdown">
							<a href="#" style="font-weight: bolder; padding-left: 5px;" class="dropdown-toggle" data-toggle="dropdown">
								<span>Sign In</span><b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li style="width: 350px;">
									<div class="panel-body">
										<form role="form" id="form1" method="post" action="" class="validate">
											
											<?php if( isset( $response ) ) { echo $response; } ?>
											
											<div class="form-group">
												<label class="control-label">Email</label>
												<input type="text" class="form-control" name="userEmail" data-validate="email,required" placeholder="Enter email" value="<?php if( isset( $userEmail ) ){ echo $userEmail; } ?>" required="" autocomplete="off" />
											</div>
											
											<div class="form-group">
												<label class="control-label">Choose Password</label>
												<input type="password" class="form-control" name="userPassword" data-validate="required" placeholder="Choose a password" required="" autocomplete="off" />
											</div>
							
											<div class="form-group"><button style="width: 100%;" type="submit" name="signIn" class="btn btn-success">SIGN IN NOW</button></div>
											
											<p><a href="forgot-password">Forgot password?</a> <span style="margin-left: 20px;">Don't have account? <a href="signup">Sign up</a></span></p>
										</form>
									</div>
								</li>
							</ul>
						</li>
					<?php
				}
			?>
		</ul>
		<!-- End user actions -->
		
	</div>
	<!-- End navigations -->

</nav>