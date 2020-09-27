<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Home</title>
  </head>
  <body>






  <header class="nav">
    <ul class="ull">
      <li class="lii"><a href="index.php">Campus News Portal</a></li>
      <li class="lii"><a class="active" href="index.php">Home</a></li>
      <li class="lii"><a href="admin_login.php">Admin</a></li>
      <li class="lii"><a href="reporter_login.php">Reporter</a></li>
      <li class="lii"><a href="login.php">User</a></li>
      <li class="lii">

        <a href="logout.php">

          <?php
            session_start();
            if(isset($_SESSION["username"])){
              echo "Logout";

                }

          ?>
        </a>


      </li>


    </ul>

    </header>

    <main class="main">
    <h1>Campus News Portal</h1>


    <?php
      //session_start();
      if(isset($_SESSION["username"])){
        include 'search.php';

          }

    ?>



      <ul class="news">

      <?php
        include 'connection.php';
        $sql = "SELECT post_id,title,  description, reporter_id, isApproved FROM post WHERE isApproved='1' ";
        $result = $conn ->query($sql);

        if($result -> num_rows>0){
          while ($row = $result-> fetch_assoc()) {
                  echo "<li class='newl'><a href = 'newsdetail.php?ID={$row['post_id']}'>{$row['title']}</a></li>\n";
                //  echo "<a >.$row["title"]."</a>";
          }

        }




       ?>

</ul>

      </main>


      <footer class="footer">
      </footer>
  </body>
</html>





<?php









 ?>
