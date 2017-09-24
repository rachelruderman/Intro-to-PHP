<?php include "db.php";
  if(isset($_POST['submit'])){
    //.= to concatenate
    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die('Query Failed: ' . mysqli_error());
    }

    $listQuery = "SELECT * FROM users";
    $listResult = mysqli_query($connection, $listQuery);
    if(!listResult){
      die('List query failed');
    }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  </head>
  <body>
    <div class='container'>
      <div class='col-xs-6'>
        <?php
        //mysqli_fetch_assoc returns an associative array
        while($row = mysqli_fetch_row($listResult)){
          print_r($row);
        }
         ?>
        <form class="" action="login.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input class='form-control' type="text" name="username" value="">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class='form-control' type="password" name="password" value="">
          </div>
            <input name='submit' type="submit" name="submit" value="Submit" class='btn btn-primary'>
          <div class="form-group">
            <select name='id' id=''>
              <?php
                while($row = mysqli_fetch_assoc($listResult)){
                  $id = $row['id'];
                  echo "<option value='$id'>$id</option>";
                }
               ?>
            </select>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
