<?php 
$servername = "188.166.24.55";
$usern = "forum-papy-brossard";
$passw = "zbg9QmdLbO5SpDSN";

try{
   $conn = new PDO("mysql:host=$servername;dbname=forum-papy-brossard",$usern,$passw);
   $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
   print "Erreur !: " . $e->getMessage() . "<br/>"; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savage Forum</title>
</head>
<body>
    <header>
        <h1>The Savage Forum</h1>
        <ul>
            <li>Register</li>
            <li>Log In</li>
        </ul>
    </header>

    <main>
        <div class="title"> 
            <h2> <? foreach ($variable as $key => $value) {
                # code...
            } ?></h2>
        </div>
        <div class="board">
            <? foreach ($variable as $key => $value) {
                # code...
            }?>
        </div>
    </main>
</body>
</html>