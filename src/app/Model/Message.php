<?php

declare(strict_types=1);
 

class Message
{

    public $author;
    public $content;
    public $creationDate;
    public $editionDate;
    

    public function __construct($author, $content, $creationDate, $editionDate)
    {
        $this -> author = $author;
        $this -> content = $content;
        $this -> creationDate = $creationDate;
        $this -> editionDate = $editionDate;
    }

    public function formatCreationDate()
    {
       $formatted = date('d/M/Y', strtotime($this -> creationDate));
       return $formatted;
   }

   public function formatEditionDate()
    {
       $formatted = date('d/M/Y', strtotime($this -> editionDate));
       return $formatted;
   }
}