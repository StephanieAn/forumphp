<?php 

function getLastPosts(){
    
    require("../App/Model/db_connect.php");
    
    $sql = "Select * from Topics inner join Users where Topics.Author_Id=Users.Id order by Creation_Date DESC";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $fetched_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $fetched_data;


}

?>