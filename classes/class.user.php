<?php

// Prevent direct access
defined( '_SR_EXEC' ) or die( 'Restricted access' );

// This object throws exceptions with the following error codes:
// SR_USER_ERR_SQL = Error Loading User Information
// SR_USER_ERR_INVALID = Invalid User
class SR_User {
	
	// All of these properties are "protected" to allow for child class derivations in the future
	protected $id;
	protected $username;
	protected $firstname;
	protected $lastname;
	
	// Initializes a new user object with the specified user's information
	public function __construct( $criteria ) {
		$sqlobj =& SR_System::getDBO();
		
		// Build the query depending on the specified argument type
		$query	=	'
			SELECT		*
			FROM		' . SR_USERS_TABLE . '
			WHERE		username = "' . $sqlobj->sqlsafe( $criteria ) . '"
			OR			id = "' . $sqlobj->sqlsafe( $criteria ) . '"
			'
		;
		$userquery = $sqlobj->query( $query );
		
		if ( $sqlobj->hasError( $userquery ) ) {
			$sqlobj->submitErrorLog( $userquery, 'SR_User::__construct()' );
			throw new Exception( 'Could not load the user information!', SR_USER_ERR_SQL );
		}
		if ( $sqlobj->num_rows( $userquery ) != 1 ) {
			throw new Exception( 'The specified user does not exist!', SR_USER_ERR_INVALID );
		}
		
		$row = $sqlobj->getResultObject( $userquery )->fetch_object();
		$this->id				=	$row->id;
		$this->username			=	$row->username;
		$this->firstname		=	$row->firstname;
		$this->lastname			=	$row->lastname;
	}
	
	// Gets (creates if non-existent) a reference to a new user object that holds the logged-in user's information
	public static function &getInstance() {
		// Make sure the user is logged in
		if ( !isset( $_SESSION['login'] ) ) {
			throw new Exception( 'The user is not logged in.' );
		}
		
		static $instance;
		
		if ( !is_object( $instance ) ) {
			$class = __CLASS__;
			$instance = new $class( $_SESSION['uid'] );
			unset( $class );
			// Make sure the user is logged in
			if ( !$instance->isOnline() ) {
				throw new Exception( 'The user is not logged in.' );
			}
		}
		
		return $instance;
	}
	
	// Authenticates a user
	// Note: The function will lock out an account with MyComm access after 5 unsuccessful attempts.
	//       Since the MyComm system now uses LDAP (which is tied to OIT), locking out with MyComm
	//       will also lock out the AD account, unless OIT's lockout limit is greater than MyComm's.
	/* 
	   Status Codes:
	 
		SR_AUTH_ERR_LDAP - LDAP Error
		SR_AUTH_ERR_SQL - SQL Error
		SR_AUTH_SUCCESS - Success
		SR_AUTH_INVALID - Invalid credentials (username/password)
		SR_AUTH_DENIED - Access denied to MyComm (user not registered on MyComm)
		SR_AUTH_LOCKED - Account Locked
		 
	*/
	public static function authenticate( $username, $password ) {
		$config =& SR_System::getConfig();
		$sqlobj =& SR_System::getDBO();
		
		// Authenticate users
		$query	=	'
			SELECT		id
			FROM		' . SR_USERS_TABLE . '
			WHERE		username = :username
			AND			password = SHA1( :password )'
		;
		$sqlobj->createQuery( $query );
		$sqlobj->bind( ':username', $username );
		$sqlobj->bind( ':password', $password );
		$authenticatequery = $sqlobj->runQuery();
		
		// If an error occurred, append to the error log and return with an error code
		if ( $sqlobj->hasError( $authenticatequery ) ) {
			$sqlobj->submitErrorLog( $authenticatequery, 'SR_User::authenticate()' );
			return SR_AUTH_ERR_SQL;
		} elseif ( $sqlobj->num_rows( $authenticatequery ) == 1 ) {
			return SR_AUTH_SUCCESS;
		} else {
			return SR_AUTH_INVALID;
		}
		
	}
	
	// Logs the current user in
	/*
	   Returns: array( status code, redirect location )
	   
	   Status Codes:
	   
		SR_LOGIN_ERR_SQL - SQL Error
		SR_LOGIN_SUCCESS - Success
		SR_LOGIN_PARTSUCCESS - Success, with warning (previous location retrieval problem)
	*/
	public function login() {
		
		// Make sure the user is not already logged in
		if ( !$this->isOnline() ) {
		
			$sqlobj =& SR_System::getDBO();
			
			// Keep track of the return value
			$ret_val = SR_LOGIN_SUCCESS;
			
			// Generate the login id and update session variables
			$_SESSION['login'] = SR::generateKey( SR_SESSION_KEYLENGTH_LOGINID );
			$_SESSION['uid'] = $this->id;
			
			// Insert the user into the session table
			$query	=	'
				INSERT INTO		' . SR_SESSION_TABLE . '
				( sessionID, user_id, lastAccessed, loginID )
				VALUES
				( :sid, :uid, :timestamp, :lid )'
			;
			$sqlobj->createQuery( $query );
			$sqlobj->bind( ':sid', $_SESSION['sessionID'] );
			$sqlobj->bind( ':uid', $this->id );
			$sqlobj->bind( ':timestamp', time() );
			$sqlobj->bind( ':lid', $_SESSION['login'] );
			$response = $sqlobj->runQuery();
			
			if ( $sqlobj->hasError() ) {
				return SR_LOGIN_ERR_SQL;
			}
			
			// Logged in. Return the redirect location
			return SR_LOGIN_SUCCESS;
		} else { // If the user is already logged in, handle it appropriately
			if ( !isset( $_SESSION['login'] ) ) {
				$_SESSION['login'] = $this->getLoginID();
				$_SESSION['uid'] = $this->id;
			}
			return SR_LOGIN_SUCCESS;
		}
	}
	
	// Logs the current user out
	public function logout() {
		// Check to make sure the session variable is registered
		if ( $this->isOnline() ) { // Session variable is registered, the user is ready to logout
			$sqlobj =& SR_System::getDBO();
			
			// Delete the session table entry
			$query	=	'
				DELETE FROM		' . SR_SESSION_TABLE . '
				WHERE			user_id = "' . $sqlobj->sqlsafe( $this->id ) . '"'
			;
			$sqlobj->query( $query );
			
			if ( $sqlobj->hasError() ) {
				$sqlobj->submitErrorLog( null, 'SR_User::logout() - Session deletion' );
				return false;
			}
			
			
			// Unset all of the session variables
			$_SESSION = array();
			
			// Delete the session cookie (technically setting its expiration date to some time in the past)
			if ( isset( $_COOKIE[session_name()] ) ) {
				$params = session_get_cookie_params();
				setcookie( session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly'] );
				unset( $params );
			}
			// Destroy the session
			session_destroy();
			
			return true;
		}
		
		return false;
	}
	
	// Returns the last accessed timestamp of the current user
	public function lastAccessed() {
		$sqlobj =& SR_System::getDBO();
		
		$query		=	'
			SELECT		lastAccessed
			FROM		' . SR_SESSION_TABLE . '
			WHERE		user_id = "' . $sqlobj->sqlsafe( $this->id )  . '"'
		;
		$timestampquery = $sqlobj->query( $query );

		if ( $sqlobj->hasError( $timestampquery ) ) {
			$sqlobj->submitErrorLog( $timestampquery, 'SR_User::lastAccessed()' );
			return false;
		}
		
		$timestamp = $sqlobj->field( 0, 'lastAccessed', $timestampquery );
		$sqlobj->free( $timestampquery );
		return $timestamp;
	}
	
	// Updates the "last accessed" timestamp in the user's session
	public function touch() {
		$sqlobj =& SR_System::getDBO();
		
		// Make sure the user is online
		if ( $this->isOnline() ) {
			$query		=	'
				UPDATE		' . SR_SESSION_TABLE . '
				SET			lastAccessed = :timestamp
				WHERE		user_id = :uid;
			';
			$sqlobj->createQuery( $query );
			$sqlobj->bind( ':timestamp', time() );
			$sqlobj->bind( ':uid', $this->id );
			$touchquery = $sqlobj->runQuery();

			if ( $sqlobj->hasError( $touchquery ) ) {
				$sqlobj->submitErrorLog( $touchquery, 'SR_User::touch()' );
				return false;
			}
			
			// Return success
			return true;
		} else {
			// Return failure
			return false;
		}
	}
	
	// Checks to see whether the current user is logged in (online)
	public function isOnline() {
		$sqlobj =& SR_System::getDBO();
		
		$query		=	'
			SELECT		sessionID
			FROM		' . SR_SESSION_TABLE . '
			WHERE		user_id = "' . $sqlobj->sqlsafe( $this->id )  . '"'
		;
		$onlinequery = $sqlobj->query( $query );

		if ( $sqlobj->hasError( $onlinequery ) ) {
			$sqlobj->submitErrorLog( $onlinequery, 'SR_User::isOnline()' );
			return false;
		}
		
		$isOnline = ($sqlobj->num_rows( $onlinequery ) == 1);
		$sqlobj->free( $onlinequery );
		return $isOnline;
	}
	
	// Gets the login ID of the user (if logged in)
	public function getLoginID() {
		$sqlobj =& SR_System::getDBO();
		
		$query		=	'
			SELECT		sessionID
			FROM		' . SR_SESSION_TABLE . '
			WHERE		user_id = "' . $sqlobj->sqlsafe( $this->id )  . '"'
		;
		$onlinequery = $sqlobj->query( $query );

		if ( $sqlobj->hasError( $onlinequery ) ) {
			$sqlobj->submitErrorLog( $onlinequery, 'SR_User::isOnline()' );
			return false;
		}
		
		$isOnline = ($sqlobj->num_rows( $onlinequery ) == 1) ? $sqlobj->field( 0, 'sessionID', $onlinequery ) : false;
		$sqlobj->free( $onlinequery );
		return $isOnline;
	}
	
	// Adds a new user
	public static function add( array $parameters ) {
		$config =& SR_System::getConfig();
		$sqlobj =& SR_System::getDBO();
		
		if ( !isset( $parameters['username'] ) || empty( $parameters['username'] ) || 
			!isset( $parameters['password'] ) || empty( $parameters['password'] ) ||
			!isset( $parameters['firstname'] ) || empty( $parameters['firstname'] ) ||
			!isset( $parameters['lastname'] ) || empty( $parameters['lastname'] )
		) {
			throw new Exception( 'Required information not provided!', 1 );
		} else {
			if ( (preg_match( '/[^a-z0-9]/', $parameters['username'] ) > 0) || !$this->_validEmail($username) ) {
				throw new Exception( 'Invalid username', 2 );
			} elseif ( preg_match( '/[^A-Za-z\-\']/', $parameters['firstname'] ) > 0 ) {
				throw new Exception( 'Invalid first name', 3 );
			} elseif ( preg_match( '/[^A-Za-z\-\']/', $parameters['lastname'] ) > 0 ) {
				throw new Exception( 'Invalid last name', 4 );
			}
		}
		
		$query		=	'
			INSERT INTO 	' . SR_USERS_TABLE . '
			( username, password, firstname, lastname )
			VALUES(
			  "' . $sqlobj->sqlsafe( $parameters['username'] ) . '",
			  SHA1( "' . $sqlobj->sqlsafe( $parameters['password'] ) . '" ),
			  "' . $sqlobj->sqlsafe( $parameters['firstname'] ) . '",
			  ' . $sqlobj->sqlsafe( $parameters['lastname'] ) . '
			)
		';
		$insertquery = $sqlobj->query( $query );
		
		if ( $sqlobj->hasError( $insertquery ) ) {
			$sqlobj->submitErrorLog( $insertquery, 'SR_User::add()' );
			throw new Exception( 'An error occurred while adding a new user.', -1 );
		}
	}
	
	// Deletes a user
	public static function delete( $id ) {
		$sqlobj =& SR_System::getDBO();
		
		if ( empty( $id ) || !is_numeric( $id ) )
			throw new Exception( 'Invalid UID', 0 );
		
		$query	=	'
			DELETE FROM	' . SR_USERS_TABLE . '
			WHERE		id = "' . $sqlobj->sqlsafe( $id ) . '"
			LIMIT		1'
		;
		$deletequery = $sqlobj->query( $query );
		
		if ( $sqlobj->hasError( $deletequery ) ) {
			$sqlobj->submitErrorLog( $deletequery, 'SR_User::delete()' );
			throw new Exception( 'Error while deleting', -1 );
		}
		
		if ( $sqlobj->affected_rows == 1 ) {
			return true;
		} else {
			throw new Exception( 'Non-existent user', 1 );
		}
	}
	
	
	// Gets the permission level of this user
	public function getPermission() {
		return $this->permission;
	}
	public function getAlias() {
		return $this->username;
	}
	
	
	// Commits the current state of this object to the user data (only commits mutable properties)
	public function commit() {
		$config =& SR_System::getConfig();
		$sqlobj =& SR_System::getDBO();
		
		$permissions = $config->get( 'permissions' );
		
		if ( !isset( $this->username ) || empty( $this->username ) || 
			!isset( $this->firstname ) || empty( $this->firstname ) ||
			!isset( $this->lastname ) || empty( $this->lastname ) || 
			!isset( $this->permission ) || empty( $this->permission )
		) {
			throw new Exception( 'Required information not provided!', 1 );
		} else {
			if ( preg_match( '/[^A-Za-z\-\']/', $this->firstname ) > 0 ) {
				throw new Exception( 'Invalid first name', 3 );
			} elseif ( preg_match( '/[^A-Za-z\-\']/', $this->lastname ) > 0 ) {
				throw new Exception( 'Invalid last name', 4 );
			} elseif ( !is_numeric( $this->permission ) || !isset( $permissions[$this->permission] ) ) {
				throw new Exception( 'Invalid permission value', 5 );
			}
		}
		
		$query		=	'
			UPDATE		' . SR_USERS_TABLE . '
			SET			firstname = :firstname,
						lastname = :lastname,
						permission = :permission
			WHERE		id = :userid'
		;
		$sqlobj->createQuery( $query );
		$sqlobj->bind( ':firstname', $this->firstname );
		$sqlobj->bind( ':lastname', $this->lastname );
		$sqlobj->bind( ':permission', $this->permission );
		$sqlobj->bind( ':userid', $this->id );
		$updatequery = $sqlobj->runQuery();
		
		if ( $sqlobj->hasError( $updatequery ) ) {
			$sqlobj->submitErrorLog( $updatequery, 'SR_User::commit()' );
			throw new Exception( 'An error occurred while editing the user.', SR_MSG_ERROR );
		}
		
		return true;
	}
	
	// Changes and commits the current state of this object with the passed-in array of values
	public function update( array $options ) {
		
		foreach( $options as $property => $value ) {
			switch( $property ) {
				case 'firstname':
				case 'lastname':
				case 'permission':
					$this->$property = $value;
					break;
			}
		}
		
		return $this->commit();
	}
	
	// Gets the username of a user according to the specified user id
	public static function getUsername( $id ) {
		$sqlobj =& SR_System::getDBO();
		
		$query	=	'
			SELECT		username
			FROM		' . SR_USERS_TABLE . '
			WHERE		id = "' . $sqlobj->sqlsafe( $id ) . '"'
		;
		$userquery = $sqlobj->query( $query );
		
		if ( $sqlobj->hasError( $userquery ) ) {
			$sqlobj->submitErrorLog( $userquery, 'SR_User::getUsername()' );
			throw new Exception( 'An error occurred while retriving the specified user information.', SR_MSG_ERROR );
			return false;
		}
		
		$username = ($sqlobj->num_rows( $userquery ) == 1) ? $sqlobj->field( 0, 'username', $userquery ) : false;
		$sqlobj->free( $userquery );
		return $username;
	}
	
	// Checks to see if a user exists using a specified user id or username
	public static function exists( $criteria ) {
		$sqlobj =& SR_System::getDBO();
		
		$query	=	'
			SELECT		id
			FROM		' . SR_USERS_TABLE . '
			WHERE		username = "' . $sqlobj->sqlsafe( $criteria ) . '"
			OR			id = "' . $sqlobj->sqlsafe( $criteria ) . '"'
		;
		$userquery = $sqlobj->query( $query );
		
		if ( $sqlobj->hasError( $userquery ) ) {
			$sqlobj->submitErrorLog( $catquery, 'SR_User::exists()' );
			throw new Exception( 'An error occurred while checking whether or not the specified user exists.', SR_MSG_ERROR );
			return false;
		}
		
		$exists = ($sqlobj->num_rows( $userquery ) == 1);
		$sqlobj->free( $userquery );
		return $exists;
	}
	
	// Handles user property access
	public function __get( $property ) {
		if ( array_key_exists( $property, get_object_vars( $this ) ) ) {
			return $this->$property;
		} else {
			return null;
		}
	}
	
	// Sets the value of a property (if existent, and only if property is mutable)
	public function __set( $property, $value ) {
		if ( array_key_exists( $property, get_object_vars( $this ) ) ) {
			// Change value only if property is mutable and handle triggers for property dependencies
			switch( $property ) {
				case 'firstname':
				case 'lastname':
					$this->$property = $value;
					$this->fullname = $this->firstname . ' ' . $this->lastname;
					break;
				case 'permission':
					$this->$property = $value;
					$this->needspermission = ($this->permission == 1) ? 1 : 0;
					break;
				default:
					break;
			}
		} else {
			throw new Exception( 'Trying to set non-existent property', 3 );
		}
	}
	
	// Returns the session ID stored in the database for the current user (if online)
	private function _session_id() {
		$sqlobj =& SR_System::getDBO();
		
		$query		=	'
			SELECT		sessionID
			FROM		' . SR_SESSION_TABLE . '
			WHERE		user_id = "' . $sqlobj->sqlsafe( $this->id )  . '"'
		;
		$sessionquery = $sqlobj->query( $query );

		if ( $sqlobj->hasError( $sessionquery ) ) {
			$sqlobj->submitErrorLog( $sessionquery, 'SR_User::isOnline()' );
			return false;
		}
		
		if ( $sqlobj->num_rows() ) {
			$sessionID = $sqlobj->field( 0, 'sessionID', $sessionquery );
			$sqlobj->free( $sessionquery );
			return $sessionID;
		} else {
			return false;
		}
	}
	
	public function _validEmail($email)
	{
	   $isValid = true;
	   $atIndex = strrpos($email, "@");
	   if (is_bool($atIndex) && !$atIndex)
	   {
		  $isValid = false;
	   }
	   else
	   {
		  $domain = substr($email, $atIndex+1);
		  $local = substr($email, 0, $atIndex);
		  $localLen = strlen($local);
		  $domainLen = strlen($domain);
		  if ($localLen < 1 || $localLen > 64)
		  {
			 // local part length exceeded
			 $isValid = false;
		  }
		  else if ($domainLen < 1 || $domainLen > 255)
		  {
			 // domain part length exceeded
			 $isValid = false;
		  }
		  else if ($local[0] == '.' || $local[$localLen-1] == '.')
		  {
			 // local part starts or ends with '.'
			 $isValid = false;
		  }
		  else if (preg_match('/\\.\\./', $local))
		  {
			 // local part has two consecutive dots
			 $isValid = false;
		  }
		  else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
		  {
			 // character not valid in domain part
			 $isValid = false;
		  }
		  else if (preg_match('/\\.\\./', $domain))
		  {
			 // domain part has two consecutive dots
			 $isValid = false;
		  }
		  else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","",$local)))
		  {
			 // character not valid in local part unless 
			 // local part is quoted
			 if (!preg_match('/^"(\\\\"|[^"])+"$/',
				 str_replace("\\\\","",$local)))
			 {
				$isValid = false;
			 }
		  }
		  if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
		  {
			 // domain not found in DNS
			 $isValid = false;
		  }
	   }
	   return $isValid;
	}
}

/*
class SR_Basic extends SR_User {
	
	public function create() {
		echo 'Created User';
	}
	public function delete() {
		echo 'Deleted User';
	}
	public function get() {
		echo 'Got User';
	}
	
}

class SR_Admin extends SR_User {
	
	public function create() {
		echo 'Created Admin';
	}
	public function delete() {
		echo 'Deleted Admin';
	}
	public function get() {
		echo 'Got Admin';
	}
	
}
*/

?>