<?php
	require_once( 'connect.php' );

	$sql ="INSERT INTO
			`personnage`
		(
			`pseudo`,
			`classe`,
			`sexe`
		)
			VALUES 
		(
			'". $db->real_escape_string( $_POST['pseudo'] ) ."',
			'". $db->real_escape_string( $_POST['classe'] ) ."',
			'". $db->real_escape_string( $_POST['choix1'] ) ."'
		);";

	if( !$db->query( $sql )){
		die( $db->error );
	}
	header( 'Location: jeux.php' );
?>