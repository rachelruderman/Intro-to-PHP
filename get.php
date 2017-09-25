<?php
  //print_r - arrays
  //& to separate params in URL
  //? to designate params in URL
  //= to designate value of param key
  print_r($_GET);
  $id = 10;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="get.php?id=<?php echo $id ?>">CLICK HERE</a>
  </body>
</html>
