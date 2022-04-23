<?php 
   $greet = "Hello"; // global scope

   function myFunc(){
      // $greet gak bisa di panggil disini
      $hello = "greet"; // local scope
      global $greet; // global keyword
      echo "This {$GLOBALS["greet"]}" . PHP_EOL;
   }
   // echo $hello; // error
   myFunc();
   // var_dump($GLOBALS);


   // static variable 
   function staticVar(){
      static $counter = 1 ;
      echo "Counter = $counter " . PHP_EOL;
      $counter ++; 
   }
   staticVar(); // 1
   staticVar(); // 2
   staticVar(); // 3