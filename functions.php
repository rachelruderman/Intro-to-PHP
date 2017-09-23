<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //returning values from functions
      function addNumbers($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
      }

      $result = addNumbers(345, 100);
      echo $result;

      //accessing global scope in PHP
      $x = 'outside';

      function convert(){
        global $x; //make PHP recognize that we're using the global scope. Now we can do whatever we want to this variable
        $x = 'inside'; //local
      }

      function convertIt(){
        global $x;
        $x = 'outtie'; //local
      }

      echo $x;
      convert();
      echo $x;
      convertIt();
      echo $x;

    ?>
  </body>
</html>
