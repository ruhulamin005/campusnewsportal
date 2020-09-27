<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h3>

        <?php

          include 'connection.php';

          if(isset($_GET['ID'])){

            $post_id = $_GET['ID'];

            echo $_GET['ID'];

          $sql = "SELECT post_id,title,  description, reporter_id, isApproved FROM post WHERE isApproved='1' ";
          $result = $conn ->query($sql);

          if($result -> num_rows>0){
            while ($row = $result-> fetch_assoc()) {
                    echo $row["title"] ;
            }

          }
          }

         ?>

    </h3>

  </body>
</html>
