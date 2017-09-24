<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
  }
    //params: the server, server username, server password, database
    //default server username is 'root'
    $connection = mysqli_connect('localhost', 'root', 'root', 'login-app');

    if(!$connection){
      die('db connection failed');
      //die stops running the code
    }
?>
