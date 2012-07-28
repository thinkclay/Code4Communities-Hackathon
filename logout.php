<?php
require_once realpath( './config.php' );

// Log the user out
if ( isset ( $user ) )
	$user->logout();

SR::redirect( SR_WEBROOTPAGE );

?>