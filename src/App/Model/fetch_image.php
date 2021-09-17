<?php 

    function fetchImage($username){
        require("../App/Model/db_connect.php"); 
        $sql = "SELECT Avatar from Users where Nickname='" .$username. "'";
        

        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $fetchData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $fetchData;
    }


?>