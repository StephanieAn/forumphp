<?php 
    
    if (isset ($_SESSION['username'])) {
    if(isset($_POST['post-reply'])){
     
?>


<div id="comment" class="col-12">
        <h2 class="text-center mt-5 bg-primary rounded border border-dark p-3 text-white">New comment</h2>
      <form method="POST" action="<?php echo $_SERVER['REQUEST_URI'];?>#"    id="add-comment">
          <a class="d-flex justify-content-end text-decoration-none" href="<?php echo $_SERVER['REQUEST_URI'] ?>"><i class="fas fa-times-circle h2"></i></a>
        <div class="form-group">
          <textarea type="text" name="comment" class="form-control" rows="5" id="content" placeholder="Content" required></textarea>
        </div>
        <div class="d-flex justify-content-center">
          <button id="submit" type="submit" name="add-comment" class="btn btn-primary mt-5 w-25 h2">Submit</button>

        </div>
      </form>
      </div>

<?php
    }}

    


?>