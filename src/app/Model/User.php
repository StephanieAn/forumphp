<?php

declare(strict_types=1);
 

class User
{
    public $username = 'stef';
    public $avatar = 'elephant';
    public $email = 'Stef@Gmail.com';
    public $password = 'test123';
    public $signature = 'Hello there';


    public function __construct( $username, $avatar, $email, $password, $signature)
    {
        $this -> username = $username;
        $this -> avatar = $avatar;
        $this -> email = $email;
        $this -> password = $password;
        $this -> signature = $signature;
    }

    // public function createUser(){
    //     $db = $this -> connectDb();
    //     $db = prepare("
    //     INSERT INTO Users (username,email,avatar,passeword,signature) 
    //     VALUE(?,?,?,?,?)")
    //     -> execute([$this->username,$this->email,$this->avatar,$this->password,$this->signature]);
    // }

    //public function formatPublishDate()
    //{
       // $formatted = date('d/M/Y', strtotime($this->publishDate));
       // return $formatted;
   // }
}