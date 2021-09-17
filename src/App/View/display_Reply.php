<?php


if($topic_current['locked'] == "no"){

    ?>

<form action="<?php echo $_SERVER['REQUEST_URI']; ?>#comment" method="POST">
<button type="submit" name="post-reply" id="new-message" class="h5 mr-5 text-white bg-primary p-3 rounded-pill" href="#"> Post Reply <i class="fas fa-reply"></i></button>
</form>

<?php
}
?>




