<?php
require_once realpath('./config.php');

header( 'Content-Type: application/json' );

if ( !isset( $user ) ) {
	if ( !empty( $_POST ) && !empty( $_POST['username'] ) && !empty( $_POST['password'] ) ) {
		// Authenticate the user
		$response = SR_User::authenticate( $_POST['username'], $_POST['password'] );
		
		// Handle the response appropriately
		switch( $response ) {
			// Authentication sucessful
			case SR_AUTH_SUCCESS:
				// Log the user in
				$specified_user = new SR_User( $_POST['username'] );
				$login_response = $specified_user->login();
				
				// Handle the response appropriately
				switch( $login_response ) {
					// Login successful
					case SR_LOGIN_SUCCESS:
						echo json_encode( array( 'response' => 'success', 'userInfo' => array( 'username' => $specified_user->username, 'firstname' => $specified_user->firstname, 'lastname' => $specified_user->lastname ), 'content' => '<p>Thanks for being awesome!</p><div class="blue-button"><input class="blue-button-inner" type="button" value="log out" onclick="location.href=\'./logout\';" /></div>' ) );
						break;
					
					// Login unsuccessful (SQL error)
					case SR_LOGIN_ERR_SQL:
						echo json_encode( array( 'response' => 'error' ) );
						break;
				}
				
				break;
			
			// Incorrect username/password
			case SR_AUTH_INVALID:
				echo json_encode( array( 'response' => 'failure' ) );
				break;
			
			// SQL Error
			case SR_AUTH_ERR_SQL:
			
			// LDAP Error
			case SR_AUTH_ERR_LDAP:
			
			// Generic Error
			default:
				echo json_encode( array( 'response' => 'error' ) );
				break;
		}
	} else {
		echo json_encode( array( 'response' => 'failure' ) );
	}
} else {
	if ( $user->loggedIn() ) {
		echo json_encode( array( 'response' => 'multiple' ) );
	}
}
