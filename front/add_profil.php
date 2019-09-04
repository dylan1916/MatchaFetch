
<!DOCTYPE html>
<html lang="en">
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
    <form class="form">
            <div class="form-group">
                <select class="custom-select" required>
                <option value="">Sex</option>
                <option value="1">Man</option>
                <option value="2">Woman</option>
                </select>
            </div>

            <div class="form-group">
                <select class="custom-select" required>
                <option value="">I am ...</option>
                <option value="1">A man looking for a woman</option>
                <option value="2">A woman looking for a man</option>
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
                <input type="text" placeholder="My location" name=""  class="form-control">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Write a little biography about you...(less than 200 characters)"></textarea>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary" id="btn-account">Confirm my information</button>
    </form>
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

