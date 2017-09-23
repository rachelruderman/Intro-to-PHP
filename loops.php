<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loops</title>
  </head>
  <body>
    <?php

    //while loop
    $counter = 0;
    while ($counter < 10){
      echo "Hello Students" . "<br>";
      $counter++;
    }

    //for loop
    for($i = 0; $i < 10; $i++){
      echo $i . "<br>";
    }

    //for each - works with arrays
    $numbers = array(343, 565, 12, 76);
    foreach($numbers as $number){
      echo $number . '<br>';
    }

    ?>
  </body>
</html>
