<?php
require_once realpath('./config.php');

header( 'Content-Type: application/json' );

if ( !empty( $_GET ) && isset( $_GET['id'] ) && !empty( $_GET['id'] ) ) {
	try {
		$disaster = new SR_Disaster( $_GET['id'] );
		$offers = $disaster->populateOffers();
		
		$data = array();
		while ( $row = $sqlobj->getResultObject( $offers )->fetch_assoc() ) {
			$data[] = $row;
		}
		echo json_encode( $data );
		exit;
	} catch ( Exception $e ) {
		echo json_encode( array( 'response' => 'invalid' ) );
	}
} else {
	$dm = new SR_DisasterManager();
	$disasters = $dm->populate();
	
	$data = array();
	while ( $row = $sqlobj->getResultObject( $disasters )->fetch_assoc() ) {
		$data[] = $row;
	}
	echo json_encode( $data );
	exit;
}



?>