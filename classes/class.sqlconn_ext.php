<?php

/**** Class SQLConn Extended ****/
/**
	Developed by: Ryan Carney-Mogan and Varun Varada
	Date Developed: December 17th, 2008
	Latest Revision: May 12th, 2010
	TAC - University of Colorado (Boulder)
	
	This class builds upon the SQL Connection class to provide 
	flexibility with the added plugin functionality.
	
**/

// Prevent direct access
defined( '_SR_EXEC' ) or die( 'Restricted access' );

class SR_SQLConn_Ext extends SR_SQLConn {

	private $imported;
	private $imported_functions;

	public function __construct() {
		parent::__construct();
		$this->imported	= array();
		$this->imported_functions = array();
		
		/** Dynamically add plugins **/
		if ( $this->dynAddPlugins() )
			$this->imports( get_class( $this ) . '_Plugin' );
		
		//$this->_printImported();
	}
	
	public function __destruct() {
		parent::__destruct();
		unset( $this->imported );
		unset( $this->imported_functions );
	}
	
	// Gets (creates if non-existent) a reference to a new database object
	public static function &getInstance() {
		static $instance;
		
		if ( !is_object( $instance ) ) {
			$class = __CLASS__;
			$instance = new $class();
			unset( $class );
		}
		
		return $instance;
	}
	
	public function dynAddPlugins() {
		if ( is_dir( SR_DIR_PLUGINS ) ) {
			$plugins = scandir( SR_DIR_PLUGINS );
			$plugin = 'plugin.' . strtolower( get_class( $this ) ) . '.php';
			if ( !empty( $plugins ) and in_array( $plugin, $plugins ) ) {
				require_once SR_DIR_PLUGINS . $plugin;
				return true;
			}
		}
		return false;
	}
	
	public function imports( $object ) {
		// The new object to import
		$new_import = new $object();
		// The name of the new object (class name)
		$import_name = get_class( $new_import );
		// The new functions to import
		$import_functions = get_class_methods( $new_import );

		// Add the object to the registry
		array_push( $this->imported, array( $import_name, $new_import ) );

		// Add the methods to the registry
		foreach( $import_functions as $function_name )
		{
			$this->imported_functions[$function_name] = $new_import;
		}
	}

	public function __call( $method, $args ) {
		// make sure the function exists
		if ( array_key_exists( $method, $this->imported_functions ) )
		{
			$args[] = $this;
			// invoke the function
			return call_user_func_array( array( $this->imported_functions[$method], $method ), $args );
		}

		throw new Exception( 'Call to undefined method/class function: ' . $method );
	}
	
	private function _printImported() {
		echo '<pre>';
		print_r( $this->imported );
		echo '</pre><br /><pre>';
		print_r( $this->imported_functions );
		echo '</pre>';
	}
}

?>