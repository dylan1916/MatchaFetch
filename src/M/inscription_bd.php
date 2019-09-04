<?php

function inscription($login, $last_name, $name, $mail, $password1)
{
	require ('config/database.php');
	if ((pseudo_exist($login) == 1) || (mail_exist($mail) == 1)){
		return 0;
	}
	else
	{
		$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
		// $validation = 0;
		$inserer = $bdd->prepare('insert into user (login, last_name, name, mail, password, validate, orientation, biography, interests, notif)
				values (:login, :last_name, :name, :mail, :password, 0, NULL, NULL, NULL, 0)');

		$inserer->execute(array(
					'login' => $login,
					'last_name' => $last_name,
					'name' => $name,
					'mail' => $mail,
					'password' => $pass_hache
					));
	}
	return 1;
}

function pseudo_exist($login)
{
	require ('config/database.php');
	$req = $bdd->prepare('select * from user where login= ?');
	$req->execute(array($login));
	$data = $req->fetch();
	if ($data == 0){
		return 0;
	}
	else{
		return 1;
	}
}

function mail_exist($mail)
{
	require ('config/database.php');
	$req = $bdd->prepare('select * from user where mail = ?');
	$req->execute(array($mail));
	$data = $req->fetch();
	if ($data == 0)
		return 0;
	else{
		return 1;
	}
}

?>
