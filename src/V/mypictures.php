<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Secular+One|Work+Sans:700&display=swap" rel="stylesheet">
      <title>MYPICTURES</title>
</head>
<body> 
    <form method="post" action="index.php?controle=profil&action=addPictures" enctype="multipart/form-data">  
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
    </form>

</body>   