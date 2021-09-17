<?php 
if(isset($_SESSION['username'])){
    echo "<a href='../App/Controller/logout.php' class='nav-link bg-danger text-white rounded'><i class='fas fa-sign-out-alt'></i>Logout</a>";
}

?>