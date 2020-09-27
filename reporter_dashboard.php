<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <title></title>
  </head>
  <body>
    <header class="nav">
      <ul class="ull">
        <li class="lii"><a href="index.php">News</a></li>
        <li class="lii"><a class="active" href="index.php">Home</a></li>

      </ul>

      </header>


    <main class="main">

      <h1>Reporter Dashboard</h1>

      <a href="mynews.php">My News</a>
      <a href="logout.php">Logout</a>
      <h2>Add News</h2>
      <form class="container" action="reporter_dashboard.php" method="get">
      <h3>
      News Title: <br>

          <input type="text" name="title" value="" placeholder="Type news title"> <br>
      News Details:<br>

          <input type="text" name="description" value="" placeholder="Type News in detail"> <br>
      </h3>

        <input type="submit" name="submit" value="--Submit--">
      </form>

    </main>


    <footer class="footer">

    </footer>

  </body>
</html>


<?php
session_start();

if(isset($_SESSION["rusername"])){
include 'connection.php';

$post_id = $title = $description = $reporter_id = $newstime = "";

$_SESSION["rusername"];
//getting logged in username from session

$rusername =  $_SESSION["rusername"];
echo $_SESSION["rusername"];

$title = $_GET["title"];
echo "$title";
$description = $_GET["description"];
echo "$description";

//$sql1 = "SELECT reporter_id    FROM reporter WHERE (rusername='$rusername')";

//echo $sql1;
//$result1 = mysqli_query($conn, $sql1);



//into databases


$sql = "INSERT INTO post SET post_id = '', title = '$title',
description = '$description', reporter_id =
( SELECT reporter_id FROM reporter WHERE (rusername='$rusername')),isApproved='0' ";


$result = mysqli_query($conn, $sql);



echo "Submited Successfully";
}
else {

  header('Location:reporter_login.php');


}








 ?>
