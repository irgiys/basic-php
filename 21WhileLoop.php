<?php

   $counter = 1;
   while($counter < 10){
      echo "Ini perulangan ke-$counter" . PHP_EOL;
      $counter++;
   }

   while($counter >= 1):
      echo "Ini perulangan ke-$counter" . PHP_EOL;
      $counter--;
   endwhile;