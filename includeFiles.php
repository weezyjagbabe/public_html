<?php
	require_once './models/classes/Configurations.php';														// Include the project configuration file 
	
	require_once './models/classes/DatabaseHandler.php'; 													// Include the Database Handler class
	require_once './models/classes/DataObjects.php'; 														// Include the Data Objects
	require_once './models/classes/EmailClass.php'; 														// Include the emailing class
		
	require_once './models/classes/Validations.php';														// Include the Validation class 
	require_once './models/functions/functions.php';														// Include the functions file
	
	require_once './controllers/userController.php';														// Include the user controller file
	
	// If the transactions is on the transactions page, do the following
	if ( $pageName === "Transaction" ) 
	{
		if( isset( $_GET['t'] ) ) { $sKey = $_GET['t']; } else { redirect( 'services' ); } 					// If there is a serviceKey grab it else redirect to services page
		if( !$UserClass -> userIsLoggedin() ) { redirect( 'signin' ); }										// Redirect to signin page if user is not logged in
		$validation -> validateParam( $sKey, "tlr_services", "serviceKey" );								// Validate parameters and proceed
		require_once './models/classes/transactionsClass.php';												// Include the user transactions class file
		
		if ( isset ( $_POST['ResponseCode']) ) {var_dump($response); die; }			// Check if the has been a respondCode for GHIPPS and act
		// if ( isset ( $_POST['ResponseCode']) ) { $response = $Ghipps -> isResponsible( $_POST ); var_dump($response); }			// Check if the has been a respondCode for GHIPPS and act
		
		// Grab the service details from the database
		$cols = Array ( "serviceName" );																	// Set the column to grab
		$DatabaseHandler -> where( "serviceKey", $sKey );													// Specify which record
		$services = $DatabaseHandler -> get( "tlr_services" );												// Specify which table
		foreach ( $services as $service ) { $serviceName = $service['serviceName']; }						// Filter the records and assign them to variable names
	}
	
	// If the page is transaction receipt, do the following
	if ( $pageName === "Transaction Receipt" || $pageName === "Transaction Response" ) 
	{
		if( isset( $_GET['t'] ) ) { $tKey = $_GET['t']; } else { redirect( '404' ); } 						// If there is a serviceKey grab it else redirect to services page
		if( !$UserClass -> userIsLoggedin() ) { redirect( 'signin' ); }										// Redirect to signin page if user is not logged in
		$validation -> validateParam( $tKey, "tlr_transactions", "transactionKey" );						// Validate parameters and proceed
		require_once './models/classes/transactionsClass.php';												// Include the user transactions class file
		
		if( !$UserClass -> userIsLoggedin() ) { $UserClass -> redirect( 'sign-in' ); }	 					// Redirect to signin page if user is not logged in
	}
	
	if ( $pageName === "Service Provider" ) 																// If the user is on the service providers page
	{
		if( isset( $_GET['t'] ) ) { $pKey = $_GET['t']; } else { redirect( '404' ); } 						// If there is a providerKey, grab it, else redirect to services page
		$validation -> validateParam( $pKey, "tlr_services_providers", "providerKey" );						// Validate parameters and proceed
		
		// Grab the providers details from the database
		$cols = Array ( "companyName" );																	// Set the column to grab
		$DatabaseHandler -> where( "providerKey", $pKey );													// Specify which record
		$provider = $DatabaseHandler -> getOne( "tlr_services_providers" );									// Specify which table
		$companyName = $provider['companyName'];															// Filter the records and assign them to variable names
	}
	
	if ( $pageName === "Services" ) 																		// If the user is on the services page
	{
		if( isset( $_GET['t'] ) ) 
		{
			$cKey = $_GET['t'];																				// If there is a categoryKey value, grab it
			$validation -> validateParam( $cKey, "tlr_categories", "categoryKey" );							// Validate parameters and proceed
			
			// Grab the providers details from the database
			$cols = Array ( "categoryName" );																// Set the column to grab
			$DatabaseHandler -> where( "categoryKey", $cKey );												// Specify which record
			$category = $DatabaseHandler -> getOne( "tlr_categories" );										// Specify which table
			$categoryName = $category['categoryName'];														// Filter the records and assign them to variable names
		}
	}
	
	elseif ( $pageName === "Change Password" ) 
	{
		if( !$UserClass -> userIsLoggedin() ) { $UserClass -> redirect( 'signin' ); } 						// Redirect to signin page if user is not logged in		
	}
	
	elseif ( $pageName === "Sign In" || $pageName === "Sign Up" ) 
	{
		if( $UserClass -> userIsLoggedin() === TRUE ) { redirect( 'services' ); }							// Check if user is already logged in and redirect		
	}
	
	elseif ( $pageName === "Account Activation" ) 
	{
		if( $UserClass -> userIsLoggedin() === TRUE ) { redirect( 'services' ); }							// Check if user is already logged in and redirect
		if ( !isset( $_GET['userActivationCode'] ) ) { redirect( 'signin' ); }								// Check if there is no activation code and redirect
	}
	require_once './controllers/documentHeader.php';														// Include the document header