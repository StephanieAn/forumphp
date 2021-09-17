<?php 

// avater (blob) - email - nickname - password - signature

 


class register {
    

    public function ValidateNickname($name,$email,$password,$signature) {
       
       if (empty($email)|| empty($name) || empty($password) || empty($signature) )  {
        echo "tous les champs requis ne sont pas complétés";



       }
       else {

        require "../App/Model/register_check.php";
            if ( nickname_unique($name) === false ) {
                echo "mauvais identifiant";
            }
            else {
                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    require "../App/Model/insert_data.php";
                    insert($email,$name,$password,$signature);
                }
                else {
                    echo "{$email}: Not a valid email"."<br>";
                }
            }

       }
      

    }

}

if(isset($_POST["register"])){
    $email = $_POST['email']; 
    echo $email;
    $nickname= $_POST['username']; 
    $password = $_POST['password']; 
    $hashPassword = password_hash($password,PASSWORD_BCRYPT);
    $signature = $_POST['signature'];
    $appel = new register ();

    $appel -> ValidateNickname($nickname,$email,$hashPassword,$signature);  
}


?>