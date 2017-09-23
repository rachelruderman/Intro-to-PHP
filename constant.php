<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $number = 10;
      echo $number . "<br>";

      define("NAME", 1000);
      echo NAME . '<br>';

      //define a function and make it return a calculation of 2 numbers
      function calc(){
        echo 1 + 2 . '<br>';
      }

      calc();

      //make a function that passes parameters and call it using params

      function calculate($num1, $num2){
        echo $num1 + $num2;
      }

      calculate(1, 2);

    ?>
  </body>
</html>
