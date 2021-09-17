<?php
    if(!isset($_SESSION['email']) && !isset($_SESSION['username']))
    {
?>

                <li class="nav-item">
                  <a class="nav-link text-white" href="#"><i class="fas fa-pen-square"></i>Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#"><i class="fas fa-sign-in-alt"></i>Login</a>
                </li>



<?php
    }
?>
