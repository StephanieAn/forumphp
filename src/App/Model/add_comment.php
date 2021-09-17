<?php 


function add_comment($topic,$date,$auteurid,$content) {
        require 'db_connect.php'; 
    $sql = 'INSERT INTO Messages (author_id,content,create_date,topic_number)  VALUES
            (:author_id,:content,:create_date,:topic_number )';

    $stmt = $conn -> prepare($sql) ; 
    $stmt -> BindParam (':author_id', $auteurid);
    $stmt -> BindParam (':content', $content);
    $stmt -> BindParam (':create_date', $date);
    $stmt -> BindParam (':topic_number', $topic);

    $stmt -> execute(); 

    
}


?>