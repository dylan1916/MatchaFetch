<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="V/style.css" media="all"/>        
		<title>Profil</title>
	</head>
	<body>
		<form method="post" action="index.php?controle=profil&action=add_profil2" enctype="multipart/form-data">
			<div class="container">
                <p>Login :</p>
                <input type="text" name="login" id="login" value="<?php echo(htmlspecialchars($_SESSION['profil']['login'])) ;?>" />
                <p>Name :</p>
                <input type="text" name="name" id="name" value="<?php echo(htmlspecialchars($_SESSION['profil']['name'])) ;?>" />
                <p>Last-Name :</p>
                <input type="text" name="last_name" id="last_name" value="<?php echo(htmlspecialchars($_SESSION['profil']['last_name'])) ;?>" />
             
                <p>Mail :</p>
                <input type="email" name="mail" id="mail" value="<?php echo(htmlspecialchars($_SESSION['profil']['mail'])) ;?>"  /><br/>
                <b>Genre</b>  
                <div>
                    <input type="radio" name="genre" value="man" checked>
                    <label for="man">Man</label>
                    <input type="radio" name="genre" value="women">
                    <label for="women">Women</label>
                </div>
                <div>
                    <label>I am :</label>
                    <select name="orientation" required>
                        <option value="man">a man looking for a woman</option>
                        <option value="woman">a woman looking for a man</option>
                        <option value="lesbienne">a woman looking for a woman</option>
                        <option value="homo">a man looking for a man</option>
                    </select>
                </div>
                <div>
                        <label>My age :</label>
                        <select name="age" required>
                        <option value="" selected >--select your age--</option>
                          <?php for($value = 18; $value <= 75; $value++){ 
                            echo('<option value="' . $value . '">' . $value . '</option>');
                        }?>
                        </select>
                
                </div>
                <div>
                    My location :<input type="text" name="location" id="location" placeholder="75018" value="<?php echo(htmlspecialchars($_SESSION['profil']['location'])) ;?>" required><br>
                </div>
                <div>
                    My age :<input type="text" name="agemodif" value="<?php echo(htmlspecialchars($_SESSION['profil']['age'])) ;?>" required><br>
                </div>
                <div>
                    <label for="biography">Tell us your story:</label> <br>
                    <textarea id="biography" name="biography" rows="5" cols="33" value=""
                     placeholder="write a little biography about you.."
                     required><?php echo $_SESSION['profil']['biography'];  ;?></textarea> 
                </div>
                <div>
                    <input type="hidden" id="filtre_src" name="filtre" value="img/f.png"/>
                    <input type="hidden" id="src_px" name="src_px"/>
                    <input type="hidden" id="src_py" name="src_py"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                    <input type="hidden" id="img_src" name="img_src" value=""/>
                    <input id="up" onchange="uplode();" type="file" name="img" />
                    <input type="submit" class="inscriptionbtn" id="upload" name="upload" style="display:none" value="Envoyer" />
                </div>
            </div>
                <button type="submit" value="save">Sauvegarder</button>    
        </form>

   <?php
        $id =  $_SESSION['profil']['id'];
        $dirname = "ImageUser/" . $id . '/';
        $images = glob($dirname."*.*");
        
        foreach($images as $image) {
            echo '<img class="cinquante" src="'.$image.'" /><br />';
        }
    ?>
		<a href="index.php?controle=param&action=delete_account">Supprimer mon compte</a>

        <!-- <button onclick="history.go(-1);">Back </button>
        <a href="javascript:history.back()">Retour</a> -->
        
	</body>
</html>
