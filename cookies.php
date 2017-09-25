<?php
//pre-built function that takes 3 params: name, value, expiration
//time is in seconds
//seconds * minutes * hours * days
$name = "some name";
$value = 100;
$expiration = time() + (60*60*24*7);

  setcookie("$name", $value, $expiration);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_COOKIE["some name"])){
        $someone = $_COOKIE["some name"];
        echo $someone;
      } else {
        echo ' no cookie ';
      }
    ?>
  </body>
</html>
