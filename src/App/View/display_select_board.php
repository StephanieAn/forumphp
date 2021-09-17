<?php 

require("../App/Model/board_fetch.php");

$fetchedData = fetchBoard();

foreach($fetchedData as $board){
?>


            <option value="<?php  echo $board['Name']?>"><?php echo $board['Name']?></option>

<?php
}

?>