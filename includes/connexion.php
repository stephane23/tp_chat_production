<?php 
try {

    $bdd = new PDO('mysql:host='.(getenv('MYSQL_HOST') ?: 'localhost').';dbname=mini_chat_slyt;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){

    die('Erreur : '.$e->getMessage());
    
}
?>
