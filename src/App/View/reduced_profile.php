<?php 
    if(isset($_SESSION['email']) && isset($_SESSION['username'])){
?>

    <div class="container d-flex justify-content-start align-items-center bg-light p-5 my-3 border border-dark rounded flex-wrap">
        <div class="photo mr-5">
            <?php 
            isImage($_SESSION['avatar'], "80", $_SESSION['email']) ?> 
            
        </div>
        <div class="username">
            <h3 class="text-dark h4"><?php echo $_SESSION['username'] ?></h3>
            <h5 class="text-dark"><strong><?php echo $_SESSION['signature'] ?></strong></h5>
            <h4><a href="edit_user.php">Edit your profile</a></h4>
        </div>
    </div>


<?php
    }
?>


