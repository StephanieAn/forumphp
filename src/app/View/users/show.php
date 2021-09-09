<?php require '../app/View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>
<?php require '../app/View/includes/divdroite.php'?>

<section>

    <h1><?= $users -> username ?></h1>
    <p><?= $users -> avatar ?></p>
    <p><?= $users -> signature ?></p>

</section>

<?php require '../app/View/includes/footer.php'?>