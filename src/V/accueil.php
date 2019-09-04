
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="V/style.css" media="all"/>        
    <title>Profil</title>
</head>
<body>

<?php
    require('header.php');
?>
 
<center>
    <h5 id="title">Complete my profile information.</h5>
</center>
<br/><br/><br/>

<center>
<!-- IMAGE PROFIL A AJOUTER -->
    <img src="pictures/icon.png" alt="" width="200px" height="180px">
    
<!-- //////////////////////// -->
<br/><br/>

<!-- FORMULAIRE D"AJOUT PROFIL -->
    <form method="post" action="index.php?controle=profil&action=add_profil2" enctype="multipart/form-data">  
                <div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                    <input id="up" type="file" name="img" />
                    <input type="submit" class="inscriptionbtn" id="upload" name="upload" style="display:none" value="Envoyer" />
                </div>

   <?php
        $id =  $_SESSION['profil']['id'];
        $dirname = "ImageUser/" . $id . '/';
        $images = glob($dirname."*.*");
        
        foreach($images as $image) {
            echo '<img class="cinquante" src="'.$image.'" /><br />';
        }
    ?>

                <p>Login :</p>
                <input type="text" name="login" id="login" value="<?php echo(htmlspecialchars($_SESSION['profil']['login'])) ;?>" required/>
                <p>Name :</p>
                <input type="text" name="name" id="name" value="<?php echo(htmlspecialchars($_SESSION['profil']['name'])) ;?>" required/>
                <p>Last-Name :</p>
                <input type="text" name="last_name" id="last_name" value="<?php echo(htmlspecialchars($_SESSION['profil']['last_name'])) ;?>"required />
             
                <p>Mail :</p>
                <input type="email" name="mail" id="mail" value="<?php echo(htmlspecialchars($_SESSION['profil']['mail'])) ;?>"  /><br/>
               
            <div class="form-group">
                <input type="radio" name="genre" value="man" checked>
                <label for="man">Man</label>
                <input type="radio" name="genre" value="women">
                <label for="women">Women</label>
            </div>

            <div class="form-group">
                <select name="orientation" class="custom-select" required>
                <option value="" selected >I am ...</option>
                <option value="man">looking for a woman</option>
                <option value="woman">looking for a man</option>
                </select>
            </div>
             <div class="form-group">
                <select class="custom-select"  name="age" required>
                        <option value="" selected >Select your age</option>
                        <?php for($value = 18; $value <= 75; $value++){ 
                        echo('<option value="' . $value . '">' . $value . '</option>');
                    }?>
                </select>
            </div>
            <div class="form-group">
                <input type="text" placeholder="My location" name="location" value="<?php echo(htmlspecialchars($_SESSION['profil']['location'])) ;?>"  class="form-control">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="biography" id="exampleFormControlTextarea1" rows="5" placeholder="Write a little biography about you...(less than 200 characters)"></textarea>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary" id="btn-account">Confirm my information</button>
    </form>

		<a href="index.php?controle=param&action=delete_account">Supprimer mon compte</a>

</center>
<!-- /////////////////////////////// -->
<br/><br/><br/><br/>

<?php
require('footer.php');
?>  
</body>
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/add_updateProfil.css">
    <title>Document</title>
</head>

