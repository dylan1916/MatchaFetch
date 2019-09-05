<?php

//afficher tout les photos de profil
function accueil_bd($id){
    require('config/database.php');
    $req = $bdd->prepare('SELECT * FROM user');
    $req->execute();
    $resultat = $req->fetch();
    
  
	require 'V/displayImage.php';

}


?>