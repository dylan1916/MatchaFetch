<?php

require_once('config/database.php');

function ident()
{
	$login = isset($_POST['login'])?$_POST['login']:'';
	$name = isset($_POST['name'])?$_POST['name']:'';
	$last_name = isset($_POST['last_name'])?$_POST['last_name']:'';
	$mail = isset($_POST['mail'])?$_POST['mail']:'';
	$password1 = isset($_POST['password'])?$_POST['password']:'';
	$password2 = isset($_POST['validate'])?$_POST['validate']:'';

	if (count($_POST) != 6){
		require 'V/inscription.html';
	}
	else if ($password1 != $password2){
		?>
			<script type="text/javascript">
			alert('Les Mots de passe ne sont pas identiques');
		</script>
			<?php
			require 'V/inscription.html';
	}
	else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) || (!preg_match("/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/", $mail))){
		?>
			<script type="text/javascript">
			alert('Le mail n\'est pas valide');
		</script>
			<?php
			require 'V/inscription.html';
	}
	else if ((strlen($password1) < 8) || (!preg_match("#[0-9]+#", $password1) || (!preg_match("#[a-zA-Z]+#", $password1)))){
		?>
			<script type="text/javascript">
			alert('Votre mot de passe doit contenir au moins 8 caractères et inclure un chiffre');
		</script>
			<?php
			require 'V/inscription.html';
	}
	
	else{
		require 'M/inscription_bd.php';
		if (inscription($login, $last_name, $name, $mail, $password1) == 1){
			send_mail($login, $mail);
		}
		else{
			?>
				<script type="text/javascript">
				alert('Cette adresse e-mail ou login est déjà attribuée à un autre client');
			</script>
				<?php
				require 'V/inscription.html';
			return (1);
		}
	}
}
function print_insc(){
	require('V/inscription.html');
}

function send_mail($login, $mail)
{
	require 'config/database.php';
	$req = $bdd->prepare('select id from user where login = ?');
	$req->execute(array($_POST['login']));
	$data = $req->fetch();
	$subject = 'Confirmation du compte -Matcha-!';
	$message = 'Bonjour, ' . $login  . ' Pour valider votre compte, 
	veuillez cliquer sur le lien ci dessous : http://localhost:8888/matcha/src/index.php?r='.$data['id']. 
	'&controle=accueil&action=home';
	mail($mail, $subject, $message); //, implode("\r\n", $headers));

	require 'V/Confirmation.php';
}

?>
