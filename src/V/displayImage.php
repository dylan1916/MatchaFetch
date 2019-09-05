<!DOCTYPE html>
<html lang="en">
<body>



<?php
    require('header.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">h</div>
        <div class="col-lg-3">a</div>
        <div class="col-lg-3">y</div>
        <div class="col-lg-3">a</div>
    </div>
</div>
<?php
    $directory = 'ImageUser';
    $images = glob($directory . "/*/*.*");

    for ($i=0; $i<count($images); $i++){
        $num = $images[$i];
        echo '<img class="cinquante" src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
    }

    require('footer.php');


?>
    
</body>
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="V/style.css">
    <title>Document</title>
</head>

