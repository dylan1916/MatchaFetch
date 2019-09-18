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
