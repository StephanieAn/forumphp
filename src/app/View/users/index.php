<?php require '../app/View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>
<Main id="main">
<?php require '../app/View/includes/divdroite.php'?>
<?php require '../app/View/includes/btn.php'?>
    <section id="background">
    <h1>Users</h1>
    
    <ul>
        <?php foreach ($users as $user) : ?>
            
            <?php /*<li><a href="index.php?page=articles-show&title=<?= $article["title"]?>"><?= $article["title"] ?> (<?= $article["publish_date"]?>)</a> </li>*/?>
            <li><a href="index.php?page=Users-show&Username=<?= $user->username?>"><?=$user->username ?>  </a></li>
        <?php endforeach; ?>
    </ul>
    </section>
</Main>


<?php require '../app/View/includes/footer.php'?>