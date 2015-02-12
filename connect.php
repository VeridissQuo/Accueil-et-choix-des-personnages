<?php
	$db = new mysqli( 'localhost' , 'root' , '' , 'rpg' );
			if( $db->connect_errno ){
				die( $db->connect_error );
			}
?>