<?php

declare(strict_types=1);
 

class Board
{

    public string $name;
    public string $description;
    public string $category;
       

    public function __construct(string $name, string $description, string $category)
    {
        $this -> name = $name;
        $this -> description = $description;
        $this -> category = $category;
    }

}