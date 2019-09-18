<?php

function deconnect()
{
	if (isset($_SESSION['profil'])){
		$_SESSION['profil']['mail'] = NULL;
		session_destroy();
	}
	require 'V/accueil.php';
	// header("location: ./");
}

?>
