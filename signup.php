



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> User Signup</title>

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
    <h1>User Signup</h1>


<div class="container" id="container">
    <form  class="" action="signup.php" method="get">
<li>




      Name: <input type="text" name="name" value="" required placeholder="Type Name"> <br>
      Username: <input type="text" name="username" value="" required placeholder="Type Username"> <br>
      Password: <input type="password" name="password" value="" required placeholder="Type Password"> <br>
      Retype Password: <input type="password" name="retypepassword" value="" required placeholder="Retype password"> <br>
      <input type="submit" value="SignUP">
      <a href="login.php">If already signed up Login here</a>

      </div>


      </li>
  </body>
</html>






<?php

include('connection.php');


$name = $username = $password = $id = "";

$name = $_GET["name"];
//echo $name;
$username = $_GET["username"];
//echo $username;
$password = $_GET["password"];
//echo $password;


//inserting value into databases

$sql = "INSERT INTO USER VALUES ('', '$name','$username','$password') ";

if ($conn->query($sql) === TRUE) {
  echo "Sign Up Success Full";
} else {
  echo "Error SignUP: " . $sql . "<br>" . $conn->error;}


 ?>
