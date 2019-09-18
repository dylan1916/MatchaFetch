<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="V/css/create_account.css">
    <link type="text/css" rel="stylesheet" href="V/css/header.css">
    <link type="text/css" rel="stylesheet" href="V/css/add_updateProfil.css">
    <link type="text/css" rel="stylesheet" href="V/style.css">
    <link type="text/css" rel="stylesheet" href="V/css/footer.css">
    <link type="text/css" rel="stylesheet" href="V/ss/modifyProfil.css">
    <link type="text/css" rel="stylesheet" href="V/css/homeFilter.css">
    <link type="text/css" rel="stylesheet" href="V/css/search.css">
    <link type="text/css" rel="stylesheet" href="V/css/profil.css">
    <link type="text/css" rel="stylesheet" href="V/css/friends.css">
    <script src="V/script.js" type="text/javascript"></script> 
    <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-add-css="false"></script>
    <link href="https://use.fontawesome.com/releases/v5.10.2/css/svg-with-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Secular+One|Work+Sans:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300i&display=swap" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-light" style="background-color: white;">
        <a href="index.php" class="navbar-brand" style="color:#E9467C"><img src="V/pictures/icon.png" class="d-inline-block align-top">Matcha</a>
        <form class="form-inline">
            <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true"  style="text-decoration:none; color:#E9467C; font-family: 'Arimo', sans-serif;background-color:white;border: none;">
                      My account
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a href="index.php?controle=profil&action=add_profil" style="text-decoration:none;color:#E9467C;text-align:center;font-family: 'Arimo', sans-serif; font-size: 15px;">My profile</a><br/>
                      <a href="index.php?controle=profil&action=add_pic">My PICTURE</a><br/>
                      <a href="index.php?controle=param&action=modif_pseudo">Modifier le profil</a><br/>
                      <a href="index.php?controle=param&action=modif_psw">Changer le Mot de passe</a><br/>
                    </div>
            </div>
            <a href="index.php?controle=match&action=getmatch">Mes amis</a><br/>
            <a href="" style="text-decoration:none; color:#E9467C; font-family: 'Arimo', sans-serif;">Tchat</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php?controle=logout&action=deconnect" style="text-decoration:none; color:#E9467C; font-family: 'Arimo', sans-serif;">Sign Out</a>
        </form>
    </nav>  
