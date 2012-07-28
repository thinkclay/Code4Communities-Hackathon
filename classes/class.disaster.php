<?php

// Prevent direct access
defined( '_SR_EXEC' ) or die( 'Restricted access' );

class SR_Disaster {
	
	// All of these properties are "protected" to allow for child class derivations in the future
	protected $id;
	protected $name;
	protected $type;
	protected $location;
	
	// Initializes a new disaster object with the specified user's information
	public function __construct( $id ) {
		$sqlobj =& SR_System::getDBO();
		
		// Build the query depending on the specified argument type
		$query	=	'
			SELECT		*
			FROM		' . SR_DISASTERS_TABLE . '
			WHERE		id = "' . $sqlobj->sqlsafe( $id ) . '"
			'
		;
		$userquery = $sqlobj->query( $query );
		
		if ( $sqlobj->hasError( $userquery ) ) {
			$sqlobj->submitErrorLog( $userquery, 'SR_Disaster::__construct()' );
			throw new Exception( 'Could not load the disaster information!', SR_MSG_ERROR );
		}
		if ( $sqlobj->num_rows( $userquery ) != 1 ) {
			throw new Exception( 'The specified disaster does not exist!', SR_MSG_ERROR );
		}
		
		$row = $sqlobj->getResultObject( $userquery )->fetch_object();
		$this->id			=	$row->id;
		$this->name			=	$row->name;
		$this->type			=	$row->type;
		$this->location		=	$row->location;
	}
	
	// Populates the offers for the current disaster
	public function populateOffers() {
		$sqlobj =& SR_System::getDBO();
		
		$query	=	'
			SELECT		l.id, l.type, l.location, l.description, u.username
			FROM		' . SR_OFFERS_TABLE . ' l, ' . SR_USERS_TABLE . ' u
			WHERE		l.user_id = u.id
			AND			l.disaster_id = ' . $this->id
		;
		$listingsquery = $sqlobj->query( $query );
		
		// If an error occurred, append to the error log and return with an error code
		if ( $sqlobj->hasError( $listingsquery ) ) {
			$sqlobj->submitErrorLog( $listingsquery, 'SR_Disaster::populateOffers()' );
			return false;
		} elseif ( $sqlobj->num_rows( $listingsquery ) > 0 ) {
			return $listingsquery;
		} else {
			return null;
		}
		
	}
	
}

?>