<?php

function insert($email,$nickname,$password,$signature)  {
  require "db_connect.php";

   $sql = "INSERT INTO Users (
            email,
            nickname,
            password,
            signature
    )
            VALUES (
            :email,
            :nickname,
            :password,
            :signature
    )";


    $stmt = $conn->prepare($sql);

                

    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":nickname", $nickname);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":signature", $signature);

    $stmt->execute();

}

function edit($id, $nickname,$signature,$avatar)  {
        require "db_connect.php";
      
         $sql = "UPDATE `Users` SET `Nickname`=:nickname,`Signature`=:signature, `Avatar`=:avatar WHERE Id=:id";
      
      
          $stmt = $conn->prepare($sql);
      
                      
      
          $stmt->bindParam(":nickname", $nickname);
          $stmt->bindParam(":signature", $signature);
          $stmt->bindParam(":id", $id);
          $stmt->bindParam(":avatar", $avatar);
      
          $stmt->execute();
      
      }

function LastActive($username){
        require "db_connect.php";

        date_default_timezone_set('Europe/Brussels');
        $date = date("Y-m-d H:i:s"); 

   $sql = "UPDATE Users SET Last_Active='". $date ."' WHERE Nickname='" . $username . "'";


    $stmt = $conn->prepare($sql);

    $stmt->execute();

}

?>



 
 
