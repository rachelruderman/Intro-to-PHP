<?php

  $file='example.txt';

  if($handle = fopen($file, 'w')) {
    fwrite($handle, 'I love PHP and this is really good stuff');
    fclose($handle);
  } else {
    echo "Unable to write file";
  }

 ?>
