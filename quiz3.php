<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      // Step 1: Make an if Statement with elseif and else to finally display string saying, I love PHP
    	if(2<4){
    		echo 'I love PHP';
    	} elseif(5 > 4) {
    		echo 'I really love PHP';
    	}else{
    		echo 'PHP for lyfe!';
    	}
      echo '<br>';
    	// Step 2: Make a forloop  that displays 10 numbers
    	for($i=0; $i<10; $i++){
    		echo $i . '<br>';
    	}

    	// Step 3 : Make a switch Statement that test againts one condition with 5 cases
      $number = 5;

    	switch($number){
    		case 4:
    			echo 'No bueno';
    			break;
    		case 5:
    			echo 'You found the number';
    			break;
    		default:
    			echo 'No match';
          break;
    	}



    ?>
  </body>
</html>
