<?php
    require('header.php');

    $directory = 'ImageUser';
    $images = glob($directory . "/*/*.*");
?>

<?php
    require_once 'M/match_bd.php';
    $getFriend = getFriendsMatch();
    if ($getFriend == 0){
        echo '<h5 class="center" id="title">You havn\'t match.</h5>';
    }
    else {

?>

<center>
    <h5 id="title">Your matching.</h5>
</center>
<br/><br/><br/>

<div class="row">
    <?php
    // print_r($getFriend);
    for ($i=0; $i < count($images); $i++){
        $num = $images[$i]; 
        $bla = str_replace('ImageUser/', '', $num); // ici on enleve ImageUser et on le remplace par rien.
        $arr = explode("/", $bla, 2);  //on recuper ce qui il y a apres le '/'
        require_once 'M/accueil_bd.php';
        $dataUser = getUserdata($arr[0]);
        
        if(in_array($arr[0], $getFriend) == TRUE && $arr[0] != $_SESSION['profil']['id']){
            ?>
                <div class="col-lg-3">
                    <div class="container">
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
                                <div class="text">
                                    <!-- changer ici, mettre le lien pour tchater avec la personne. -->
                                    <form action="index.php?controle=accueil&action=displayProfilUser" method="post">
                                        <div class="text">
                                            <input id="goToPage" type="hidden" value="<?php echo $arr[0] ?>" name="idUser">
                                            <a href="#" onclick="$(this).closest('form').submit()">Click here for tchat</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            <?php
              
            }
        }
    }
?>
</div>

<?php require('footer.php'); ?>