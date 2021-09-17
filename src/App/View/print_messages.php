<?php

require "../App/Model/fetch_messages.php";

if(empty($_SESSION['id'])){
  $_SESSION['id'] = NULL;
}


$topic_id=$_GET['topic_number'] ; 

$first_comment=first_comment($topic_id);
$list_messages=display_comments($topic_id);

?>


<!-- FIRST MESSAGE -->
<div class="row">
  <h2 class="bg-light text-center"><?php echo $first_comment["TITLE"]; ?></h2>
  <?php if($first_comment['Author_ID'] == $_SESSION['id']){

    ?>
  <form action="" class="ml-auto" method="POST">
      <button class="btn btn-primary rounded" id="submit" type="submit" name ="lock" ><?php
      if($topic_current['locked'] == "no"){
        echo "Lock <i class='fas fa-lock h4 ml-3 '></i>";
      }else if($topic_current['locked'] == "yes"){
        echo "Unlock <i class='fas fa-unlock h4 ml-3 ''></i>";
      }
      ?></button>
  </form>
<?php
  }
  ?>
</div>
<div class="row mt-5">
                <div class="col-3">
                  <div class ="img-modifier mb-2">
                    <?php echo isImage($first_comment["Avatar"], "80", $first_comment["Email"]); ?>
                  </div>
                  <h6><?php echo $first_comment["Nickname"] ?></h6>
                  <p class="user-id"><strong>Posts: <?php require "../App/Model/count_post_first.php" ?></strong></p>
                </div>
                <div class="col-9">
                  <p class="user-id"> <i class="far fa-clock mr-2"></i><?php echo $first_comment["Creation_Date"] ?> <?php require "../App/Controller/last_modification.php" ?>  </p>
                  <p class="user-id mb-5"><?php echo $first_comment["Content"] ?> </p>
                  <?php 
                  if($first_comment['Author_ID'] == $_SESSION['id']){
                    ?>
                    <form method="POST" action="edit_comment.php?topic_num=<?Php echo $topic_id ?>"  id="modify-comment">
                    <button id="submit" type="submit" name="edit" class="btn btn-primary mt-5 w-25 h2">Modify</button>
                    </form> 
                    
                    <?php
                  }
                  ?>
                  <hr>
                  <p class="user-id"> <?php echo $first_comment["Signature"] ?> </p>
                </div>
              </div>
<!-- FOLLOWING MESSAGES -->

<?php
foreach($list_messages as $i=>$list){
    ?>

              <div id="<?php echo $i; ?>" class="row mt-5">
                <div class="col-3">
                  <div class ="img-modifier mb-2">
                  <?php echo isImage($list["Avatar"], "80", $list["Email"]); ?>
                  </div>
                  <h6><?php echo $list["Nickname"] ?></h6>
                  <p class="user-id"><strong>Posts: </strong> <?php require "../App/Model/count_post.php" ?></p>
                </div>
                <div class="col-9">
                  <p class="user-id"> <i class="far fa-clock mr-2"></i><?php echo $list["Create_date"] ?>   <?php require "../App/Controller/last_modification_following.php"; ?>  </p>
                  <p class="user-id mb-5"><?php echo $list["Content"] ?> </p>
                  <?php
                  if($list['Author_ID'] === $_SESSION['id']){
                    ?>
                    <form method="POST" action="edit_list.php?id_message=<?Php echo $list['ID_Message']?>"  id="modify-comment">
                    <button id="submit" type="submit" name="edit" class="btn btn-primary mt-5 w-25 h2">Modify</button>
                    </form> 

                  <?php
                  } 
                  ?>
                  <hr>
                  <p class="user-id"> <?php echo $list["Signature"] ?> </p>
                </div>
              </div>

<?php 
}
?>


