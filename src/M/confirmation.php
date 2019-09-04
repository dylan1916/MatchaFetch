<?php

function valid_bd($mail)
{
	require('config/database.php');
	$req = $bdd->prepare('SELECT validate FROM user WHERE mail = ?');
	$req->execute(array($mail));
	$resultat = $req->fetch();
	if ($resultat['validate'] == 1){
		return 1;
	}
	else{
	?>
			<script type="text/javascript">
		alert('Veuillez activer votre compte par mail');
		</script>
			<?php
		require 'V/inscription.html';
		return 0;
	}

}

?>
