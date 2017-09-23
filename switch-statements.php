<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $number = 10;
      //switch statements are great when you're testing one condition against multiple values
      switch($number){
        case 34:
        echo "number is 34";
        break; // 'i found what i needed, so break out of this'
        case 37:
        echo "number is 37";
        break;
        case 32:
        echo "number is 32";
        break;
        //in case all cases are not true, can write a default
        default:
        echo "could not find anything";
        break;
      }
    ?>
  </body>
</html>
