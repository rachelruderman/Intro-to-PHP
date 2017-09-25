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

  function updateUsers(){
    global $connection;

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
      ini_set('display_errors', 'On');
      die('Query Failed: ' . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }

 ?>
