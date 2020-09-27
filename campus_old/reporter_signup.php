<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reporter SignUP</title>
  </head>
  <body>
    <h1>Reporter Signup</h1>

    <form class="" action="reporter_signup.php" method="get">



    Reporter Name: <input type="text" name="rname" value="" required placeholder="Type Name"> <br>
    Reporter Username: <input type="text" name="rusername" value="" required placeholder="Type Username"> <br>
    Password: <input type="password" name="password" value="" required placeholder="Type Password"> <br>
    Retype Password: <input type="password" name="retypepassword" value="" required placeholder="Retype Username"> <br>
    <input type="submit" value="submit">
    

  </form>

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
