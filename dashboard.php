<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/table.css">

  </head>
  <body>
    <header class="nav">
      <ul class="ull">
        <li class="lii"><a href="index.php">News</a></li>
        <li class="lii"><a class="active" href="index.php">Home</a></li>
        <li class="lii"><a href="admin_login.php">Admin</a></li>
        <li class="lii">

          <a href="logout.php">

            <?php
              session_start();
              if(isset($_SESSION["admin_username"])){
                echo "Logout";

                  }

            ?>
          </a>


        </li>


      </ul>


    <main class="main">

      <h1>Admin Dashboard</h1>

      <h3>Approve or Delete  Post By their id</h3>

      <div class="login " >
        <div class="container">
      <form class="" action="approve.php" method="get">

        News Id: <input type="text" name="post_id"required placeholder="News Id" value="">
        <input class="button" type="submit" name="approve" value="Approve">

        <br>
        </form>
        <form class="" action="delete.php" method="get">
        <br>

        News Id: <input type="text" name="post_id"required placeholder="News Id" value="">
        <input class="button" type="submit" name="delete" value="Delete">

      </form>
</div>
</div>


      <table>
        <div>
        <tr>
          <th>News ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Reporter_Id</th>
          <th>
            Status
          </th>

        </tr>

        <?php
          include 'connection.php';
          $sql = "SELECT post_id,title,  description, reporter_id, isApproved FROM post WHERE isApproved='0' ";
          $result = $conn ->query($sql);

          if($result -> num_rows>0){
            while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["post_id"]."</td><td>".$row["title"]."</td><td>".$row["description"]."</td><td>".$row["reporter_id"]."</td><td>".$row["isApproved"]."</td>" ;
            }

          }




        ?>
        </div>
      </table>


    </main>


    <footer class="footer">

    </footer>



  </body>
</html>
