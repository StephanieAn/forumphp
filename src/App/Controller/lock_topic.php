<?php 
$topic_number = $_GET['topic_number'];
require '../App/Model/lock_topic_query.php';
$topic_current = get_topic($topic_number);

if(isset($_POST['lock'])){
    if($topic_current['locked'] == "no"){
        lockTopic($topic_number);
    }else if($topic_current['locked'] == "yes"){
        unlockTopic($topic_number);
    }

    $topic_current = get_topic($topic_number);

}
?>