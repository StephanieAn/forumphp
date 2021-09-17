<?php 
if(empty($_SESSION['username'])){
    // echo "<h3 class='message bg-white border border-success text-success'>Connect for more fun</h3>";
}

if(isset($_SESSION['username'])){
    require_once("../App/Model/insert_data.php");
    LastActive($_SESSION['username']);
}

?>