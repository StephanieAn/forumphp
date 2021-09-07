<?php
class Dbh{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

public function connect(){

    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "forum";
    $this->charset = "utf8mb4";
try {
    $dsn ="mysql:host".$this->servername.",dbname=".$this->dbname.";charset=".this->charset;
    $pdo = new PDO($dsn,$this->username,$this->password);
    $pdo->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $pdo;

} catch (PDOException $e) {
    echo "connetion failed:".$e->getMessage();
}
    
}}

