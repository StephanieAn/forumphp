<?php 



function myFunction() {
    if(empty($_SESSION['username'])){
     echo "<h3 class='message bg-danger border border-success text-success'>You have to be logged in to create a topic.  </h3>";
    }
 }



if (isset($_GET['name']) === true) {
    if(empty($_SESSION['username'])) {
        myFunction();
    }
    else {
        echo "<h3 class='message bg-danger border border-success text-success'>Tu es connecté</h3>";
    }
}


?>