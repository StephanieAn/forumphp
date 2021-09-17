<?php



/* $hash1 = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
$hash2 = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
$hash3 = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
$hash4 = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
$hash5 = password_hash("rasmuslerdorf", PASSWORD_DEFAULT); */

function insert($avatar, $email, $nickname,$password,$signature) {
    require "db_connect.php";
    // $user = array(':avatar' => $avatar,
    //               ':email' => $email,
    //               ':nickname' => $nickname,
    //               ':password' => $password,
    //               ':signature' => $signature
    //             );
 
    $sql = "INSERT INTO Users (
            avatar,
            email,
            nickname,
            password,
            signature
    )
            VALUES (
            :avatar,
            :email,
            :nickname,
            :password,
            :signature
    )";


    $stmt = $conn->prepare($sql);

                
    $stmt->bindParam(":avatar", $avatar);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":nickname", $nickname);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":signature", $signature);

    $stmt->execute();

 
   
}
/*
insert(" ","bob@becode.com","spiderman",$hash1,"goat");
insert(" ","joe@becode.com","batman",$hash2,"goat");
insert(" ","mike@becode.com","antman",$hash3,"goat");
insert(" ","nick@becode.com","superman",$hash4,"goat");
insert(" ","james@becode.com","joker",$hash5,"goat");*/



?>