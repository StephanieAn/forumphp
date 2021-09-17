<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>

<?php require '../app/View/includes/header.php'?>

<?php require_once '../app/Controllers/UserController.php' ?>

<main id="main">
<?php require '../app/View/includes/divdroite.php'?>
<?php require '../app/View/includes/btn.php'?>
    <section id="background">
    <h1>Users</h1>
    
    <ul> 
    <?php 
    
    
        foreach ($users as $user) : {
            echo'
             <li> <a href ="index.php?page=user-show&username='.$user->username.'"></a>' . $user->username. $user->avatar.'</li>
             <li>'.$user->email.' </li>
             <li>'.$user->signature.'</li>'
             ;
        }
    ?>


        <?php endforeach; ?>

    </ul> 
    </section>
</Main>

<?php require '../app/View/includes/footer.php'?>