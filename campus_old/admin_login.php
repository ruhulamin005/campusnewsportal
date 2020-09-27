<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
  </head>
  <body>


    <form  action="admin_login.php" method="get">



      Admin Username: <input type="text" name="admin_username" value="" required placeholder="Type Username"> <br>
      Admin Password: <input type="" name="admin_password" value="" required placeholder="Type Password"> <br>
       <input type="submit" value="submit">


    </form>

  </body>
</html>

<?php

include 'connection.php';

$admin_username = $_GET["admin_username"];
//echo "$admin_username";
$admin_password = $_GET["admin_password"];
//echo "$admin_password";

$sql = "SELECT admin_username FROM admin WHERE (admin_username='$admin_username' && admin_password='$admin_password')";
$result = mysqli_query($conn, $sql);




if(mysqli_num_rows($result) > 0){

  echo "good";
  header('Location:dashboard.php');
}
else {
  echo "Incorrect Info";


}
 ?>
