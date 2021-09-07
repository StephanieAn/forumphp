<?php
$servername = 'mysql';
$username = 'root';
$password = 'root';



try {
    $source = new PDO("mysql:host=$servername", $username, $password);

    $source->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE Forum";
    $source->exec($sql);

    echo 'Base de données créée bien créée !';

}

catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}
?>