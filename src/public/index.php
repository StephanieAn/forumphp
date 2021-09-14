<?php
//include all your model files here
    require '../app/Model/Board.php';
    require '../app/Model/Message.php';
    require '../app/Model/Topic.php';
    //require '../app/Model/Register.php';
    require '../app/Model/User.php';

//include all your controllers here
    require '../app/Controllers/BoardController.php';
    require '../app/Controllers/HomepageController.php';
    require '../app/Controllers/logout_session.php';
    require '../app/Controllers/MessageController.php';
    require '../app/Controllers/new_topic_check.php';
    require '../app/Controllers/RegisterController.php';    
    require '../app/Controllers/TopicController.php';
    require '../app/Controllers/UserController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME ?></title>
    <link rel="stylesheet" href="./style/css/style.css">
</head>
<body>
    
</body>
</html>