<?php
  if(isset($_POST['submit'])){
    echo 'yes we got it!';
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username && $password){
      echo '<br>' . "hi $username, your password is $password";
    } else {
      echo '<br> noooo <br>';
    }
    //params: the server, server username, server password, database
    //default server username is 'root'
    $connection = mysqli_connect('localhost', 'root', 'root', 'login-app');

    if($connection){
      echo 'we are connected!';
    } else {
      die('db connection failed');
      //die stops running the code
    }

    //.= to concatenate
    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die('Query Failed: ' . mysqli_error());
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
        </form>
      </div>
    </div>
  </body>
</html>
