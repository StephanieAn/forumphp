

<?php 



require 'comment_editor.php';



$nicknameId  = Nickname_To_ID($first_comment["Nickname"]); 


echo   COUNT_POST($nicknameId);

?>