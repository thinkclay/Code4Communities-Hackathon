<?php

// Prevent direct access
defined( '_SR_EXEC' ) or die( 'Restricted access' );

class SR_DisasterManager {
	
	public function __construct() {}
	
	// Populates disasters
	public static function populate() {
		$sqlobj =& SR_System::getDBO();
		
		// Populate disasters
		$query	=	'
			SELECT		*
			FROM		' . SR_DISASTERS_TABLE
		;
		$disasterquery = $sqlobj->query( $query );
		
		// If an error occurred, append to the error log and return with an error code
		if ( $sqlobj->hasError( $disasterquery ) ) {
			$sqlobj->submitErrorLog( $disasterquery, 'SR_DisasterManager::populate()' );
			return false;
		} elseif ( $sqlobj->num_rows( $disasterquery ) == 1 ) {
			return $disasterquery;
		}
		
	}
	
}
?>