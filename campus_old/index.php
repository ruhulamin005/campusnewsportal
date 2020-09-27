<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <h1>Homepage</h1>






      <div class="">















      <?php
        include 'connection.php';
        $sql = "SELECT post_id,title,  description, reporter_id, isApproved FROM post WHERE isApproved='0' ";
        $result = $conn ->query($sql);

        if($result -> num_rows>0){
          while ($row = $result-> fetch_assoc()) {
                  echo "<a href = 'newsdetail.php?ID={$row['post_id']}'>{$row["title"]}</a><br>\n";
                //  echo "<a >.$row["title"]."</a>";
          }

        }




       ?>

       </div>




  </body>
</html>





<?php
include 'connection.php'








 ?>
