<?php 


function print_topic($board, $search) {

require "db_connect.php";

if($board === NULL && $search === NULL){
    $sql = "SELECT Nickname, Content, Creation_Date, TITLE, Topic_Number, locked FROM Users inner join Topics on Users.id=Topics.Author_ID";
    $stmt = $conn->prepare($sql);
}else if(($board === NULL && $search !== NULL) || ($board !== NULL && $search !== NULL)){
    $sql = "SELECT Nickname, Content, Creation_Date, TITLE, Topic_Number, locked FROM Users inner join Topics on Users.id=Topics.Author_ID where TITLE like '%$search%'";
    $stmt = $conn->prepare($sql);
}else if($board !== NULL && $search === NULL){
    $sql = "SELECT Nickname, Content, Creation_Date, TITLE, Topic_Number, locked FROM Users inner join Topics on Users.id=Topics.Author_ID where board_name=:board_name ";
    $stmt = $conn->prepare($sql);
    $stmt->BindParam(":board_name",$board);
}


$stmt->execute();               
$topic_array = $stmt -> fetchAll(PDO::FETCH_ASSOC);
return $topic_array ;  




}





?>