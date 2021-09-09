<?php

declare(strict_types=1);
 

class Topic
{

    public string $creationDate;
    public string $author;
    public string $id_board;
    public bool $state;
    public string $title;
    public string $content;



    public function __construct(string $creationDate, string $author, string $id_board, bool $state, string $title, string $content)
    {
        $this -> creationDate = $creationDate;
        $this -> author = $author;
        $this -> id_board = $id_board;
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