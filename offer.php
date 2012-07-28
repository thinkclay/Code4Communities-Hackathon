<?php
require_once realpath('./config.php');

if ( !empty( $_POST ) ) {
	try {
		SR_Offer::add( $_POST );
		echo 'success';
	} catch ( Exception $e ) {
		echo $e->getMessage();
	}
} else {
	echo 'invalid';
}

?>