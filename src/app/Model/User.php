<?php

declare(strict_types=1);
 

class User
{

    public string $username;
    public string $avatar;
    public string $email;
    public string $passeword;
    public ?string $signature;


    public function __construct(string $username, string $avatar, string $email, string $passeword, ?string $signature)
    {
        $this->title = $username;
        $this->description = $avatar;
        $this->email = $email;
        $this->passeword = $passeword;
        $this->signature = $signature;
    }

    //public function formatPublishDate()
    //{
       // $formatted = date('d/M/Y', strtotime($this->publishDate));
       // return $formatted;
   // }
}