<?php

declare(strict_types=1);
 

class Board
{

    public $name;
    public $description;
    public $category;
       

    public function __construct($name, $description, $category)
    {
        $this -> name = $name;
        $this -> description = $description;
        $this -> category = $category;
    }

}