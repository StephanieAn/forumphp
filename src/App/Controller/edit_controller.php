<?php 
if(isset($_POST['edit'])){

    if(!empty($_POST['new-nickname']) && !empty($_POST['new-signature']) && !empty($_POST['confirm-password'])){

        $nickname = $_POST['new-nickname'];
        $signature = $_POST['new-signature'];
        $confirm = $_POST['confirm-password'];
        $avatar = $_FILES['avatar']['tmp_name'];
        $image = $_SESSION['avatar'];

        if(!empty($_FILES['avatar']['tmp_name']) && file_exists($_FILES['avatar']['tmp_name'])) {
            $image = base64_encode(file_get_contents(addslashes($avatar)));
        }
       


        require("../App/Model/register_check.php");
        require("../App/Model/change_password.php");

        if(nickname_unique_edit($nickname, $_SESSION['id']) === false){
            echo "User already chosen";
        }else{

            if(changePassword($confirm) === true){
                require_once("../App/Model/insert_data.php");
                require_once("../App/Model/fetch_image.php");
              
                if(isset($_POST['clear'])){
                    $image = NULL;
                }
                edit($_SESSION['id'],$nickname, $signature, $image);
                $_SESSION['username'] = $nickname;

                $fetchedData = fetchImage($_SESSION['username']);

                $_SESSION['avatar'] = $fetchedData['Avatar'];
                $_SESSION['signature'] = $signature;      
            }else{
                echo "nope";
            }

        }




    }


}




?>