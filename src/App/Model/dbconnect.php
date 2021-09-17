<?php

// Server provided by Nick
$servername="188.166.24.55";
$usern="forum-papy-brossard";
$passw="zbg9QmdLbO5SpDSN";
try{
    $conn = new PDO("mysql:host=$servername;dbname=forum-papy-brossard",$usern,$passw);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>"; 
}




