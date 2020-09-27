
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reporter Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">

  </head>
  <body>
    <header class="nav"></header>

    <main class="main">

    <div class="login">
      <h1>Reporter Login</h1>
      <div class="container" id="container">
          <form class="" action="reporter_login.php" method="get">


            Reporter Username: <input type="text" name="rusername" value="" required placeholder="Type Username"> <br>
            Reporter Password: <input type="password" name="password" value="" required placeholder="Type Password"> <br>
            <input class="button" type="submit" value="submit">
            <br>
            <a href="retrieve_pass.php">Forgot password?</a>
            <br>
              <a href="reporter_signup.php">Dont have account? signup  here</a>

          </form>
        </div>
    </div>
    </main>


  </body>
</html>

<?php

include 'connection.php';


//session_start();

  // code...


$rname = $rusername = $password = $id = "";

$rusername = $_GET["rusername"];
echo $rusername;
$password = $_GET["password"];
echo $password;

$_SESSION["rusername"]= $rusername;
echo $_SESSION['rusername'];



$sql = "SELECT rname FROM reporter WHERE (rusername='$rusername' && password='$password')";
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) > 0){
  session_start();
  $_SESSION["rusername"]= $rusername;
 echo $_SESSION['rusername'];

  echo "good";
  //header('Location:reporter_dashboard.php');
  if(isset($_SESSION["rusername"])){
    header('Location:reporter_dashboard.php');
  }
}
else {
  echo "No User registered";
  echo "Please Sign Up";
  //header('Location:reporter_signup.php');

}



 ?>
