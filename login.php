<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login User</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
  </head>
  <body>





  <main class="main">

  <div class="login">
    <h1> User Login</h1>

    <div class="container" id="container">
      <form  action="login.php" method="get">

        Username: <input type="text" name="username" value="" required placeholder="Type Username"> <br>
        Password: <input type="password" name="password" value="" required placeholder="Type Password"> <br>
        <input class="button" type="submit" value="submit">
        <a href="retrieve_pass.php">Forgot password?</a>
          <a href="signup.php">If you don't  signed up yet  signup here</a>

      </form>

    </div>
</div>
</main>


  </body>
</html>

<?php
include 'connection.php';
session_start();
if(isset($_SESSION["username"])){
 header('Location:index.php');
}
else {
  // code...



$name = $username = $password = $id = "";

$username = $_GET["username"];
echo $username;
$password = $_GET["password"];
echo $password;


$_SESSION["username"]= $username;
echo $_SESSION['username'];





$sql = "SELECT name FROM user WHERE (username='$username' && password='$password')";
$result = mysqli_query($conn, $sql);
echo "<br>";

if(mysqli_num_rows($result) > 0){

  echo "good";
  //header('Location:home.php');
  session_start();
  $_SESSION["username"]= $username;
 echo $_SESSION['username'];

  if(isset($_SESSION["username"])){
   header('Location:index.php');
  }

}
else {
  echo "No User registered";
  echo "Please Sign Up";
  //header('Location:signup.php');

}
}











 ?>
