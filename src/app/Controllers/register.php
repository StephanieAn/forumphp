<?php
require_once "../Model/register.php";

require_once "../Config/config.php";

(new User ($_POST["username"],$_POST["avatar"],$_POST["email"],$_POST["password"],$_POST["signature"])) -> createUser();
