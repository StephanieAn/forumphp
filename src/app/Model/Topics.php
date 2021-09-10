<?php 

declare(strict_types=1);

require_once '../app/libraries/DatabaseForum.php'; 

class Topics extends DatabaseForum
{
    public function getTopics(){
        $data = $this -> fetchTopics();
        return $data;
    }

    public function fetchTopics(){
        $db = $this -> connectDb();

        $req = $db -> query(
            'SELECT * 
             FROM topics
             ORDER BY creation_date
             DESC');

        return $req -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSingleTopic($creationDate){
        
        $data = $this -> fetchSingleTopic($creationDate);
        return $data;
    }

    public function fetchSingleTopic($creationDate){
        $db = $this -> connectDb();

        $req = $db -> query(
            "SELECT * 
             FROM topics
             WHERE creation_date = '$creationDate'
             DESC");

        return $req -> fetch(PDO::FETCH_ASSOC);
    }

}