<?php

declare(strict_types=1);
 

class Topic
{

    public $creationDate;
    public $author;
   //public $id_board;
    public $state;
    public $title;
    public $content;



    public function __construct($creationDate, $author,$state, $title,  $content)
    {
        $this -> creationDate = $creationDate;
        $this -> author = $author;
        //$this -> id_board = $id_board;
        $this -> passeword = $state;
        $this -> title = $title;
        $this -> content = $content;
    }

    public function formatCreationDate()
    {
        $formatted = date('d/M/Y', strtotime($this -> creationDate));
            return $formatted;
   }
}