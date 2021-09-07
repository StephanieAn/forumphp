<?php
$host ='localhost';
$user ='root';
$password= '1234';
$dbname ='forum';

$dsn = 'mysql:host='.$host.';dbname='.$dbname;

$pdo = new PDO($dsn, $user, $password);

$stmt = $pdo->query('SELECT * FROM users');
while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    echo $row->title.'<br>';
}