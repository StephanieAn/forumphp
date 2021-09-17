<?php 

declare(strict_types=1);

require_once '../app/Libraries/DatabaseForum.php'; 

class Users extends DatabaseForum
{
    public function getUsers(){
        $data = $this -> fetchUsers();
        return $data;
    }

    public function fetchUsers(){
        $db = $this -> connectDb();

        $req = $db -> query(
            'SELECT * 
            FROM users
            /*ORDER BY publish_date 
            DESC */' );

        return $req -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSingleUser($username){
        
        $data = $this -> fetchSingleUser($username);
        return $data;
    }

    public function fetchSingleUser($username){
        $db = $this -> connectDb();

        $req = $db -> query(
            "SELECT * 
            FROM users
            WHERE username = '$username'
            ");

        return $req -> fetch(PDO::FETCH_ASSOC);
    }

    // public function createUser(){
    //     $db = $this->connectDb();
    //     $db->prepare(
    //         'INSERT INTO users (username,email,password,signature) VALUES (?,?,?,?)'
    //     )->execute([$this->username, $this->email, $this->password, $this->signature]);
    //   }

}