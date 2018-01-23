<?php
	class user extends dbObject 
	{
		protected $dbTable = "tlr_users";
		protected $dbFields = Array 
	    (
	        'userID' 			=> Array ('int'),
	        'userKey' 			=> Array ('text', 'required'),
			'userEmail' 		=> Array ('text', 'required'),
			'userTitle' 		=> Array ('/[a-zA-Z0-9 ]+/'),
			'userFirstName' 	=> Array ('/[a-zA-Z0-9 ]+/'),
			'userLastName' 		=> Array ('/[a-zA-Z0-9 ]+/'),
			'userPhone' 		=> Array ('int'),
			'userPassword' 		=> Array ('text'),
			'userGender' 		=> Array ('text'),
			'userDOB' 			=> Array ('datetime'),
			'userRegion' 		=> Array ('text'),
			'userCity' 			=> Array ('text'),
			'userResAddress' 	=> Array ('text'),
			'userStatus' 		=> Array ('int'),
			'userLastLogin' 	=> Array ('datetime'),
			'userLoginCount' 	=> Array ('int'),
			'dateCreated'		=> Array ('datetime'),
			'activationCode' 	=> Array ('text')
		);

		protected $timestamps = Array ( 'userDOB', 'userLastLogin', 'dateCreated' );
		protected $relations = Array 
		(
			'tlr_transactions' => Array 
			(
				"hasMany", "transactionKey", 'userKey'
			)
		);
	}
?>