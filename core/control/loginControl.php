<?php
/**
 * Created by PhpStorm.
 * User: Hacca
 * Date: 20/01/2017
 * Time: 19:06
 */

include_once MODEL_DIR."UtenteManager.php";

$manager = new UtenteManager();

if(isset($_POST['username'])&&isset($_POST['password'])){
    $username = $_POST['username'] ;
    $password = $_POST['password'];

    if($manager->checkLogin($username,$password)){
        $user = $manager->getUtenteById($username);
        $_SESSION['user']= serialize($user);
        header ("location: ".DOMINIO_SITO);
    }
    else{
        header ("location: ".DOMINIO_SITO.DIRECTORY_SEPARATOR."autenticazione");
    }

}
else{
    header ("location: ".DOMINIO_SITO.DIRECTORY_SEPARATOR."autenticazione");
}

