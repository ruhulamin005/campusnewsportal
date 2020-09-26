



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> User Signup</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>User Signup</h1>

    <form action="signup.php" method="get">
<li>
      <div class="form">



      Name: <input type="text" name="name" value="" required placeholder="Type Name"> <br>
      Username: <input type="text" name="username" value="" required placeholder="Type Username"> <br>
      Password: <input type="password" name="password" value="" required placeholder="Type Password"> <br>
      Retype Password: <input type="password" name="retypepassword" value="" required placeholder="Retype Username"> <br>
      <input type="submit" value="submit">
      <a href="login.php">Login</a>

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
