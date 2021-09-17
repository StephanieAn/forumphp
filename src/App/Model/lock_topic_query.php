<?php

function lockTopic($topic_id){

    require 'db_connect.php';

    $sql = "UPDATE `Topics` SET `locked`='yes' WHERE Topic_Number=:topicNumber";

    $stmt = $conn->prepare($sql);

    $stmt->BindParam(":topicNumber",$topic_id);
     $stmt->execute();     

}

function unlockTopic($topic_id){

    require 'db_connect.php';

    $sql = "UPDATE `Topics` SET `locked`='no' WHERE Topic_Number=:topicNumber";

    $stmt = $conn->prepare($sql);

    $stmt->BindParam(":topicNumber",$topic_id);
     $stmt->execute();     

}


function get_topic($topic_number){
    require "db_connect.php";
    
    $sql = "SELECT * from Topics where Topic_Number=:Topic_Num";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->BindParam(":Topic_Num",$topic_number);
    $stmt->execute();               
    $topic_array = $stmt -> fetch(PDO::FETCH_ASSOC);
    
    return $topic_array ; 
}



?>