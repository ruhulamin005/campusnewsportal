<?php
include 'connection.php';

$post_id = $_GET["post_id"];

$sql = "UPDATE post SET isApproved='1' WHERE isApproved='0'&& post_id = $post_id";

$result = $conn ->query($sql);



//  echo "Deleted News Id:"; echo "$post_id";

  include 'dashboard.php';




 ?>
