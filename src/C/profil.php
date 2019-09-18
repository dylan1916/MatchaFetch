<?php

function add_profil(){
	// require 'M/profil_bd.php';
	// displayProfil();
    require 'V/myprofil.php';
}


function add_profil2(){
    $location2 = isset($_POST['address'])?$_POST['address']:'';
    $biography = isset($_POST['biography'])?$_POST['biography']:'';
	$genre = isset($_POST['genre'])?$_POST['genre']:'';
	$orientation = isset($_POST['orientation'])?$_POST['orientation']:'';
	$age = isset($_POST['age'])?$_POST['age']:'';
	$name = isset($_POST['name'])?$_POST['name']:'';
	$login = isset($_POST['login'])?$_POST['login']:'';
	$last_name = isset($_POST['last_name'])?$_POST['last_name']:'';
	$mail = isset($_POST['mail'])?$_POST['mail']:'';
	$tag = isset($_POST['interests'])?$_POST['interests']:'';


	$tags = implode(",",$tag);
	// if(!empty($_POST['interests'])){
	// 	// Loop to store and display values of individual checked checkbox.
	// 	foreach($_POST['interests'] as $dbvalue){
	// 		echo "-->" . $dbvalue."</br>";
	// 	}
	// }

	$id = $_SESSION['profil']['id'] ;
	//_____________________________________________________
	$city = isset($_POST['city'])?$_POST['city']:'';
	$zipcode = isset($_POST['zipcode'])?$_POST['zipcode']:'';
    $adress = isset($_POST['address'])?$_POST['address']:'';
    $adress_url = urlencode($adress); // pour mettre des plus dans les espaces, pour l'encoder.

	// $location = $location2 . '+' . $city;

	$ch = curl_init(); // Création d'une nouvelle ressource cURL

    // Configuration de l'URL et d'autres options
    curl_setopt($ch, CURLOPT_URL, "https://nominatim.openstreetmap.org/search?q=" . $adress_url . ",+" . $city . "&format=json&limit=1&email=jeanclaude@certifies.com");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Récupération de l'URL et affichage sur le navigateur
	$result = curl_exec($ch);
	// echo $result;

    // Fermeture de la session cURL
    curl_close($ch);

	$donneee = json_decode($result, true);
	// echo "-----> ";
	// print_r($donneee);
    $lat = $donneee[0]['lat'];
	$lon = $donneee[0]['lon'];
	//_________________________________________________________

	$structure = 'ImageUser/' . $id . '/';
	$extension = strrchr($_FILES['img']['name'], '.'); // recuperer l'extension de l'image uploader
	if (!file_exists($structure)) {
		mkdir($structure, 0777, true);
	}
	move_uploaded_file($_FILES["img"]["tmp_name"], $structure . $id . $extension);
	save_pic();
    require 'M/profil_bd.php';
    if (addProfil($genre, $adress, $zipcode, $city, $biography, $orientation, $age, $name, $login, $last_name, $mail, $tags, $lat, $lon) == 1){
		require 'V/myprofil.php';
	}

}

function save_pic(){
	require_once ('config/database.php');
    $creator_id = $_SESSION['profil']['id'];
    
    $RandomAccountNumber = uniqid(); //generer un nom aleatoirement
	$titre = $creator_id . '_' . $RandomAccountNumber;
    
	$req = $bdd->prepare('insert into images (titre, creator_id, date_creation) values (:titre, :creator_id, NOW())');
	$req->execute(array(
				'titre' => $titre,
				'creator_id' => $creator_id
				));
	$req->closeCursor();
	return 1;
}

function add_pic(){
	require ('V/mypictures.php');
}

function likeprofil(){
	$idUser = $_POST["idUser"];
	$love = $_POST["love"];
	
	// echo $idUser;
	require 'M/profil_bd.php';
	save_like2($idUser);
	likeprofilbd($idUser, $love);
	require ('M/accueil_bd.php');
	displayProfilUserBd($idUser);
}

// page search_filter.php
function like(){
	$idUser = $_POST["idUser"];
	$love = $_POST["love"];
	
	// echo $idUser;
	require 'M/profil_bd.php';
	save_like2($idUser);
	likeprofilbd($idUser, $love);
	require 'V/search_filter.php';
}

?>