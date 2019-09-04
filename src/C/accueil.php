<?php

function home()
{
	if (isset($_SESSION['profil']))
	{
		$user =  $_SESSION['profil']['login'];
	}
	require 'V/accueil.php';
}


?>
