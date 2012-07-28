<?php

// Prevent direct access
defined( '_SR_EXEC' ) or die( 'Restricted access!' );

class SR_System {
	
	// Gets the instance of this system class
	public static function &getInstance() {
		static $instance;
		
		if ( !is_object( $instance ) ) {
			$class = __CLASS__;
			$instance = new $class();
			unset( $class );
		}
		
		return $instance;
	}
	
	// Adds a message to the system message queue
	/* 
	   Message Types:
	   
		Template:
		Message Constant (Legacy Message Type) - Message Description
	   
		SR_MSG_ERROR ("error") - Error Message
		SR_MSG_WARNING ("warning") - Warning/Caution Message
		SR_MSG_ANNOUNCEMENT ("announcement") - Informational Message
		SR_MSG_SUCCESS ("success") - Success Message
		
	*/
	public function enqueueMessage( $message, $type, $session ) {
		$sqlobj =& $this->getDBO();
		
		// Map message string types to message codes (if applicable)
		// Note: This is just for backwards compatibility; message 
		//       constants should be used everywhere.
		if ( !is_numeric( $type ) || ($type < SR_MSG_ERROR || $type > SR_MSG_SUCCESS) ) {
			switch( $type ) {
				case 'error':
					$type = SR_MSG_ERROR;
					break;
				case 'warning':
					$type = SR_MSG_WARNING;
					break;
				case 'announcement':
					$type = SR_MSG_ANNOUNCEMENT;
					break;
				case 'success':
					$type = SR_MSG_SUCCESS;
					break;
				default:
					$type = SR_MSG_WARNING;
					break;
			}
		}
		
		// Make sure such a message doesn't already exist
		$query	=	'
			SELECT		sessionID
			FROM		' . SR_MESSAGE_TABLE . '
			WHERE		sessionID = :session
			AND			type = :type
			AND			message = :msg'
		;
		$sqlobj->createQuery( $query );
		$sqlobj->bind( ':session', $session );
		$sqlobj->bind( ':type', $type );
		$sqlobj->bind( ':msg', $message );
		$duplicatequery = $sqlobj->runQuery();
		
		try {
			if ( $sqlobj->hasStopFlag() ) {
				$sqlobj->submitErrorLog( $duplicatequery, 'SR_System::enqueueMessage() - Error finding duplicates' );
				throw new Exception( 'DB query failed' );
			} else {
				if ( $sqlobj->num_rows( $duplicatequery ) != 0 ) {
					return true;
				}
			}
			
			// Find out what the highest ID is (if no rows exist, then return 1)
			$query = '
				SELECT	IFNULL( MAX(id) + 1, 1 ) AS maxid
				FROM	' . SR_MESSAGE_TABLE
			;
			$lastidquery = $sqlobj->query( $query );
			
			if ( $sqlobj->hasError( $lastidquery ) ) { // If not, carp about it
				$sqlobj->submitErrorLog( $lastidquery, 'SR_System::enqueueMessage() - Error finding last id' );
				//echo 'An error occurred while trying to add a message to the messaging system.';
				throw new Exception( 'DB query failed' );
			}
			
			$maxid = $sqlobj->field( 0, 'maxid', $lastidquery );
			
			$query	=	'
				INSERT INTO		' . SR_MESSAGE_TABLE . '
				( id, message, type, sessionID )
				VALUES
				( :id, :message, :type, :session )'
			;
			$sqlobj->createQuery( $query );
			$sqlobj->bind( ':id', $maxid );
			$sqlobj->bind( ':message', $message );
			$sqlobj->bind( ':type', $type );
			$sqlobj->bind( ':session', $session );
			$response = $sqlobj->runQuery();
			
			if ( $sqlobj->hasStopFlag() ) {
				$sqlobj->submitErrorLog( $response, 'SR_System::enqueueMessage() - Error enqueuing system message' );
				echo 'An error occurred while trying to add a message to the messaging system.';
				throw new Exception( 'DB query failed' );
			}
		} catch( Exception $e ) { // If the database errors out, fall back to sessions for message propagation
			if ( !isset( $_SESSION['messages'] ) || empty( $_SESSION['messages'] ) ) {
				$_SESSION['messages'][$type][] = $message;
			} elseif ( !in_array( $message, $_SESSION['messages'][$type] ) ) {
				$_SESSION['messages'][$type][] = $message;
			}
		}
		
		return true;
	}

	// Retrieves the message queue for this session
	public function getMessages( $session = null ) {
		$sqlobj =& $this->getDBO();
		$session = $_SESSION['sessionID'];
		
		$query	=	'
			SELECT		message, type
			FROM		' . SR_MESSAGE_TABLE . '
			WHERE		sessionID = :session'
		;
		$sqlobj->createQuery( $query );
		$sqlobj->bind( ':session', $session );
		$response = $sqlobj->runQuery();
		
		if ( $sqlobj->hasStopFlag() ) {
			$sqlobj->submitErrorLog( $response, 'SR_System::getMessages() - Error retrieving messages' );
			return array( 
				'error' => array( 'An error occurred while retrieving the system messages. Please try again later.' )
			);
		} else {
			$messages = array();
			if ( isset( $_SESSION['messages'] ) && !empty( $_SESSION['messages'] ) ) {
				foreach( $_SESSION['messages'] as $message_type => $message_cue ) {
					foreach( $message_cue as $message ) {
						$messages[$message_type][] = $message;
					}
				}
				unset( $_SESSION['messages'] );
			}
			for( $a = 0; $a < $sqlobj->num_rows( $response ); $a++ ) {
				// Map message codes back to message string types
				switch( $sqlobj->field( $a, 'type', $response ) ) {
					case SR_MSG_ERROR:
					case SR_MSG_WARNING:
					case SR_MSG_ANNOUNCEMENT:
					case SR_MSG_SUCCESS:
						$type = $sqlobj->field( $a, 'type', $response );
						break;
					default:
						$type = SR_MSG_WARNING;
						break;
				}
				$messages[$type][] = $sqlobj->field( $a, 'message', $response );
			}
			
			$query	=	'
				DELETE FROM		' . SR_MESSAGE_TABLE . '
				WHERE			sessionID = :session'
			;
			$sqlobj->createQuery( $query );
			$sqlobj->bind( ':session', $session );
			$response = $sqlobj->runQuery();
			
			if ( $sqlobj->hasStopFlag() ) {
				$sqlobj->submitErrorLog( $response, 'SR_System::getMessages() - Error deleting retrieved messages' );
				return array( 
					'error' => array(
						0 => 'An error occurred while retrieving the system messages. Please try again later.'
					)
				);
			}
		}
		
		return $messages;
		
	}
	
	// Gets a reference to the configuration object
	public static function &getConfig() {
		return SR_Config::getInstance();
	}
	
	// Gets a reference to the current user object
	public static function &getUser() {
		return SR_User::getInstance();
	}
	
	// Gets a reference to the database object
	public static function &getDBO() {
		return SR_SQLConn_Ext::getInstance();
	}
	
}

?>