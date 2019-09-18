<?php

function addProfil($genre, $adress, $zipcode, $city, $biography, $orientation, $age, $name, $login, $last_name, $mail, $tags, $lat, $lon){
    require ('config/database.php');
    $id = $_SESSION['profil']['id'];

    $sql = $bdd->prepare('UPDATE user SET adress = :adress, zipcode = :zipcode, city = :city, orientation = :orientation,
                            name = :name, last_name = :last_name, mail = :mail, login = :login,
                            genre = :genre, biography = :biography, tags = :tags, age = :age, latitude = :latitude, longitude = :longitude WHERE id= :id');
	$res = $sql->execute(array(
				'adress' => $adress,
				'zipcode' => $zipcode,
				'city' => $city,
                'genre' => $genre,
                'age' => $age,
                'orientation' => $orientation,
                'biography' => $biography,    
                'last_name' => $last_name, 
                'name' => $name,
                'mail' => $mail,
                'login' => $login,
                'tags' => $tags,
                'latitude' => $lat,
                'longitude' => $lon,
				'id' => $id
                ));
    require ('M/connect_bd.php');
    getUser($id);
	return 1;
}

function save_like2($img_id){
	require 'config/database.php'; // On réclame le fichier
	$creator_id = $_SESSION['profil']['id'];
	$req = $bdd->prepare('select id from likes where img_id = :img_id and creator_id = :creator_id ');
	$req->execute(array(
				'img_id' => $img_id,
				'creator_id' => $creator_id
				));
	$num_rows = $req->rowCount();
	if ($num_rows == 0) {
		$req = $bdd->prepare('insert into likes(creator_id, img_id) values (:creator_id, :img_id)');
		$req->execute(array(
					'img_id' => $img_id,
					'creator_id' => $creator_id
                    ));
        require 'C/notif.php';
        mail_like($img_id);
	}
	else {
		$req = $bdd->prepare('delete from likes WHERE img_id = :img_id  and creator_id = :creator_id');
		$req->execute(array(
					'img_id' => $img_id,
					'creator_id' => $creator_id
                    ));
        require('C/notif.php');
        mail_deleteLike($img_id);
	}
	$req->closeCursor();
    return 1;
}

function likeprofilbd($idUser, $love){
    require ('config/database.php');
	$creator_id = $_SESSION['profil']['id'];

    $lover = $love + 1;
    $req = $bdd->prepare('SELECT love FROM user WHERE id = ?');
	$req->execute(array($idUser));
    $resultat = $req->fetch();
    // echo  $lover;
    // print_r($resultat);

    // echo "love : " . $love;
    $sql = $bdd->prepare('UPDATE user SET love = :love WHERE id = :id');
    $res = $sql->execute(array(
        'love' => $lover,
        'id' => $idUser
        ));
    require ('M/match_bd.php');
    if (checkmatch($creator_id, $idUser) == 1 && matchExist($creator_id, $idUser) == 0){
        saveMatch($creator_id, $idUser);
        saveMatch($idUser, $creator_id);
        // sendNotif();
    }
    return 1;
}




?>