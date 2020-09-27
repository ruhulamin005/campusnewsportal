<?php
include 'connection.php';

$post_id = $_GET["post_id"];

$sql = "DELETE FROM post where post_id='$post_id'";

$result = $conn ->query($sql);



//  echo "Deleted News Id:"; echo "$post_id";

  include 'dashboard.php';




 ?>
