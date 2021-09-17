<?php 

    function fetchLastActive(){
        require("../App/Model/db_connect.php"); 
        $sql = "SELECT * from Users order by Last_Active DESC";
        
        if (isset($_SESSION['username'])) {
            $sql = "SELECT * from Users where Nickname != '" . $_SESSION['username'] . "' order by Last_Active DESC";
        }
    
        
        

        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $fetchData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $fetchData;
    }


?>