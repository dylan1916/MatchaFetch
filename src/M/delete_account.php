<?php

function delete_account_bd($password)
{
	require('config/database.php');
	$id = $_SESSION['profil']['id'];
	$req = $bdd->prepare('SELECT * FROM user WHERE id = ?');
	$req->execute(array($id));
	$resultat = $req->fetch();
	// Comparaison du pass envoyé via le formulaire avec la base
	$isPasswordCorrect = password_verify($password, $resultat['password']);
	if ($resultat)
	{
		if ($isPasswordCorrect){
			$reqb = $bdd->prepare('DELETE FROM user WHERE id = ?');
			$reqb->execute(array($id));
			require 'C/logout.php';
			deconnect();
			?>
			<script type="text/javascript">
				alert('Votre compte a été supprimé.');
			</script>
			<?php
			require ('C/accueil.php');
			home();
		}
		else
		{
?>
			<script type="text/javascript">
				alert('Le mot de passe n\'est pas correct.');
			</script>
			<?php
		}
	}
}


?>
