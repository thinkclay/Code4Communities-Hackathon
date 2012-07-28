<?php 
// Register Custom Error and Exception Handlers
function SR_error_handler( $err_type, $err_str, $err_file, $err_line ) {
	if( class_exists( 'SR_Error', false ) ) {
		SR_Error::handleError( $err_type, $err_str, $err_file, $err_line );
	} else {
		if( ($err_type == E_WARNING || $err_type == E_NOTICE) && !SR::isLive() ) {
		// Should log errors if the site is live and errors are not being displayed
			if( strpos( $err_str, 'ldap_bind' ) === false ) {
				echo (SR_STATUS == SR_ST_LIVE) ? SR_GLOBAL_ERR : 'Type: ' . $err_type . '<br />' . $err_str . '<br />' . 'File: ' . $err_file . '<br />' . 'Line: ' . $err_line . '<br />';
			}
		} else {
			if( SR::isLive() )
				die( 'An unexpected error occurred. Please try again or contact the webmaster.' );
			else
				die( (SR_STATUS == SR_ST_LIVE) ? SR_GLOBAL_ERR : 'Type: ' . $err_type . '<br />' . $err_str . '<br />' . 'File: ' . $err_file . '<br />' . 'Line: ' . $err_line . '<br />' );
		}
	}
}
function SR_exception_handler( $exception ) {
		die( $exception->getMessage() );
}
set_error_handler( 'SR_error_handler' );
set_exception_handler( 'SR_exception_handler' );


final class SR_Config {
	
	// Holds the loaded-in options
	private $options = array();
	
	public function __construct() {
	
		// Load the basic SR class
		require realpath( dirname( __FILE__ ) . '/classes/class.sr.php' );
		
		// Load the configuration file
		if( !file_exists( dirname( __FILE__ ) . '/settings.php' ) ) {
			throw new Exception( 'Could not locate configuration file!' );
		} else {
			require realpath( dirname( __FILE__ ) . '/settings.php' );
			
			if( !class_exists( 'SR_Settings', false ) ) {
				throw new Exception( 'Could not load configuration file!' );
			} else {
				// Load the options into our array
				$this->options = array_merge_recursive( $this->options, get_class_vars( 'SR_Settings' ) );
			}
		}
		
		// Register the autoload function
		spl_autoload_register( __CLASS__ . '::autoload', true );
	}
	
	// Gets the instance of this config class
	public static function &getInstance() {
		static $instance;
		
		if ( !is_object( $instance ) ) {
			$class = __CLASS__;
			$instance = new $class();
			unset( $class );
		}
		
		return $instance;
	}
	
	
	public function add( $param_name, $param_value ) {
		if ( !array_key_exists( $param_name, $this->options ) ) {
			$this->options[$param_name] = $param_value;
			return true;
		}
		
		return false;
	}
	
	public function get( $param_name ) {
		// Check to see if the parameter exists in our set of options
		if ( array_key_exists( $param_name, $this->options ) ) {
			return $this->options[$param_name];
		} elseif( defined( strtoupper( $param_name ) ) ) { // If not, fall back to constants
			return constant( strtoupper( $param_name ) );
		} else { // If all else fails, bail out
			return false;
		}
	}
	
	// This function allows for localization variables to be resolved (gets the text associated with a variable name)
	public function _( $variable ) {
		
	}
	
	// Define the autoloader function
	// Note: This function makes it so that code for classes does not have to be explicitly included/imported.
	public function autoload( $class_name ) {
		// Process the class name
		if ( $class_name !== 'SR' ) {
			$class_name = str_replace( 'sr_', '', strtolower( $class_name ) );
		}
		
		// Traverse through all relevant directories looking for the file until it's found
		if ( file_exists( SR_DIR_CLASSES . 'class.' . strtolower( $class_name ) . '.php' ) ) {
			require SR_DIR_CLASSES . 'class.' . strtolower( $class_name ) . '.php';
		} elseif ( file_exists( SR_DIR_ABSTRACTS . 'abstract.' . strtolower( $class_name ) . '.php' ) ) {
			require SR_DIR_ABSTRACTS . 'abstract.' . strtolower( $class_name ) . '.php';
		}
		else { // If reached here, then the file doesn't exist
			// Should throw exception, but since we're using the singleton design pattern, the exception can't be caught
			echo SR_DIR_CLASSES . 'class.' . strtolower( $class_name ) . '.php';
			die( 'Could not autoload the required file!' );
			//throw new Exception( 'Could not find the required file!' );
		}
	}
	/*
	public function set( $param_name, $value ) {
		// This should only be enabled when configuration options can change during runtime.
	}
	*/
	private function _initializeSecurity() {
	
	}
}

// Initialize the configuration object
$config =& SR_Config::getInstance();

// Paths
define( 'SR_ROOTPAGE', $config->get( 'dir_root' ) );
define( 'SR_DIR_GLOBALS', SR_ROOTPAGE . 'globals/' );
define( 'SR_DIR_CLASSES', SR_ROOTPAGE . 'classes/' );
define( 'SR_DIR_ABSTRACTS', SR_ROOTPAGE . 'classes/abstracts/' );
define( 'SR_DIR_INTERFACES', SR_ROOTPAGE . 'classes/interfaces/' );
define( 'SR_DIR_HANDLERS', SR_ROOTPAGE . 'classes/handlers/' );
define( 'SR_DIR_IMAGES', SR_ROOTPAGE . 'images/' );
define( 'SR_DIR_PLUGINS', SR_ROOTPAGE . 'plugins/' );
define( 'SR_DIR_SCRIPT', SR_ROOTPAGE . 'script/' );

// Web Paths
define( 'SR_WEBROOTPAGE', $config->get( 'web_root' ) );
define( 'SR_WEBDIR_GLOBALS', SR_WEBROOTPAGE . 'globals/' );
define( 'SR_WEBDIR_CLASSES', SR_WEBROOTPAGE . 'classes/' );
define( 'SR_WEBDIR_HOME', SR_WEBROOTPAGE );
define( 'SR_WEBDIR_IMAGES', SR_WEBROOTPAGE . 'images/' );
define( 'SR_WEBDIR_ICONS', SR_WEBDIR_IMAGES . 'icons/' );
define( 'SR_WEBDIR_SCRIPT', SR_WEBROOTPAGE . 'script/' );
define( 'SR_WEBDIR_PLUGINS', SR_WEBROOTPAGE . 'plugins/' );
define( 'SR_WEBDIR_SYLLABUS_ARCHIVE', $config->get( 'web_syllarch' ) );

// Database Connection Parameters
define( 'SR_DB_CONNECT_HOST', $config->get( 'mysql_host' ) );
define( 'SR_DB_CONNECT_USER', $config->get( 'mysql_user' ) );
define( 'SR_DB_CONNECT_PASS', $config->get( 'mysql_pass' ) );
define( 'SR_DB_CONNECT_DBNAME', $config->get( 'mysql_db' ) );


// Database Tables
define( 'SR_ERROR_LOG_TABLE', SR_DB_CONNECT_DBNAME . '.error_log' );
define( 'SR_DISASTERS_TABLE', SR_DB_CONNECT_DBNAME . '.disasters' );
define( 'SR_OFFERS_TABLE', SR_DB_CONNECT_DBNAME . '.listings' );
define( 'SR_SESSION_TABLE', SR_DB_CONNECT_DBNAME . '.sessions' );
define( 'SR_USERS_TABLE', SR_DB_CONNECT_DBNAME . '.users' );


// Location Parameters
define( 'SR_TIMEZONE', $config->get( 'timezone' ) );


// Session Parameters
define( 'SR_SESSION_NAME', 'sr_id' );
define( 'SR_SESSION_KEYLENGTH_SESSID', 9 );
define( 'SR_SESSION_KEYLENGTH_LOGINID', 12 );

// Authentication Parameters

// Note: When using LDAP authentication, set this to 5 to keep 
//       it in tandem with OIT's account lockout limit.
define( 'SR_AUTH_MAXATTEMPTS', 5 );


// Authentication Responses
define( 'SR_AUTH_ERR_LDAP', -2 );
define( 'SR_AUTH_ERR_SQL', -1 );
define( 'SR_AUTH_SUCCESS', 0 );
define( 'SR_AUTH_INVALID', 1 );
define( 'SR_AUTH_DENIED', 2 );
define( 'SR_AUTH_LOCKED', 3 );



// Set the default timezone to GMT-7 (Mountain Time Zone)
date_default_timezone_set( SR_TIMEZONE );



// If site is under maintenance, redirect to main page
if ( SR_STATUS == SR_ST_OFFLINE ) {
	if ( $_SERVER['REQUEST_URI'] != parse_url( SR_WEBROOTPAGE, PHP_URL_PATH ) ) {
		SR::redirect( SR_WEBROOTPAGE );
	}
}

// Start the session (using a custom session name)
session_name( SR_SESSION_NAME );
session_start();

// Regenerate the session ID (hinders session hijacking)
session_regenerate_id();

// Generate a session ID (if it hasn't already been done)
if ( !isset( $_SESSION['sessionID'] ) ) {
	$_SESSION['sessionID'] = SR::generateKey( SR_SESSION_KEYLENGTH_SESSID );
}


// Initialize global objects
$system =& SR_System::getInstance();
try {
	$sqlobj =& SR_System::getDBO();
} catch( Exception $e ) {
	die( 'Could not connect to the database!' );
}

/*** Perform security checks ***/

// Initialize more global objects (specifically, the user object)
// Note: This is initialized here because session expiry causes "loginid" to be 
//       invalid, so it has to be accounted for before the user object is created.
if ( isset( $_SESSION['login'] ) ) {
	try {
		$user =& SR_System::getUser();
		
		// If the session expired, log the user out and ask for relogin
		// Note: Only do this if the user isn't trying to log out. There's
		//       no point telling the user the session expired when s/he
		//       wants to log out anyways. Also, skip this for AJAX scripts.
		// Update the "last accessed" timestamp for user
		$user->touch();
	} catch( Exception $e ) {
		die( 'An error occurred while retrieving the user information. ' . $e->getMessage() );
	}
}

// Define the disaster types
$disaster_types = array (
	1 => 'drought',
	2 => 'earthquake',
	3 => 'fire',
	4 => 'flood',
	5 => 'general',
	6 => 'hurricane',
	7 => 'tornado',
	8 => 'tsunami',
	9 => 'volcano'
);

// Define listing types
$listing_types = array (
	1 => 'housing',
	2 => 'food',
	3 => 'goods',
	4 => 'medical',
	5 => 'transport',
	6 => 'services',
	7 => 'animals',
	8 => 'other'
);