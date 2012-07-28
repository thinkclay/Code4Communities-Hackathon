<?php

// Prevent direct access
defined( '_SR_EXEC' ) or die( 'Restricted access' );

class SR_Offer {
	
	// All of these properties are "protected" to allow for child class derivations in the future
	protected $id;
	protected $name;
	protected $type;
	protected $location;
	
	// Initializes a new offer object with the specified user's information
	public function __construct( $id ) {
		$sqlobj =& SR_System::getDBO();
		
		// Build the query depending on the specified argument type
		$query	=	'
			SELECT		*
			FROM		' . SR_OFFERS_TABLE . '
			WHERE		id = "' . $sqlobj->sqlsafe( $id ) . '"
			'
		;
		$userquery = $sqlobj->query( $query );
		
		if ( $sqlobj->hasError( $userquery ) ) {
			$sqlobj->submitErrorLog( $userquery, 'SR_Offer::__construct()' );
			throw new Exception( 'Could not load the offer information!', SR_MSG_ERROR );
		}
		if ( $sqlobj->num_rows( $userquery ) != 1 ) {
			throw new Exception( 'The specified offer does not exist!', SR_MSG_ERROR );
		}
		
		$row = $sqlobj->getResultObject( $userquery )->fetch_object();
		$this->id			=	$row->id;
		$this->name			=	$row->name;
		$this->type			=	$row->type;
		$this->location		=	$row->location;
	}
	
	// Adds a new offer
	
	/*[offer_type] => 1
    [for_disaster] => 1
    [description] => oadsfjasoi
    [location] => Longmont, Colorado
    [people] => 2
    [children] => 1
    [dogs] => 1
    [cats] => 1
    [duration] => 2
    [unoccupied] => 1
    [baby_care] => 1
    [transportation] => 1
    [parking] => 1*/
	public static function add( array $parameters ) {
		$config =& SR_System::getConfig();
		$sqlobj =& SR_System::getDBO();
		$user =& SR_System::getUser();
		
		if ( !isset( $parameters['offer_type'] ) || empty( $parameters['offer_type'] ) || 
			!isset( $parameters['for_disaster'] ) || empty( $parameters['for_disaster'] ) ||
			!isset( $parameters['description'] ) || empty( $parameters['description'] ) ||
			!isset( $parameters['location'] ) || empty( $parameters['location'] ) ||
			($parameters['offer_type'] == 1 && (!isset( $parameters['people'] ) || empty( $parameters['people'] ))) ||
			($parameters['offer_type'] == 1 && (!isset( $parameters['duration'] ) || empty( $parameters['duration'] )))
		) {
			throw new Exception( 'Required information not provided!', 1 );
		} else {
			foreach ( array( 'people', 'children', 'dogs', 'cats', 'duration', 'unoccupied', 'baby_care', 'transportation', 'parking' ) as $item ) {
				if ( !isset( $parameters[$item] ) ) {
					$parameters[$item] = '0';
				}
			}
			
			if ( !is_numeric( $parameters['offer_type'] ) || 
				!is_numeric( $parameters['for_disaster'] ) || 
				!is_numeric( $parameters['people'] ) || 
				!is_numeric( $parameters['children'] ) || 
				!is_numeric( $parameters['dogs'] ) || 
				!is_numeric( $parameters['cats'] ) || 
				!is_numeric( $parameters['duration'] ) || 
				!is_numeric( $parameters['unoccupied'] ) || 
				!is_numeric( $parameters['baby_care'] ) || 
				!is_numeric( $parameters['transportation'] ) || 
				!is_numeric( $parameters['parking'] )
			) {
				throw new Exception( 'Invalid data provided', 2 );
			}
		}
		
		$query		=	'
			INSERT INTO 	' . SR_OFFERS_TABLE . '
			( type, disaster_id, user_id, capacity, duration, location, description, allow_parameters, have_parameters, preferences )
			VALUES(
			  ' . $sqlobj->sqlsafe( $parameters['offer_type'] ) . ',
			  ' . $sqlobj->sqlsafe( $parameters['for_disaster'] ) . ',
			  ' . $sqlobj->sqlsafe( $user->id ) . ',
			  ' . $sqlobj->sqlsafe( $parameters['people'] ) . ',
			  ' . $sqlobj->sqlsafe( $parameters['duration'] ) . ',
			  "' . $sqlobj->sqlsafe( $parameters['location'] ) . '",
			  "' . $sqlobj->sqlsafe( $parameters['description'] ) . '",
			  "children=' . $sqlobj->sqlsafe( $parameters['children'] ) . '\ndogs=' . $sqlobj->sqlsafe( $parameters['dogs'] ) . '\ncats' . $sqlobj->sqlsafe( $parameters['cats'] ) . '\n",
			  "unoccupied=' . $sqlobj->sqlsafe( $parameters['unoccupied'] ) . '\nbaby_care=' . $sqlobj->sqlsafe( $parameters['baby_care'] ) . '\ntransportation=' . $sqlobj->sqlsafe( $parameters['transportation'] ) . '\nparking=' . $sqlobj->sqlsafe( $parameters['parking'] ) . '\n",
			  ""
			)
		';
		$insertquery = $sqlobj->query( $query );
		
		if ( $sqlobj->hasError( $insertquery ) ) {
			$sqlobj->submitErrorLog( $insertquery, 'SR_User::add()' );
			throw new Exception( 'An error occurred while adding the offer listing.', -1 );
		} else {
			return true;
		}
	}
	
	// Deletes an offer
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
	
}

?>