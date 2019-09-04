<?php
    session_start();
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $controle = isset($_GET['controle'])?$_GET['controle']:'';
    $action = isset($_GET['action'])?$_GET['action']:'print_insc';

    // $forget_psw = isset($_GET['controle'])?$_GET['controle']:'forget_psw';
    $valid = isset($_GET['r'])?$_GET['r']:'';
    
    
    if ($valid != ""){
        require ('./C/confirmation.php');
        confirmation();
    }
    if (count($_GET) == 0){
        if($_SESSION == NULL || $_SESSION['profil'] == NULL){
            require './C/inscription.php';
            $action();
            return ;
        }
        else{
            require 'V/accueil2.html';
            return;
        }
        
    }

    if ((count($_GET) != 0) && (isset($_GET['controle']) && isset ($_GET['action']))){
        if (file_exists('./C/' . $controle . '.php')){
            require ('./C/' . $controle . '.php');
            if (function_exists($action)){
                $action();
                return ;
            }
        }
    }
    require ('./V/erreur404.html'); //cas d'un appel à index.php avec des paramètres incorrects
    
?>
