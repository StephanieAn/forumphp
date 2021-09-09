<?php
declare(strict_types=1);
require_once '../app/Config/config.php';


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here

require '../app/Model/User.php';
require '../app/Model/Topic.php';
require '../app/Model/Board.php';
require '../app/Model/Message.php';

//Include all your controller files here


$user = new User("Angelique", "", "Hello@gmail.com", "", "Le temps des Cerises");
echo "Hello". $user -> username . $user -> email . $user -> signature;
?>