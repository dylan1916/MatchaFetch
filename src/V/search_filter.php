<head>
    <title>Matcha</title>
</head>
<?php
    require('header.php');

    $directory = 'ImageUser';
    $images = glob($directory . "/*/*.*");
?>

    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <form action="">      
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <select class="custom-select" required>
                                <option value="">----Search by age----</option>
                                <option value="1">18-25 years old</option>
                                <option value="2">25-30 years old</option>
                                <option value="2">30-35 years old</option>
                                <option value="2">35+ years old</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <select class="custom-select" required>
                                <option value="">----Search by tags----</option>
                                <option value="1">#cinema</option>
                                <option value="2">#trip</option>
                                <option value="2">#music</option>
                                <option value="2">#dance</option>
                                <option value="2">#reveler</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <select class="custom-select" required>
                                <option value="">----Search by location----</option>
                                <option value="1">Paris</option>
                                <option value="2">Val d'Oise</option>
                                <option value="2">Other</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <select class="custom-select" required>
                                <option value="">----Search by popularity----</option>
                                <option value="1">0-50 like</option>
                                <option value="1">50-100 like</option>
                                <option value="1">100-150 like</option>
                                <option value="1">150-200 like</option>
                                <option value="1">250-350 like</option>
                                <option value="1">350-450 like</option>
                                <option value="1">450-550 like</option>
                                <option value="1">550+ like</option>
                            </select>
                        </div>
                </div>
                </div>
                    <button type="submit" style="text-align:left;" class="btn btn-primary" id="btn-account">Search</button>
                </form>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark" style="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>


    <br/>
    <div class="container-fluid">
        <div class="row">
        <?php
            require 'M/accueil_bd.php';
            $idUser = accueil_bd();
            // print_r($idUser);
            for ($i=0; $i < count($images); $i++){
                $num = $images[$i]; 
                $bla = str_replace('ImageUser/', '', $num);
                $arr = explode("/", $bla, 2);
                // echo " " . $arr[0];
                require_once 'M/accueil_bd.php';
                $dataUser = getUserdata($arr[0]);
                if(in_array($arr[0], $idUser) == TRUE && $arr[0] != $_SESSION['profil']['id']){

            ?>
            <div class="col-lg-3">
                <div class="row overlay">
                    <div class="col-lg-12">
                        <div class="img-best-container">
                            <div class="hello">
                            <?php 
                            
                                echo '<img class="col d-flex align-items-center justify-content-center" src="'. $num .'" alt="random image">';
                            ?>
                                <div class="middle">
                                    <div class="info-user">
                                        <?php
                                            echo $dataUser['login'];
                                            echo " ".$dataUser['age'] . " ans";
                                        ?>
                                    </div>
                                    <form action="index.php?controle=accueil&action=displayProfilUser" method="post">
                                        <div class="text">
                                            <input id="goToPage" type="hidden" value="<?php echo $arr[0] ?>" name="idUser">
                                            <a href="#" style="color:#E9467C;text-decoration:none;font-family: 'Roboto', sans-serif;" onclick="$(this).closest('form').submit()">Click here to go on her profil</a>
                                        </div>
                                    </form>
                                    <form method="post" action="index.php?controle=profil&action=like">
                                        <input id="goToPage" type="hidden" value="<?php echo $dataUser['id'] ?>" name="idUser">
                                        <input id="loveUser" type="hidden" value="<?php echo $dataUser['love'] ?>" name="love">
                                        <input type="image" src="V/pictures/like.svg" name="img_id" alt="like" width="25" height="25">
                                        <!-- <i class="fas fa-heart"></i> -->
                                    </form>
                                    <!-- <i class="fas fa-heart fa-3x cursorpointer"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }

                }
            ?>
        </div>
    </div>

        <br/><br/><br/>
    
<?php require('footer.php'); ?>