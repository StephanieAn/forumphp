<?php 

function isImage($avatar, $size, $email){
    if(empty($avatar)){
    ?>
        <img class="rounded-circle" src="https://secure.gravatar.com/avatar/<?php echo md5($email) ?>?d=mp&size=<?php $size; ?>" style="width:<?php echo $size ?>"px; height:<?php echo $size ?>px;" alt="">
    
    <?php
    }
    
   else if(isset($avatar)){
    ?>
        <img class="rounded-circle" src="data:image;base64,<?php echo $avatar; ?>" style="width:<?php echo $size ?>px; height:<?php echo $size ?>px;" alt="">
    
    <?php
    }
}


?>