<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Admin Login</title>
  </head>
  <body>
    <header class="nav">

    </header>

    <main class="main">
<div class="login">
    <div class="container" id="container">
      <form  action="admin_login.php" method="get">



        Admin Username: <input type="text" name="admin_username" value="" required placeholder="Type Username"> <br>
        Admin Password: <input type="" name="admin_password" value="" required placeholder="Type Password"> <br>
        <input class="button" type="submit" value="submit">


      </form>
</div>
</div>
    </main>

    <footer class="footer">

</footer>

  </body>
</html>

<?php

include 'connection.php';

$admin_username = $_GET["admin_username"];
//echo "$admin_username";
$admin_password = $_GET["admin_password"];
//echo "$admin_password";


$_SESSION["admin_username"]= $admin_username;
echo $_SESSION['admin_username'];

$sql = "SELECT admin_username FROM admin WHERE (admin_username='$admin_username' && admin_password='$admin_password')";
$result = mysqli_query($conn, $sql);




if(mysqli_num_rows($result) > 0){

  session_start();

  echo "good";

  

      header('Location:dashboard.php');


  //header('Location:dashboard.php');
}
else {
  echo "Incorrect Info";


}
 ?>
