<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/detail.css">
    <title></title>
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

    <div class="title">
    <h3>

        <?php

          include 'connection.php';
          if(isset($_GET['ID'])){

            echo $_GET['ID'];
            $post_id = $_GET['ID'];
            echo "$post_id";
            //echo "$post_id";

          $sql = "SELECT post_id,title,description FROM post WHERE post_id ='$post_id'";
          $result = $conn ->query($sql);

          if($result -> num_rows>0){
            while ($row = $result-> fetch_assoc()) {
                    echo $row["title"];
            }

          }
        }

         ?>

    </h3>
      </div>

      <div class="detail">
    <p>
    <?php

    include 'connection.php';
    if(isset($_GET['ID'])){

      echo $_GET['ID'];
      $post_id = $_GET['ID'];
      echo "$post_id";
      //echo "$post_id";

    $sql = "SELECT post_id,title,description FROM post WHERE post_id ='$post_id'";
    $result = $conn ->query($sql);

    if($result -> num_rows>0){
      while ($row = $result-> fetch_assoc()) {
              echo $row["description"];
      }

    }
  }




     ?>


</div>





    </p>

</main>

<footer class="footer">
</footer>

  </body>
</html>
