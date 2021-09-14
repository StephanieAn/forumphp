<?php
require_once "../app/Model/Register.php";
require_once "../app/Model/Users.php";

require_once "../app/Config/config.php";

(new Users ($_POST["username"],$_POST["avatar"],$_POST["email"],$_POST["password"],$_POST["signature"])) -> createUser();
