<?php
  if(isset($_POST)){
    echo $_POST['name'];
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="the_post.php" method="post">
      <input type="text" name="name" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
