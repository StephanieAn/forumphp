<?php



$countboard= BoardCount($board['Name']);
$countmessage= MessageCount($board['Name']);



?>


<li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='topic'>NB</span><br>
                    <?php  echo $countboard["nb_topics"]   ?></li>
                  <li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='posts'>NB</span><br>
                  <?php  echo $countmessage["nb_messages"]   ?></li>
                  <li class="list-group-item col-4 border-0" style="font-size: 1rem;"><span class='date'>date</span><br>
                  Last post</li>


