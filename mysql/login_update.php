<?php include "db.php";
      include "functions.php";

      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
      }

      $query = "UPDATE users SET ";
      $query .= "username = '$username', ";
      $query .= "password = '$password' ";
      $query .= "WHERE id = $id ";

      $result = mysqli_query($connection, $query);

      if(!$result){
        die('Query Failed: ' . mysqli_error($connection));
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
        <form class="" action="login_update.php" method="post">
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
                fetchUsers();
               ?>
            </select>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
