<?php 
if(empty($_SESSION['username'])){
    header("location:index.php");
}

if(isset($_SESSION['username'])){
    require_once("../App/Model/insert_data.php");
    LastActive($_SESSION['username']);
}

?>
