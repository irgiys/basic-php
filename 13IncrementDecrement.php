<?php 
   $a = 10;
   
   // pos-increment 
   $b = $a++;
   // b = a , a = a + 1;
   var_dump($b);
   // var_dump($a++);

   // // pre-increment
   $c = ++$a;
   // a = a + 1, c = a ;
   var_dump($c);
   // var_dump(++$a);
   
   // // pos-decrement 
   // var_dump($a--);
   // // pre-decrement
   // var_dump(--$a);
