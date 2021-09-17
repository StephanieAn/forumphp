<? require_once '../app/Config/config.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum La Savane></title>    
</head>

<body class="bg-light">
<header class="header">

    <nav class="navbar navbar-expand-lg navbar-light justify-content-end p-5 ">
        
        <div class="collapse navbar-collapse text-right" id="navbarSupportedContent1">
            <div class="w-100 h4 navbar-nav">
            <ul class="navbar-nav mr-auto d-flex justify-content-end w-100">
                
              <?php
                if (isset($_SESSION["user"])) :
                    ?>
                 
                 <li class="nav-item">
                    <a class="nav-item nav-link active text-light mx-3" href="/pages/profile.php"><i
                                class="far fa-id-card"></i> Profile</a>
                 </li>
                 <p class="nav-item nav-link active text-light mx-3" href="#"><i
                                class="fas fa-user"></i> Welcome <?php $infos = infos();
                        echo $infos["userNname"];?></p>
                 <li class="nav-item">
                    <a class="nav-item nav-link text-light mx-3" href="/pages/logout.php"><i
                                class="fas fa-sign-out-alt"></i> Logout</a>
                 </li>
                <?php
                else :
                    ?>
                 <li class="nav-item">
                    <a class="nav-item nav-link text-light mx-3" href="/pages/register.php">
                        <i class="far fa-arrow-alt-circle-right"></i> Register</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-item nav-link text-light mx-3" href="/pages/login.php">
                        <i class="far fa-clipboard"></i> Login</a>
                 </li>
                 </ul>
                <?php
                endif;
                ?>

            </div>
        </a>
    </nav>

    <h1 class="text-center titre__Header align-items-center">LA SAVANE</h1>

    
</header>