<?php

  function changePassword($confirm){

      require("db_connect.php");
    
            
    $sql="SELECT * from Users where Nickname=:nickname ";
    $statement = $conn->prepare($sql);
    
    $statement->execute([':nickname' => $_SESSION['username']]);
    
    
    if($statement->rowCount() > 0){
        $username_result = $statement->fetch(PDO::FETCH_ASSOC);
        if(password_verify($confirm, $username_result['Password'])){
           return true;
        }
    }

  }  

?>