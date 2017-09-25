<?php include "db.php";
      include "functions.php";

      if(isset($_POST['submit'])){
        deleteUsers();
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
        <form class="" action="login_delete.php" method="post">
          <input name='submit' type="submit" name="submit" value="Delete User" class='btn btn-primary'>
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
