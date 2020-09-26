<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <h1>Admin Dashboard</h1>

    <h3>Approve Post By the id</h3>



    <table>
      <tr>
        <th>Post_ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Reporter Id</th>
        <th>
          Status
        </th>
        <th>

          Delete

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
    </table>






  </body>
</html>
