<?php
   // goto a;
   //    echo "Helllowo wjowr" . PHP_EOL;
   // a: 
   //    echo "Heiii";
   // goto di for loop 
   $counter = 1;
   while(true){
      echo "Loop ke-$counter" . PHP_EOL;
      $counter++;
      if($counter == 20){
         goto end;
      }
   }
   end : 
   echo "End loop";