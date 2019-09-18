<?php

function checkmatch($id_send, $id_rec){
    require ('config/database.php');
    $req = $bdd->prepare('SELECT * FROM likes WHERE creator_id = :creator_id AND img_id = :img_id');
    $req->execute(array(
        'creator_id' => $id_send,
        'img_id' => $id_rec
        ));

	if($req->rowCount() < 1){
        return 0;
    }
    $req = $bdd->prepare('SELECT * FROM likes WHERE creator_id = :creator_id AND img_id = :img_id');
    $req->execute(array(
        'creator_id' => $id_rec,
        'img_id' => $id_send
        ));
    if ($req->rowCount() > 0){
        return 1;
    }
    // echo "-->";
    return 0;
}

function  saveMatch($creator_id, $idUser){
    require ('config/database.php');
    $id = $_SESSION['profil']['id'];

    $answer = "envoyer";
    $time = date("Y-m-d H:i:s");

    $req = $bdd->prepare('insert into matche(user_one, user_two, answer, time) values (:user_one, :user_two, :answer, :time)');
    $res = $req->execute(array(
            'user_one' => $creator_id,
            'user_two' => $idUser,
            'answer' => $answer,
            'time' => $time
            ));
    require('C/notif.php');
    mail_likeBack($idUser);
    return 1;
}

function matchExist($creator_id, $idUser){
    require ('config/database.php');

    $req = $bdd->prepare('SELECT * FROM matche WHERE user_one = :user_one AND user_two = :user_two');
    $req->execute(array(
        'user_one' => $creator_id,
        'user_two' => $idUser
        ));
    if ($req->rowCount() > 0){
        return 1;
    }
    return 0;
}

function getFriendsMatch(){
    require ('config/database.php');
    $id = $_SESSION['profil']['id'];

    $req = $bdd->prepare('SELECT user_two FROM matche WHERE user_one = ?');
    $req->execute(array($id));
    $users_id = $req->fetchAll(PDO::FETCH_COLUMN, 0);
    //renvoi tout les user_two matcher
    return $users_id;
}

?>