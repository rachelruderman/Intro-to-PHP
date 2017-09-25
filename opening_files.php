<?php

  $file='example.txt';
  //w stands for writing, so we're going to open the file with the intention to write it
  $handle = fopen($file, 'w');
  //important to also close Files
  fclose($handle);


 ?>
