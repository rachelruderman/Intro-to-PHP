<?php session_start();
//session start needs to be on every page you're going to be using sessions on
//sessions are good for carrying values over to another page without using too much data

echo $_SESSION['greeting'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
