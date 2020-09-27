<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Logout</h1>

    <?php

    session_start();
     session_destroy();
    //echo "Session end";
    header('Location:index.php');

     ?>



  </body>
</html>
