<?php 

declare(strict_types=1);

require_once '../app/libraries/DatabaseForum.php'; 

class Boards extends DatabaseForum
{
    public function getBoards(){
        $data = $this -> fetchBoards();
        return $data;
    }

    public function fetchBoards(){
        $db = $this -> connectDb();

        $req = $db -> query(
            'SELECT * 
            FROM boards
            ' );

        return $req -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSingleBoard($name){
        
        $data = $this -> fetchSingleBoard($name);
        return $data;
    }

    public function fetchSingleBoard($name){
        $db = $this -> connectDb();

        $req = $db -> query(
            "SELECT * 
            FROM boards
            WHERE `name` = '$name'
            ");

        return $req -> fetch(PDO::FETCH_ASSOC);
    }

}