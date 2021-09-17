<?php

function find_authorid($nickname){
    require "db_connect.php";
    
    $sql="SELECT id from Users where nickname=:nickname";
    $stmt=$conn->prepare($sql);
    $stmt->execute([':nickname' => $nickname]);
    $id_result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $id_result["id"];
}

function insert_topic($title,$content,$board,$id,$date){

    require "db_connect.php";

   


    $sql="INSERT into Topics (title,content,board_name,creation_date,author_id)
          VALUES (:title,:content,:board_name,:creation_date,:author_id)";

    $stmt=$conn->prepare($sql);

    
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":content",$content);
    $stmt->bindParam(":board_name",$board);
    $stmt->bindParam(":creation_date",$date);
    $stmt->bindParam(":author_id",$id);

    $stmt->execute();


}














?>