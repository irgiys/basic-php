<?php 
   function faktorialInt(int $num) : int
   {
      $total = 1;
      for($i = 1; $i <= $num; $i++){
         $total *= $i;
      }
      return $total;
   }

   var_dump(faktorialInt(3));

   // recursive
   function recursiveFaktorial(int $num) : int
   {
      if($num === 1){
         return 1;
      }
      return $num * recursiveFaktorial($num - 1); 
   };

   var_dump(recursiveFaktorial(5));

   function loop(int $num){
      if($num == 0 ){
         echo "End loop";
      }else{
         echo "Loop ke-$num" . PHP_EOL;
         loop($num - 1); 
      }
   }; 

   loop(3000000);