<?php 

declare(strict_types=1);

require_once '../app/libraries/DatabaseForum.php'; 

class Messages extends DatabaseForum
{
    public function getMessages(){
        $data = $this -> fetchMessages();
        return $data;
    }

    public function fetchMessages(){
        $db = $this -> connectDb();

        $req = $db -> query(
            'SELECT * 
             FROM messages
             ORDER BY edition_date
             DESC *
            ' );

        return $req -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSingleMessage($editionDate){
        
        $data = $this -> fetchSingleMessage($editionDate);
        return $data;
    }

    public function fetchSingleMessage($editionDate){
        $db = $this -> connectDb();

        $req = $db -> query(
            "SELECT * 
             FROM messages
             WHERE edition_date = '$editionDate'
             
            ");

        return $req -> fetch(PDO::FETCH_ASSOC);
    }

}