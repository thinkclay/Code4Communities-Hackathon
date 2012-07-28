<?php

// Prevent direct access
defined( '_SR_EXEC' ) or die( 'Restricted access' );

class SR_OfferManager {
	
	public function __construct() {}
	
	// Populates offers
	public static function populate() {
		$sqlobj =& SR_System::getDBO();
		
		// Populate offers
		$query	=	'
			SELECT		*
			FROM		' . SR_OFFERS_TABLE
		;
		$offerquery = $sqlobj->query( $query );
		
		// If an error occurred, append to the error log and return with an error code
		if ( $sqlobj->hasError( $offerquery ) ) {
			$sqlobj->submitErrorLog( $offerquery, 'SR_OfferManager::populate()' );
			return false;
		} elseif ( $sqlobj->num_rows( $offerquery ) == 1 ) {
			return $offerquery;
		}
		
	}
	
}
?>