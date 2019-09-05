<?php

function home()
{
	if (isset($_SESSION['profil']))
	{
		$user =  $_SESSION['profil']['login'];
	}
	require 'V/accueil.php';
}

function displayProfil(){
	$id =  $_SESSION['profil']['id'];
	require 'M/accueil_bd.php';
	accueil_bd($id);
	return ;
}

?>
