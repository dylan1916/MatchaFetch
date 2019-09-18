<?php

function home(){
	// if (isset($_SESSION['profil'])){
	// 	$user =  $_SESSION['profil']['login'];
	// }
	// require 'V/accueil.php';
	require 'V/myprofil.php';
}

function displayProfil(){
    require 'V/search_filter.php';
	return ;
}

function displayProfilUser(){
	$idUser = $_POST["idUser"];
	// echo $idUser;
	require 'M/accueil_bd.php';
	displayProfilUserBd($idUser);
}


?>