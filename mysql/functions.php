<?php include "db.php";

  function fetchUsers(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
      die('Query Failed: ' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }

  function readUsers(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
      die('Query Failed: ' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
      print_r($row);
    }
  }

  function updateUsers(){
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die('Query Failed: ' . mysqli_error($connection));
    }
  }

  function createUsers(){
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hash_and_salt = $hashFormat . $salt;
    
    $password = crypt($password, $hash_and_salt);

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die('Query Failed: ' . mysqli_error($connection));
    } else {
      echo 'Success!';
    }
  }

  function deleteUsers(){
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die('Query Failed: ' . mysqli_error($connection));
    }
  }

 ?>
