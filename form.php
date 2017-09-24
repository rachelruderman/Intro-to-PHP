<?php
  if(isset($_POST['submit'])){
    $name = array('Edwin', 'Student', 'Peter', 'Samid');
    $minimum = 5;
    $maximum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimum){
      echo "Username has to be longer than $minimum";
    }

    //in_array is case sensitive
    if(!in_array($username, $name)){
      echo 'Sorry, you are not allowed';
    } else {
      echo 'Welcome!';
    }

    echo $username . '<br>' . $password;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- //php was pretty much built for forms -->
    <!-- //form input becomes an associative array -->
    <!-- //can't do anything without the name value on the submit input -->
    <!-- //when we click submit, the form info is sent to whatever is specified in action, and on php's side, if that information is there, then it proceeds -->
    <form action='form.php' method='post'>
      <input type="text" name='username'>
        <br>
      <input type="password" name='password'>
        <br>
      <input type="submit" name='submit'>
    </form>
  </body>
</html>
