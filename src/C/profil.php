<?php

function add_profil(){
	require 'M/profil_bd.php';
	// displayProfil();
    require 'V/profil.php';
}

function add_profil2(){
    $location = isset($_POST['location'])?$_POST['location']:'';
    $biography = isset($_POST['biography'])?$_POST['biography']:'';
	$genre = isset($_POST['genre'])?$_POST['genre']:'';
	$orientation = isset($_POST['orientation'])?$_POST['orientation']:'';
	$age = isset($_POST['age'])?$_POST['age']:'';
	$name = isset($_POST['name'])?$_POST['name']:'';
	$login = isset($_POST['login'])?$_POST['login']:'';
	$last_name = isset($_POST['last_name'])?$_POST['last_name']:'';
	$mail = isset($_POST['mail'])?$_POST['mail']:'';
   

	$id = $_SESSION['profil']['id'] ;
	$RandomAccountNumber = uniqid(); //generer un nom aleatoirement

	$nameImage = $id . '_' . $RandomAccountNumber;
	$structure = 'ImageUser/' . $id . '/';
	$extension = strrchr($_FILES['img']['name'], '.'); // recuperer l'extension de l'image uploader
	if (!file_exists($structure)) {
		mkdir($structure, 0777, true);
	}
	move_uploaded_file($_FILES["img"]["tmp_name"], $structure . $nameImage . $extension);


    require 'M/profil_bd.php';
    if (addProfil($genre, $location, $biography, $orientation, $age, $name, $login, $last_name, $mail) == 1){
	    require 'V/accueil.php';
    }

}

?>