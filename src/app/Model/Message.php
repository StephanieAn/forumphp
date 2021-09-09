<?php

declare(strict_types=1);
 

class Message
{

    public string $author;
    public string $content;
    public string $creationDate;
    public string $editionDate;
    

    public function __construct(string $author, string $content, string $creationDate, string $editionDate)
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