<?php
	$pageName = "Logout";																					// Set the page name
	
	require_once './models/classes/Configurations.php';														// Include the project configurations file
	require_once './models/functions/functions.php';														// Include the functions file
	require_once './controllers/userController.php';														// Include the user controller file
	require_once './controllers/documentHeader.php';														// Include the document header
	
	$UserClass -> logUserOut(); redirect( 'home' );															// Log the user out and redirect to home page
?>