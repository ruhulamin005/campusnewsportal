<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login User</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>

  <div class="nav"> nav </div>
  

        
  <main class="main">

  <div class="login">
    <h1> User Login</h1>

    <div class="container" id="container">
      <form  action="login.php" method="get">

        Username: <input type="text" name="username" value="" required placeholder="Type Username"> <br>
        Password: <input type="password" name="password" value="" required placeholder="Type Password"> <br>
        <input class="button" type="submit" value="submit">
        <a href="retrieve_pass.php">Forgot password?</a>
          <a href="signup.php">If already signed up Login here</a>

      </form>

    </div>
</div>
</main>

<div class="footer"><h1>Footer</h1></div>
  </body>
</html>

<?php
include 'connection.php';

$name = $username = $password = $id = "";

$username = $_GET["username"];
echo $username;
$password = $_GET["password"];
echo $password;





$sql = "SELECT name FROM user WHERE (username='$username' && password='$password')";
$result = mysqli_query($conn, $sql);
echo "<br>";

if(mysqli_num_rows($result) > 0){

  echo "good";
  //header('Location:home.php');
}
else {
  echo "No User registered";
  echo "Please Sign Up";
  //header('Location:signup.php');

}











 ?>
