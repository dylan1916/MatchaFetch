<head>
    <title>My profil</title>
</head>
<?php require('header.php'); ?>
 
<center>
    <h5 id="title">My profil</h5>
</center>
<br/><br/><br/>

<center>
<br/><br/>



<div class="container">
    <form method="post" action="index.php?controle=profil&action=add_profil2" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12">
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
            <input id="up" type="file" name="img" /> -->
            <div class="image-upload">
                <label for="file-input">
                    <img class="cinquante cursorpointer" src="V/pictures/profil.png"/>
                </label>
                <input id="file-input" type="file" name="img" />
            </div>
            <!-- <input type="submit" class="inscriptionbtn" id="upload" name="upload" style="display:none" value="Envoyer" /> -->
            <?php
                $id =  $_SESSION['profil']['id'];
                $dirname = "ImageUser/" . $id . '/';
                $images = glob($dirname."*.*");
                
                foreach($images as $image) {
                    echo '<img class="cinquante" src="'.$image.'" /><br />';
                }
            ?>

          
        </div>
       
    </div>
    <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <input  <?php  echo ($_SESSION['profil']['genre'] == "man" ? 'checked="checked"': ''); ?> type="radio" name="genre" value="man" >
                    <label for="man">Man</label>
                    <input  <?php echo ($_SESSION['profil']['genre'] == "woman" ? 'checked="checked"': '');?> type="radio" name="genre" value="woman">
                    <label for="woman">Woman</label>
                </div>
            </div>
        </div>
        <div class="row">    
            <div class="col-6">    
                <div class="form-group">
                    <input type="text" class="form-control" name="login" id="login" value="<?php echo(htmlspecialchars($_SESSION['profil']['login'])) ;?>" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo(htmlspecialchars($_SESSION['profil']['name'])) ;?>" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo(htmlspecialchars($_SESSION['profil']['last_name'])) ;?>"required/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="mail" id="mail" value="<?php echo(htmlspecialchars($_SESSION['profil']['mail'])) ;?>"  required/>
                </div>
                <p>Tags, please choose three</p>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "artist") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="artist" name="interests[]" value="artist" >
                <label for="artist">#Artist</label>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "worker") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="worker" name="interests[]" value="worker" >
                <label for="worker">#Hard worker</label>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "athletic") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="athletic" name="interests[]" value="athletic" >
                <label for="athletic">#Athletic</label>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "geek") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="geek" name="interests[]" value="geek">
                <label for="geek">#Geek</label>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "musician") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="musician" name="interests[]" value="musician">
                <label for="musician">#Musician</label>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "traveler") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="traveler" name="interests[]" value="traveler">
                <label for="traveler">#Traveler</label>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "sleeper") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="sleeper" name="interests[]" value="sleeper">
                <label for="sleeper">#Sleeper</label>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "match") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="match" name="interests[]" value="match">
                <label for="match">#Match</label>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "cat") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="cat" name="interests[]" value="cat">
                <label for="cat">#Cat</label>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "reveler") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="reveler" name="interests[]" value="reveler">
                <label for="reveler">#Reveler</label>
                <input <?php echo ( strpos($_SESSION['profil']['tags'],  "romantic") !== FALSE ? 'checked="checked"': ''); ?> type="checkbox" id="romantic" name="interests[]" value="romantic">
                <label for="romantic">#Romantic</label>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <select name="orientation" class="custom-select" required>
                        <option value="" selected >I am ...</option>
                        <option <?php if ($_SESSION['profil']['orientation'] == "woman") echo "selected=\"selected\"" ?>value="woman">looking for a woman</option>
                        <option <?php if ($_SESSION['profil']['orientation'] == "man") echo "selected=\"selected\"" ?>value="man">looking for a man</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="custom-select"  name="age" required>
                            <option value="" selected >Select your age</option>
                            <?php for($value = 18; $value <= 75; $value++){ 
                                    echo('<option value="' . $value . '"'); 
                                    if ($_SESSION['profil']['age'] == $value)
                                        echo("selected=\"selected\"");
                                    echo('>' . $value . ' ans</option>');
                            }?>
                    </select>
                </div>
                <div class="form-group">

                    <input value="<?php echo(htmlspecialchars($_SESSION['profil']['adress'])) ;?>" id="address" type="text" class="form-control" name="address" placeholder="Adress" required>
                    <input value="<?php echo(htmlspecialchars($_SESSION['profil']['city'])) ;?>" id="city" type="text" class="form-control" name="city" placeholder="City" required>
                    <input value="<?php echo(htmlspecialchars($_SESSION['profil']['zipcode'])) ;?>" id="zipcode" type="tel" class="form-control" name="zipcode" minlength="5" maxlength="5" placeholder="Zip Code" required>
                    <!-- <input type="text" placeholder="My location" name="location" value="<?php echo(htmlspecialchars($_SESSION['profil']['location'])) ;?>"  class="form-control"> -->
                </div>
                <div class="form-group">
                    <textarea class="nosizetextarea form-control" name="biography" id="exampleFormControlTextarea1" rows="5" placeholder="Write a little biography about you...(less than 200 characters)" required><?php echo(htmlspecialchars($_SESSION['profil']['biography'])) ;?></textarea>
                </div>
                <br/>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary" id="btn-account">Confirm my information</button>
                </div>
            </div>
        </div>
    </form>
</div>

<a href="index.php?controle=param&action=delete_account">Supprimer mon compte</a>

</center>
<br/><br/><br/><br/>


<script>
$('input[type=checkbox]').change(function(e){
   if ($('input[type=checkbox]:checked').length > 3) {
        $(this).prop('checked', false)
        alert("allowed only 3");
   }
})
</script>
<?php require('footer.php'); ?>