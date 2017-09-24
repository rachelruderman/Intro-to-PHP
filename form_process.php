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
