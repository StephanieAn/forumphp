<?php 

require('../App/Model/fetch_lastPosts.php');


$fetched_data = getLastPosts();

date_default_timezone_set('Europe/Brussels');
$time1=new DateTime();
$count=0;

foreach($fetched_data as $data){
  $count++;
}

if($count > 3){

  $count = 3;
}


for($i=0;$i<$count;$i++){
    $time2 = new DateTime($fetched_data[$i]['Creation_Date']);
    $difference=$time2->diff($time1);
     $difference_min = $difference->i;
     $difference_hour = $difference->h;
     $difference_day = $difference->d;
     $difference_month = $difference->m;
     $difference_year = $difference->y;

     $difference_total = $difference_min + ($difference_hour * 60) + ($difference_day *1440) + ($difference_month * 43800) + ($difference_year * 525599); 

     if($difference_total < 60){
       $time_post = $difference_total . " minutes ago";
     }
     if($difference_total < 1){
       $time_post = "now";
     }
     if($difference_total > 60){
      $time_post =  floor($difference_total/60) . " hours ago";
     }

     if($difference_total > 1440){
       $time_post = floor($difference_total/1440) . " days ago";
     }

     if($difference_total > 43800){
       $time_post = floor($difference_total/43800) . "months ago";
     }

     if($difference_total > 525599){
      $time_post = floor($difference_total/525599) . " years ago";
    }




?>

<td class="card my-4" style="width: 100%;">
                    <div>
                      <div class="card-body w-100">
                        <div class="title d-flex align-items-center">
                          <a href="messages.php?topic_number=<?php echo $fetched_data[$i]['Topic_Number']?>"><h5 class="card-title"><?php echo $fetched_data[$i]['TITLE']; ?> - <?php echo $fetched_data[$i]['Board_Name']; ?></h5></a>
                          <h6 class="card-subtitle ml-auto text-muted"><?php echo $time_post ?></h6>
                        </div>
                        <p class="card-text h6"><?php echo $fetched_data[$i]['Content']; ?></p>
                        <p class="card-text h6"><?php  echo $fetched_data[$i]['Nickname']?></p>
                      </div>
                    </div>
                  </td>

<?php
}

?>