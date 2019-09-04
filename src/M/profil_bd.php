<?php


// function displayProfil($sql){
//     require ('config/database.php');
//     $id = $_SESSION['profil']['id'];

//     $req = $bdd->prepare('SELECT genre, location, orientation, biography, age FROM user WHERE id= :id');
// 	$sql = $req->execute(array(
//                 'id' => $id)
//             );
//     return 1;
// }

function addProfil($genre, $location, $biography,$orientation, $age, $name, $login, $last_name, $mail){
    require ('config/database.php');
    $id = $_SESSION['profil']['id'];

    $sql = $bdd->prepare('UPDATE user SET location= :location, orientation = :orientation,
                            name = :name, last_name = :last_name, mail = :mail, login = :login,
                            genre = :genre, biography = :biography, age = :age WHERE id= :id');
	$res = $sql->execute(array(
				'location' => $location,
                'genre' => $genre,
                'age' => $age,
                'orientation' => $orientation,
                'biography' => $biography,    
                'last_name' => $last_name, 
                'name' => $name,
                'mail' => $mail,
                'login' => $login,
				'id' => $id
                ));
    require ('M/connect_bd.php');
    getUser($id);
	return 1;
}

?>