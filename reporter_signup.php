<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reporter SignUP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
  </head>
  <body>
    <header class="nav">
      <ul class="ull">
        <li class="lii"><a href="index.php">News</a></li>
        <li class="lii"><a class="active" href="index.php">Home</a></li>
        <li class="lii"><a href="admin_login.php">Admin</a></li>
        <li class="lii"><a href="reporter_login.php">Reporter</a></li>
        <li class="lii"><a href="login.php">User</a></li>
      </ul>

      </header>

  <main class="main">

    <div class="login">
      <h1>Reporter Signup</h1>
      <div class="container" id="container">
        <form class="" action="reporter_signup.php" method="get"  onsubmit="return validate()">



        Reporter Name: <input type="text" name="rname" value="" required placeholder="Type Name"> <br>
        Reporter Username: <input type="text" name="rusername" value="" required placeholder="Type Username"> <br>
        Password: <input type="password" name="password" value="" required placeholder="Type Password"> <br>
        Retype Password: <input type="password" name="retypepassword" value="" required placeholder="Retype Username"> <br>
        <input class="button" type="submit" value="submit">


        </form>
      </div>
    </div>


  </main>



  </body>
</html>


<?php
include 'connection.php';


$rname = $rusername = $password = $id = "";

$rname = $_GET["rname"];
//echo $rname;
$rusername = $_GET["rusername"];
//echo $rusername;
$password = $_GET["password"];
//echo $password;


//into the database


$sql = "INSERT INTO REPORTER VALUES ('', '$rname','$rusername','$password') ";

if ($conn->query($sql) === TRUE) {
  echo "Sign Up Success Full";
} else {
  echo "Error SignUP: " . $sql . "<br>" . $conn->error;}



 ?>
