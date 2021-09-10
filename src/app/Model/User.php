<?php

declare(strict_types=1);
 

class User
{

    public $username;
    public $avatar;
    public $email;
    public $passeword;
    public $signature;


    public function __construct( $username, $avatar, $email, $passeword, $signature)
    {
        $this -> username = $username;
        $this -> avatar = $avatar;
        $this -> email = $email;
        $this -> passeword = $passeword;
        $this -> signature = $signature;
    }

    //public function formatPublishDate()
    //{
       // $formatted = date('d/M/Y', strtotime($this->publishDate));
       // return $formatted;
   // }
}