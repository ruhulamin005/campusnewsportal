<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <form class="" action="" method="POST">
      <input type="text" name="search" value=""placeholder="Search For News">
      <input type="submit" name="" value="Search">

    </form>

  </body>
</html>

<?php

include 'connection.php';


if(isset($_POST['search'])){

    //echo $_GET["search"];
$searchq = $_POST['search'];

}

 ?>
