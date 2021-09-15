<?php
declare(strict_types = 1);

require_once '../app/Model/Divdroite.php';

if(isset($_POST["login"])){

    if(!empty($_POST["username"]) && !empty($_POST["password"])){
       include_once ("/var/www/html/app/Model/Divdroite.php");
        $username=$_POST["username"];
        $password=$_POST["password"];
        
       

    }
    else{
        echo "<h3 class='message bg-white border border-danger text-danger'>ERRROR</h3>";
    }
}










?>