<?php
$servername = 'mysql';
$username = 'root';
$password = 'root';

try{
    $db = new PDO("mysql:host=$servername", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sqldb = "CREATE DATABASE Forum";
    $db->exec($sqldb);
    
    echo 'Base de données créée bien créée !';
    
}

catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}

//$db = NULL;
?>