<?php

  $file='example.txt';

  if($handle = fopen($file, 'r')) {
    echo $content = fread($handle, 3); //each byte = 1 character
    //if you want to read the whole file, put in filesize for the bytes
    echo $fullcontent = fread($handle, filesize($file));
    fclose($handle);
  } else {
    echo "Unable to write file";
  }

 ?>
