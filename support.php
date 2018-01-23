<?php
	require_once './models/classes/Configurations.php';														// Include the project configuration file 
	require_once './models/classes/DatabaseHandler.php'; 													// Include the Database Handler class
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Help and Support</title>
		
		<link rel="icon" type="image/png" href="models/images/favicon.png">
		
		<link rel="stylesheet" type="text/css" media="all" href="controllers/help-support/style.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
		
	<!-- Begin page body -->
	<body>
	
		<section class="container">
			<a href="home"><img class="logo" src="./models/images/TheTellerLogo.png" /></a>
			<h1>Search and resolve any issues</h1>
			<div class="search-info">
				<p>Having challenges with <strong>theteller</strong>? We have a solution for you. Why don't you search for the issue and have them solved here and now.</p>
			</div>
			<form class="search" method="get" action="results">
				<div class="box">
					<div class="container-4">
						<input type="search" id="search" placeholder="Type and hit enter key..." />
						<button class="icon"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</form>
			<div class="search-info"><p>You can also contact our support desk via <?php echo COMPANYNUMBER; ?></p></div>
		</section>

	</body>
	<!-- End page body -->
	
</html>