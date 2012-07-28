<?php

// Prevent direct access
defined( '_SR_EXEC' ) or die( 'Restricted access' );

final class SR {

	// Returns a self-pointing URL
	// Note: This is a more secure alternative to using the $_SERVER['PHP_SELF'] variable.
	public static function self() {
		$s = empty( $_SERVER['HTTPS'] ) ? '' : ( ($_SERVER['HTTPS'] == 'on') ? 's' : '' );
		$port = ($_SERVER['SERVER_PORT'] == 80 || $_SERVER['SERVER_PORT'] == 443) ? '' : (':' . $_SERVER['SERVER_PORT']);
		
		return 'http' . $s . '://' . $_SERVER['SERVER_NAME'] . ( !empty( $port ) ? ':' . $port : '' ) . $_SERVER['REQUEST_URI'];
	}
	
	// Checks whether the site is live or not
	public static function isLive() {
		return SR_STATUS == SR_ST_LIVE;
	}
	
	// Redirects the browser to a specified URL
	public static function redirect( $location ) {
		// Make sure the HTTP headers have not been sent to the browser
		if ( !headers_sent() ) {
			header( 'Location: ' . $location );
		} else { // If they have, use JavaScript to redirect
?>
				<script type="text/javascript">
					location.href = "<?php echo $location; ?>";
				</script>
<?php
		}
		exit;
	}
	
	// Generates random character sequences of specified length
	public static function generateKey( $length = 9 ) {
		$key = '';
		static $set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$set_length = strlen( $set );
		while( $length > 0 ) {
			$key .= substr( $set, mt_rand( 0, $set_length - 1 ), 1 );
			--$length;
		}
		return $key;
	}
	
}

