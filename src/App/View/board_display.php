<?php 

require("../App/Model/board_fetch.php");

$fetchedData = fetchBoard();


foreach($fetchedData as $board){
   
?>

          
<div class="card m-5 p-3 h-auto">
              <div class="container">
                <div class="row">
                  <div class='col-3 p-0'><img class="rounded-circle z-depth-2" alt="20x20" src="data:image/jpeg;base64,<?php echo base64_encode( $board['Image'])?>" data-holder-rendered="true" style="width: 4rem; height:4rem;"></div>
                  <div class='col-9 p-0'>
                    <div class="card-body p-0">
                      <h4 class="card-title"><?php echo $board['Name']; ?></h4>
                      <p class="card-text description" style="font-size: 1.2rem;"><?php echo $board['Description']; ?></p>
                    </div>
                  </div>
                </div>
                <ul class="list-group list-group-horizontal col-12 p-0">

                <?php require "../App/View/count_boards.php"; ?>
                
                    <!-- <li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='topic'>NB</span><br>
                    Topics</li>
                  <li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='posts'>NB</span><br>
                  Posts</li>
                  <li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='date'>date</span><br>
                  Last post</li> -->
                </ul>
                <div class="card-footer text-center">
                  <a  href="topics.php?board=<?php echo $board['Name']; ?>"><button type="button" class ="btn btn-info" >  click </button> </a>
                </div>
              </div>
            </div>
<?php
}


?>