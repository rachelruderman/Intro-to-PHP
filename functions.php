<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      function addNumbers($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
      }

      $result = addNumbers(345, 100);
      echo $result;

    ?>
  </body>
</html>
